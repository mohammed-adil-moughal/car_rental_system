
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
      #align{
          text-align: center;
      }
  </style>

                <link rel="stylesheet" href="css/bootstrap.min.css">
                    <style type="text/css">
                        #client
                        {
                            border-color: red;
                            border-style: solid;
                            margin-top: 10px;
                            margin-left: 10px;
                            width: 40%;
                            text-align: center;
                            background-color: #e8e8e8


                        }
                    </style>
                    <title>Sheikh motors Bookings</title>
                    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
                    <link rel="stylesheet" href="modular-business/layout/styles/layout.css" type="text/css" />
                    <script type="text/javascript" src="modular-business/layout/scripts/jquery.min.js"></script>
                    <script type="text/javascript" src="modular-business/layout/scripts/jquery.easing.1.3.js"></script>
                    <script type="text/javascript" src="modular-business/layout/scripts/jquery.jcarousel.pack.js"></script>
                    <script type="text/javascript" src="modular-business/layout/scripts/jquery.jcarousel.setup.js"></script>



           
     
    </head>
    <?php session_start(); ?> 
 
        <body id="top" >

                <!-- ####################################################################################################### -->
                        <div class="wrapper col4" style="margin-bottom: 0%;background-color: black">
    <div id="breadcrumb" style="margin-bottom: 0%;background-color: black">
    <ul>
        <li style="margin-bottom: 0%;background-color: black"><a style="margin-bottom: 0%;background-color: black" href="userstart.php">Home</a></li>
      <li>&#187;</li>
      <li style="margin-bottom: 0%;background-color: black"><a style="margin-bottom: 0%;background-color: black" href="manageposts.php">Manage posts</a></li>
       <li>&#187;</li>
      
      
    </ul>
    </div>
    </div>

                <div class="wrapper col5" style="margin-bottom: 0%">
                    <h3 style="color: #ccffcc;background-color: #999999">
                 
                  <h1 style="text-align: center;background-color: #e8e8e8;border-style: double">MANAGE YOUR POSTs </h1>
                    <div class="container" style="text-align: center;">
    
  

        
      
              <?php
 
 
     
       echo"<div id='align'>";
      $link= mysqli_connect("localhost", "root", "","phpgang") ;
      if($link->connect_error){
          die("connection failed".$link->connect_error);
      }
     
          //$ademail=  $_SESSION['ademail'];
      $client = $_SESSION['useremail'];
          
$sql1="SELECT id FROM `clients` WHERE email='$client' ";
$result1=$link->query($sql1);

for($i=0;$i=$result1->fetch_assoc();$i++)
{
    $client_id=$i['id'];
}

        $sql="SELECT models.*,brands.brandn,addetails.status,addetails.ad_id,addetails.client_id,addetails.description,addetails.model,addetails.image,addetails.rate,addetails.shs,addetails.trans,addetails.type FROM models,brands, addetails WHERE( brands.brand_id = addetails.make and client_id='$client_id' and addetails.model=models.id)";
        $result=$link->query($sql);
        $file_path = 'http://localhost/carsyst/advertcars/';
   // echo"<table border='1px' padding='1px'>";  
     echo"  <table class='table table-hover' ;border-collapse:collapse;background-color:#cccccc;width:100%;border-color:black; border: 1px solid black'>";  
echo"<thead>";
 echo"<th >";echo"Image";
     echo"<th >";echo"Title";
     echo"<th>";echo " Description "; 
     echo"<th>";echo " Make "; 
     echo"<th>"; echo " Rate"; 
     echo "<th>";echo"shs";
     echo"<th>";echo"Transmission";
     echo"<th>";echo"Status";
    
      echo"</thead";
      echo"<br>";
   echo"<tbody>";
    for($i=0;$i=$result->fetch_assoc();$i++)
{
    echo"<tr >";
    for($j=0;$j<1;$j++)
    {  $src=$file_path.$i['image'];
    
echo"<td>";echo "<img src=".$src." style='height:50px;width:80px'>";
      echo"<td style='color:black'>";echo "" .$i["modeln"];
        echo"<td style='color:black'>";echo "" .$i["description"];
      echo"<td style='color:black'>";echo "" .$i["brandn"];
      echo"<td style='color:black' >";echo "" .$i["rate"];
      echo"<td style='color:black'>";echo "" .$i["shs"];
      echo"<td style='color:black'>";echo "" .$i["trans"];
      echo"<td style='color:black'>";echo "" .$i["status"];
     
      echo '<td><a href="deleteadvert.php?id=' . $i['ad_id'] . '">Delete</a></td>';
       echo '<td><a href="editadvert.php?id=' . $i['ad_id'] . '&rate='. $i['rate'] .'&shs='.$i['shs'].'&description='.$i['description'].'">Edit</a></td>';
     
    }
    echo"</tr>";
    
}
echo"</table>";
echo"</tbody>";

echo"<br>";echo"<br>";echo"<br>";
echo"</div>";

?>
                    </div>
    </body>
</html>