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
      <li><a style="margin-bottom: 0%;background-color: black" href="clientprofile.php">View Profile</a></li>
       <li>&#187;</li>
      
      
    </ul>
    </div>
    </div>
                <div class="wrapper col5" style="margin-bottom: 0%">
                    <h3 style="color: #ccffcc;background-color: #999999">
                 
                    <h2 style="text-align: center;background-color: #C0C0C0">PROFILE</h2>
                    <div class="container" style="text-align: center;font-size: medium;margin-bottom: 5%">
         <?php session_start();
        
         $useremail1=$_SESSION['useremail'];
         //echo $useremail1;
           $link= mysqli_connect("localhost", "root", "","phpgang") ;
      if($link->connect_error){
          die("connection failed".$link->connect_error);
      }
        $sql="SELECT * FROM clients where email='$useremail1'";
       if( $result1=$link->query($sql));
        for($i=0;$i=$result1->fetch_assoc();$i++)
    {  
echo "<p class='text-justify'>First Name :</p>" .$i["fname"];
echo"<hr>";
   echo "<p class='text-justify'>Other Names :</p>" .$i["oname"];
   echo"<hr>";
    echo "<p class='text-justify'>ID/Passport :</p>" .$i["id"];
    echo"<hr>";
    echo "<p class='text-justify'>Phone Number :</p>" .$i["phone"].'&nbsp';
    echo '<td><a href="editclientprofile.php?phone=' . $i['phone'] . '">     Edit</a></td>';
    echo"<hr>";
  echo "<p class='text-justify'>Email Address :</p>" .$i["email"].'&nbsp';
  echo '&nbsp<td><a href="editclientprofile.php?email=' . $i['email'] . '">      Edit</a></td>';
  echo"<hr>";
 echo "<p class='text-justify'>Gender :</p>" .$i["gender"];
 echo"<hr>";
    echo "<p class='text-justify'>Date of Birth :</p>" .$i["dob"];
     echo"<hr>";
     echo"<p class='text-justify'>Password :</p>";
      echo '<a style="margin-bottom: 2%" href="editclientprofile.php?id=' . $i['id'] . '">Change password</a>';
   echo"</div>";
    
    }
         ?>
                        </div>
                    </div>
    </body>
    
        </html><a href="" style="margin-bottom: 2%">