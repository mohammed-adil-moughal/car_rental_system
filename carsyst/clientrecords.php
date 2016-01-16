<html>
        <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
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
            <body id="top" >

                <!-- ####################################################################################################### -->
                        <div class="wrapper col4" style="margin-bottom: 0%;background-color: black">
    <div id="breadcrumb">
    <ul>
        <li><a style="margin-bottom: 0%;background-color: black" href="userstart.php">Home</a></li>
      <li>&#187;</li>
      <li><a style="margin-bottom: 0%;background-color: black" href="clientrecords.php">Booking records</a></li>
       <li>&#187;</li>
      
      
    </ul>
    </div>
    </div>

                <div class="wrapper col5" style="margin-bottom: 0%;">
                    <h3 style="color: #ccffcc;background-color: #999999">
                 
                    <h2 style="text-align: center;background-color: #C0C0C0">YOUR RECORDS</h2>
                    <div class="container" style="text-align: center;margin-bottom: 300px">

        <?php
        session_start();
        $link = mysqli_connect("localhost", "root", "", "phpgang");
        if ($link->connect_error) {
            die("connection failed" . $link->connect_error);
        }
        $client = $_SESSION['useremail'];
         $sql="select id from clients where email='$client'";
        $result=$link->query($sql);
       for($i=0;$i=$result->fetch_assoc();$i++)
       {
          $client_id= $i["id"];
        
       }
     $sqlfetch= "SELECT drop_off.drop_o,pick.pick,booking.status,booking.timestamp,booking.pick_date,booking.pick_location,booking.drop_date,booking.drop_location,booking.cost,cars.model,cars.brand
               FROM pick,drop_off,booking,cars WHERE (booking.v_id = cars.v_id and client_id='$client_id' and booking.pick_location= pick.id and booking.drop_location= drop_off.id)" ;
    // $sqlfetch="SELECT booking.status,booking.timestamp,booking.pick_date,booking.pick_location,booking.drop_date,booking.drop_location,booking.cost, cars.model,cars.brand,pick.pick,drop_off.drop_o FROM drop_off,pick,booking,cars WHERE (booking.v_id = cars.v_id and client_id='$client_id'and booking.pick_location=pick.id and booking.drop_location=drop_off.drop_o)";
        
        $resultfetch=$link->query($sqlfetch);
        
      echo"  <table class='pure-table pure-table-horizontal' border='3' cellpadding='0' cellspacing='0' class='table table-hover' style='margin-top:0%;margin-left:0%;margin-right:20%;text-align:center;border-collapse:collapse;background-color:#cccccc;width:100%;border-color:black; border: 1px solid black'>";  
echo"<thead>";
     echo"<th >";echo"Pick up date";
     echo"<th>";echo " location "; 
     echo"<th>";echo " Drop off date"; 
     echo"<th>"; echo " location"; 
     echo "<th>";echo"Cost";
     echo"<th>";echo"Model";
     echo"<th>";echo"brand";
       echo"<th>";echo"Status";
           echo"<th>";echo"Date of booking";
      
      echo"</thead";
      echo"<br>";
   echo"<tbody>";
    for($i=0;$i=$resultfetch->fetch_assoc();$i++)
{
    echo"<tr>";
    for($j=0;$j<1;$j++)
    { 
      
      echo"<td style=color:black>";echo "" .$i["pick_date"];
        echo"<td style=color:black>";echo "" .$i["pick"];
      echo"<td style=color:black>";echo "" .$i["drop_date"];
      echo"<td style=color:black>";echo "" .$i["drop_o"];
      echo"<td style=color:black>";echo "" .$i["cost"];
      echo"<td style=color:black>";echo "" .$i["model"];
      echo"<td style=color:black>";echo "" .$i["brand"];
      if($i["status"]=='pending')
      { echo"<td style=color:red>";echo "" .$i["status"];}
      else
          {
          echo"<td style=color:green>";echo "" .$i["status"];
      }
         
    $date = $i["timestamp"];
      echo"<td>";
      echo date('Y-m-d', $date); 
  
  
    }
    echo"</tr>";
    
}
echo"</table>";
echo"</tbody>";
        ?>
          </div>              
</body>
           
</html>
  