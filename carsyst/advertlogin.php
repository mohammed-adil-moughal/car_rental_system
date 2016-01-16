<html xmlns="http://www.w3.org/1999/xhtml">
    <?php   session_start();?>
<head>
     <link rel="stylesheet" href="css/bootstrap.min.css">
          <style type="text/css">
              #login
              {
                 border-color: red;
                 border-style: solid;
                 margin-top: 10px;
                 margin-left: 10px;
                 width: 30%;
                 text-align: center;
                 color: black;
                }
                   .background {
    background: url(klematis.jpg) repeat;
    
}

.transbox {
    margin: 30px;
    background-color: #ffffff;
 
    opacity: 0.98;
    filter: alpha(opacity=60); /* For IE8 and earlier */
}

.transbox p {
    margin: 5%;
    font-weight: bold;
    color: #000000;
          </style>
<title>Sheikh motors Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="modular-business/layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="modular-business/layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="modular-business/layout/scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="modular-business/layout/scripts/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="modular-business/layout/scripts/jquery.jcarousel.setup.js"></script>



</head>
<body id="top" style="background-image: url(stylimage/ground.jpg);	background-attachment: fixed;background-repeat: no-repeat;background-size: 100%;color: black">
    <div class="wrapper col1" style="border-color: transparent">
  <div id="topbar">
    <p>Mobile: 0727768794 |</p>
      <p>Office: 020765985</p>
    <ul>     
       <li> <a href="http://twitter.com"><img title="Twitter" src="images/twitter.png" alt="Twitter" width="35" height="35" /></a></li>
       <li> <a href="http://www.fb.com"><img title="Facebook" src="images/facebook.png" alt="Facebook" width="35" height="35" /></a></li>
       <li> <a href="http://gmail.com"><img title="Email" src="images/email.png" alt="Email" width="35" height="35" /></a></li>
       
    </ul>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="header">
    <div class="fl_left">
      <h1 style="font-family: fantasy"><a href="index.html">SHEIKH MOTORS</a></h1>
      <p>The leading car-rental service</p>
    </div>
      <div class="fl_right"> <a href="#"><img src="modular-business/images/demo/logo.png"width="90%" alt="" /></a> </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="topnav">
    <ul>
        <li class="active"><a href="modular-business/index.html">Homepage</a></li>
<!--      <li><a href="pages/style-demo.html">client</a><span>Test Text Here</span></li>
      <li><a href="pages/full-width.html">Advertise</a><span>Test Text Here</span></li>-->
      <li><a href="#">BOOKING</a><span>become a client</span>
        <ul>
           <li><a href="Bookinglogin.php">LOGIN</a></li>
           <li><a href="Bookingsignup.php">CREATE ACCOUNT</a></li>
         </ul>
      </li>
      <li><a href="#">ADVERTISE</a><span>post ads</span>
        <ul>
            <li><a href="../carsyst/advertsignup.php ">CREATE ACCOUNT</a></li>
            <li><a href="../carsyst/advertlogin.php">LOGIN</a></li>
          
        </ul>
      </li>
 <li><a href="#">VEHICLES</a><span>company vehicles for hire</span>
        <ul>
            <li><a href="userviewallcars.php">ALL VEHICLES</a></li>
            <li><a href="userviewavailablecars.php">AVAILABLE</a></li>
          
        </ul>
      </li>
        <li class="last"><a href="Advertisements.php">ADVERTS</a><span>advertised vehicles</span></li>
    </ul>
    <br class="clear" />
  </div>
    </div>
<div class="wrapper col4" style="margin-bottom: 0%">
    <div id="breadcrumb">
    <ul>
        <li><a href="modular-business/index.html">Home</a></li>
      <li>&#187;</li>
      <li><a href="">Advert</a></li>
       <li>&#187;</li>
       <li><a href="advertsignup.php">Login</a></li>
      
    </ul>
    </div>
    </div>
<div class="background">
  <div class="transbox">
<div class="wrapper col4">
    <!--<h2 style="text-align: center;">Advertise your vehicle</h2>-->
    <div id="login" style="margin-left: 35% ;margin-bottom: 1%;margin-top:10px" >
          <h2 style="background-color: #C0C0C0">Login to Account </h2>
 <form  method="POST" action="">
  <input  name="ademail" type="text" placeholder="Email" size="30px"  ><br><br>
 <input  name="userpassword" type="password" placeholder="Password" size="30px" >
      <input name="action" type="hidden" value="login" /></p>
      <p><input type="submit" value="Login" class="btn btn-primary btn-lg active" style="background-color: red"/></p>
   
    </form>
      </div>
</div>
          </div>
</div>
  <?php

               function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
            
        if(isset($_POST['action']))
        {

   if($_POST['action']=="login") 
        
     {      
     
$connection = mysqli_connect('localhost','root','','phpgang') or die(mysqli_error($connection));


       
    
        $ademail = mysqli_real_escape_string($connection,$_POST['ademail']);
        $userpassword = mysqli_real_escape_string($connection,$_POST['userpassword']);
        
        
        $_SESSION['ademail'] = $ademail;
        $strSQL = mysqli_query($connection,"select name from adprof where email='".$ademail."' and pass='".md5($userpassword)."'");
        $Results = mysqli_fetch_array($strSQL);
        if(count($Results)>=1)
        { 
            
          {$message = $Results['name']."  Login Sucessfully!!";
//             echo "<script> window.location.assign('userstart.php'); </script>";
         // echo"<script> window.location.href = 'userstart.php? email=$useremail';</script>";
        echo"<script> window.location.href = 'advaddcar.php';</script>";
        echo $_SESSION['ademail'];
           }
        }
        else
        {
            $message = "<p class='alert alert-warning fade in'>Invalid Login email or password!!</p>";
            phpAlert("INVALID LOGIN");
        } 
        echo $message;
    }
        }
        ?>

