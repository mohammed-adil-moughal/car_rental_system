<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php  session_start();?>
     <link rel="stylesheet" href="css/bootstrap.min.css">
       <style type="text/css">
              #client
              {
                 border-color: red;
                 border-style: solid;
                 margin-top: 10px;
                 margin-bottom:1%;
                 margin-left: 30%;
                 width: 30%;
                 text-align: center;
                 background-color: #e8e8e8
               
                     
              }
              .transbox {
    margin: 30px;
    background-color: #ffffff;
    
    opacity: 0.91;
    filter: alpha(opacity=60); /* For IE8 and earlier */
}

.transbox p {
    margin: 5%;
    font-weight: bold;
    color: #000000;
}
               
          </style>
<title>Sheikh motors Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="modular-business/layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="modular-business/layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="modular-business/layout/scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="modular-business/layout/scripts/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="modular-business/layout/scripts/jquery.jcarousel.setup.js"></script>
 <script src="css/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/dist/sweetalert.css">



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
        <li><a href="Bookingsignup.php" >SIGNUP</a><span>Use our services</span>
        
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
      <li><a href="" >Booking</a></li>
       <li>&#187;</li>
       <li><a href="Bookingsignup.php">Sign up</a></li>
      
    </ul>
    </div>
    </div>
<div class="wrapper col7" style="background-image: url(images/f2.jpg);	background-attachment: fixed;background-repeat: no-repeat;background-size: 100%;color: black">
     
    <div class="transbox" id="client" style="width: 40%">
        <h2 style="text-align: center;font-family: cursive">Create an Account with us to enable you to use this service</h2>
    <h1 style="text-align: center;background-color: #C0C0C0">CLIENT REGISTRATION</h1>
        <div class="container">
         <form action="" method="POST">
             <div class="form-group" style="width: 40%">
                 <p><input class="form-control" name="fname" type="text" placeholder="First Name" required></p>
    
        <div class="form-group">
            <p><input class="form-control" name="oname" type="text" placeholder="Other Names" required></p>
        </div>
        <div class="form-group">
            <p><input class="form-control"  name="id" type="number" placeholder="ID/passport number" required></p>
        </div>
        <div class="form-group">
            <p><input class="form-control" name="email" type="email" placeholder="Email address" required ></p>
    </div>
                 <div class="form-group">
                     <p><input class="form-control" name="phone1" type="text" value="+254"  required ></p>
    </div>
        <div class="form-group">
    <p style="color: #C0C0C0">Gender</p>
    <p style="color: #C0C0C0">male<input  name="gender" type="radio" value="male" required >
   female<input  name="gender" type="radio" value="female" required ></p
    <div>
        <div class="form-group">
            <p ><input class="form-control"  name="dob" type="date" placeholder="Birth Date" required ></p> 
        </div>
        <div class="form-group">
            <p><input class="form-control" name="pass" type="password" placeholder="Enter Password" required></p>
        </div>
        <div class="form-group">
   <p><input class="form-control" name="pass1" type="password" placeholder="confirm Password" required></p>
        </div>
        <div class="form-group">
            <input name="action" type="hidden" value="signup" />
            <p><input type="submit" value="Signup" name="submit" class="btn btn-primary btn-lg active" style="background-color: red" /></p>
            
    </div>
  </form>
            </div>
 
                 <?php
                 function phpAlert($msg) {
    echo '<script type="text/javascript">swal("Warning","' . $msg . '","error")</script>';
}
      function phpgood($msg) {
    echo '<script type="text/javascript">swal("Good job!","' . $msg . '","success")</script>';
    
}
                   if(isset($_POST['action']))
        {
        if($_POST['action']=="signup")
        { $phone1=$_POST['phone1'];
            $pass=$_POST['pass'];
             $pass1=$_POST['pass1'];
          $fname= $_POST['fname'];
             $oname=$_POST['oname'];
              $id=$_POST['id'];
               $gender=$_POST['gender'];
               $dob=$_POST['dob'];
                $email=$_POST['email'];
                      $link= mysqli_connect("localhost", "root", "","phpgang") ;
      if($link->connect_error){
          die("connection failed".$link->connect_error);
          
      }
            if(($pass==$pass1) &&($pass!=NULL && $pass1 !=NULL))
            {$correct=$_POST['pass1'];}
            else{echo "<p  class='alert alert-danger'> passwords dont match </p>";
             phpAlert(   "Passwords dont match "   );
             die($link->connect_error);
            }
       
      
      $sql5= "select email FROM clients where email='$email' ";
          $result5=$link->query($sql5);
          $sql6= "select id FROM clients where id='$id' ";
          $result6=$link->query($sql6);
           
         if(($pass==$pass1) &&($pass!=NULL && $pass1 !=NULL))
            {$correct=$_POST['pass1'];}
            else{echo "<p  class='alert alert-danger'> >passwords dont match </p>";
            phpAlert(   "Passwords dont match "   );
            } 
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
        {
            echo "<p class='alert alert-danger'>Invalid email address please type a valid email!!</p>";
             phpAlert(   "Invalid Email Address "   );
        }
        elseif($result6->fetch_assoc()>=1)
        {
            $message = $id." <p class='alert alert-danger'>DUPLICATE ID !!</p>";
            echo $message;
             phpAlert(   "Duplicate ID NUMBER"   );
        }
        elseif($result5->fetch_assoc()>=1)
        {
            $message = $email." <p class='alert alert-danger'>Email already exist!!</p>";
            echo $message;
             phpAlert(   $email." already exists "   );
        }
        else
        { $sql="insert into clients(fname,oname,id,phone,email,gender,dob,pass) values('$fname','$oname','$id','$phone1','$email','$gender','$dob','".md5($correct)."')";
            if(mysqli_query($link, $sql))
            {  echo "Signup Sucessfully!!";
  phpgood(   "Sign up Successfull ...Login to proceed with booking "   );
   echo "<script> window.location.assign('Bookinglogin.php'); </script>";
  //header("Location: Bookinglogin.php");
  
            mysqli_close($link);
            }
          
        }
           
        }
        }
                 
                 ?>
       </div>
         </div>
       