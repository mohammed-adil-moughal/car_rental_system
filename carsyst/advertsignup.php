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
<title>Sheikh motors Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="modular-business/layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="modular-business/layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="modular-business/layout/scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="modular-business/layout/scripts/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="modular-business/layout/scripts/jquery.jcarousel.setup.js"></script>



</head>
<body id="top"  style="background-image: url(stylimage/ground.jpg); background-attachment: fixed;background-repeat: no-repeat;background-size: 100%;color: black">
   
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
      <li><a href="#">BOOKING</a><span>become a client</span>
        <ul>
            <li><a href="Bookinglogin.php">LOGIN</a></li>
            <li><a href="Bookingsignup.php">CREATE ACCOUNT</a></li>
         </ul>
      </li>
      <li><a href="#">ADVERTISE</a><span>post ads</span>
        <ul>
            <li><a href="../carsyst/advertsignup.php">CREATE ACCOUNT</a></li>
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
      <li><a href="">Advertise</a></li>
       <li>&#187;</li>
       <li><a href="advertsignup.php">Create Account</a></li>
      
    </ul>
    </div>
    </div>
<div class="wrapper col7" style="background-image: url(stylimage/ground.jpg);	background-attachment: fixed;background-repeat: no-repeat;background-size: 100%;color: black">
   
    <div id="client"  style="margin-left: 30% ;margin-bottom: 10%;margin-top: 2%">
        <h2 style="text-align: center;">To Advertise your vehicle's Create an Account</h2>
        <h2 style="text-align: center;background-color: #C0C0C0">Fill all Fields</h2>
        <div class="container" style="text-align: center">
         <form action="" method="POST">
             <div class="form-group" style="width: 40%">
                 <p><input class="form-control" name="name" type="text" placeholder="First Name" required></p>
                 <div class="form-group">
   <p><input class="form-control" name="id" type="text" placeholder="National ID/passport" required></p>
        </div>
    <div class="form-group">
   <p><input class="form-control" name="pnumber" type="text" placeholder="Phone Number" value="+254" required></p>
        </div>
             <div class="form-group">
   <p><input class="form-control" name="email" type="text" placeholder="email" required></p>
        </div>
         <div>
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
    </div>
      
     <?php
     
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
            
        if(isset($_POST['action']))
        {
        if($_POST['action']=="signup")
        {
            $pass=$_POST['pass'];
             $pass1=$_POST['pass1'];
          $name= $_POST['name'];
             $id=$_POST['id'];
                $email=$_POST['email'];
                $pnumber=$_POST['pnumber'];
  $link= mysqli_connect("localhost", "root", "","phpgang") ;              
            if(($pass==$pass1) &&($pass!=NULL && $pass1 !=NULL))
            {$correct= $_POST['pass1'];}
            else{echo "<p class='alert alert-danger'> PASSWORDS DONT MATCH !!</p>";
            phpAlert(   "Passwords dont match "   );
             die($link->connect_error);
            }
             
      if($link->connect_error){
          die("connection failed".$link->connect_error);
          
      }
      
      $sql5= "select email FROM adprof where email='$email' ";
          $result5=$link->query($sql5);
          $sql6= "select id FROM adprof where id='$id' ";
          $result6=$link->query($sql6);
           
          
       if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
        {
            echo "<p class='alert alert-danger'>Invalid email address please type a valid email!!</p>";
             phpAlert(   "Invalid email address please type a valid email!! "   );
        }
        elseif($result6->fetch_assoc()>=1)
        {
            $message = $id." <p class='alert alert-danger'> ID already exists !!</p>";
            echo $message;
            phpAlert("Duplicate ID selected");
        }
        elseif($result5->fetch_assoc()>=1)
        {
            $message = $email." <p class='alert alert-danger'>Email already exist!!</p>";
            echo $message;
            phpAlert($email."_ already exists");
        }
        else
        { $sql="insert into adprof(id,number,name,email,pass) values('$id','$pnumber','$name','$email','".md5($correct)."')";
            if(mysqli_query($link, $sql))
            {  echo "Signup Sucessfully!!";
            phpAlert("Sign up Complete you can now Login into your account to Post your First Advertisement");
            mysqli_close($link);
            }
          
        }
           
        }
        }?>
           </div>

</body>
        