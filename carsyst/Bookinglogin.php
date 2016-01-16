<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php  session_start();
    session_regenerate_id(true); ?>
     <link rel="stylesheet" href="css/bootstrap.min.css">
       <style type="text/css">
              #login
              {
                 border-color: red;
                 border-style: solid;
                 margin-top: 10px;
                 margin-bottom:1%;
                 margin-left: 35%;
                 width: 30%;
                 text-align: center;
                 color: black;
               background-color: transparent;
               
                     
              }
               .background {
    background: url(klematis.jpg) repeat;
    //border: 2px solid black;
}

.transbox {
    margin: 30px;
    background-color: #ffffff;
    
    opacity: 0.89;
    filter: alpha(opacity=60); /* For IE8 and earlier */
}

.transbox p {
    margin: 5%;
    font-weight: bold;
    color: #000000;
}
input[type=text]
{
  border: 1px solid #ccc;
  border-radius: 3px;
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  width:200px;
  min-height: 28px;
  padding: 4px 20px 4px 8px;
  font-size: 12px;
  -moz-transition: all .2s linear;
  -webkit-transition: all .2s linear;
  transition: all .2s linear;
}
input[type=text]:focus
{
  width: 300px;
  border-color: #51a7e8;
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1),0 0 5px rgba(81,167,232,0.5);
  outline: none;
}
input[type=password]
{
  border: 1px solid #ccc;
  border-radius: 3px;
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  width:200px;
  min-height: 28px;
  padding: 4px 20px 4px 8px;
  font-size: 12px;
  -moz-transition: all .2s linear;
  -webkit-transition: all .2s linear;
  transition: all .2s linear;
}
input[type=password]:focus
{
  width: 300px;
  border-color: #51a7e8;
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1),0 0 5px rgba(81,167,232,0.5);
  outline: none;
}
          </style>
<title>Sheikh motors Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="modular-business/layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="modular-business/layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="modular-business/layout/scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="modular-business/layout/scripts/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="modular-business/layout/scripts/jquery.jcarousel.setup.js"></script>



</head>
    <body id="top" style="background-image: url(images/f2.jpg);	background-attachment: fixed;background-repeat: no-repeat;background-size: 100%;color: black">
<div class="wrapper col1">
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
      <li><a href="Bookinglogin.php">LOGIN</a><span>Your account</span>
        </li>
      <li><a href="Bookingsignup.php">SIGNUP</a><span>Use our services</span>
        
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
<div class="wrapper col4" style="margin-bottom: 0%;font-family: cursive;opacity: 0.50">
    <div id="breadcrumb">
    <ul>
        <li><a href="modular-business/index.html">Home</a></li>
      <li>&#187;</li>
      <li><a href="">Booking</a></li>
       <li>&#187;</li>
       <li><a href="advertsignup.php">Login</a></li>
      
    </ul>
    </div>
    </div>
<div class="background">
  <div class="transbox">
<div class="wrapper col4" style="margin-bottom: 0%;">
<div id="login" >
          <h1 style="background-color: #C0C0C0">Login to Proceed </h1>
 <form  method="POST" action="">
     <input  name="useremail" type="text" placeholder="Email" size="30px"  ><br><br>
  <input  name="userpassword" type="password" placeholder="Password" size="30px" >
      <input name="action" type="hidden" value="login" /></p>
      <a href="resetpass.php"><i style="color: red">forgot password</i></a>
      <p><input type="submit" value="Login" class="btn btn-primary btn-lg active" style="background-color: red"/></p>
   
    </form>
   
    
<?php
             function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
  if(isset($_POST['action']))
  {
 if($_POST['action']=="login") 
        
     {    
     
$connection = mysqli_connect('localhost','root','','phpgang') or die(mysqli_error($connection));

         $link= mysqli_connect("localhost", "root", "","phpgang") ;
      if($link->connect_error){
          die("connection failed".$link->connect_error);
          
      }
       
    
        $useremail = mysqli_real_escape_string($connection,$_POST['useremail']);
        $userpassword = mysqli_real_escape_string($connection,$_POST['userpassword']);
        echo $useremail;
        echo $userpassword;
        $sql5= "select * FROM admin where (email='$useremail'and password='$userpassword') ";
          $result5=$link->query($sql5);
          if($result5->fetch_assoc()>=1)
          {
               // $message = $Results['name']."  Login Sucessfully as administrator!!";
       echo "<script> window.location.assign('admin.html'); </script>";
        }
    else{   
        $_SESSION['useremail'] = $useremail;
//        if( $useremail=="administrator@admin.com" && $userpassword=="administrator"  )
//        {
//            $message = $Results['name']."  Login Sucessfully as administrator!!";
//       echo "<script> window.location.assign('admin.html'); </script>";
//      
//        }
        
        $strSQL = mysqli_query($connection,"select fname from clients where email='".$useremail."' and pass='".md5($userpassword)."'");
        $Results = mysqli_fetch_array($strSQL);
        if(count($Results)>=1)
        { 
            
          $message = $Results['fname']."  Login Sucessfully!!";
//             echo "<script> window.location.assign('userstart.php'); </script>";
         // echo"<script> window.location.href = 'userstart.php? email=$useremail';</script>";
        echo"<script> window.location.href = 'userstart.php';</script>";        
          }
        
        
        else
        {
            $message = "<p class='alert alert-warning fade in'>Invalid Login email or password!!</p>";
            phpAlert("Invalid LOGIN Try again ");
        } 
        echo $message;
    }
        
  }  
  }
        ?>
</div>
    </div>
      </div>
    </div>
        
        
 