<!--it starts here this is the begining bruh-->
<html>
    <head>
    
        <meta charset="UTF-8">
        <title></title>
          <link rel="stylesheet" href="css/bootstrap.min.css">
          <style type="text/css">
              #login
              {
                 border-color: mediumblue;
                 border-style: solid;
                 margin-top: 10px;
                 margin-left: 10px;
                 width: 30%;
                 text-align: center;
                 display :none;
                     
              }
              #client
              {
                  border-color: mediumblue;
                 border-style: solid;
                 margin-top: 10px;
                 margin-left: 10px;
                 width: 40%;
                 text-align: center;
                 display :none;
                  
              }
          </style>
          <script src="js/jquery.min.js"></script>
          <script type="text/javascript">
            $(document).ready(function(){
              $(".loginpull").click(function(){
                  $(".login").slideToggle('slow')
              }) 
             $(".regpull").click(function(){
                 $("#client").slideToggle('slow')
             })
            });
        </script>
      
    </head>
    <body>
        
         <div class="loginpull">
        <input class="btn btn-default" type="button " value="LOGIN">
        </div>
        <div class="regpull" >
        <input class="btn btn-default" type="button " value="REGISTER">
        </div>
      
           
        <div id="login" class="login" >
          <legend style="background-color: #C0C0C0">Login to Account </legend>
 <form  method="POST" action="">
     <input  name="ademail" type="text" placeholder="Email" size="30px"  ><br><br>
  <input  name="userpassword" type="password" placeholder="Password" size="30px" >
      <input name="action" type="hidden" value="login" /></p>
 <p><input type="submit" value="Login" class="btn btn-primary btn-lg active"/></p>
   
    </form>
      </div>
             <?php
            
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
               
            if(($pass==$pass1) &&($pass!=NULL && $pass1 !=NULL))
            {$correct= $_POST['pass1'];}
            else{echo "<p class='text-danger'>passwords dont match or NULL fields_</p>";}
              $link= mysqli_connect("localhost", "root", "","phpgang") ;
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
        }
        elseif($result6->fetch_assoc()>=1)
        {
            $message = $id." <p class='alert alert-danger'>DUPLICATE ID !!</p>";
            echo $message;
        }
        elseif($result5->fetch_assoc()>=1)
        {
            $message = $email." <p class='alert alert-danger'>Email already exist!!</p>";
            echo $message;
        }
        else
        { $sql="insert into adprof(id,number,name,email,pass) values('$id','$pnumber','$name','$email','".md5($correct)."')";
            if(mysqli_query($link, $sql))
            {  echo "Signup Sucessfully!!";
            mysqli_close($link);
            }
          
        }
           
        }
        


   if($_POST['action']=="login") 
        
     {      
     
$connection = mysqli_connect('localhost','root','','phpgang') or die(mysqli_error($connection));


       
    
        $ademail = mysqli_real_escape_string($connection,$_POST['ademail']);
        $userpassword = mysqli_real_escape_string($connection,$_POST['userpassword']);
        
        session_start();
        $_SESSION['ademail'] = $ademail;
        $strSQL = mysqli_query($connection,"select name from adprof where email='".$ademail."' and pass='".md5($userpassword)."'");
        $Results = mysqli_fetch_array($strSQL);
        if(count($Results)>=1)
        { 
            
          {$message = $Results['name']."  Login Sucessfully!!";
//             echo "<script> window.location.assign('userstart.php'); </script>";
         // echo"<script> window.location.href = 'userstart.php? email=$useremail';</script>";
         echo"<script> window.location.href = 'advaddcar.php';</script>";
        
           }
        }
        else
        {
            $message = "<p class='alert alert-warning fade in'>Invalid Login email or password!!</p>";
        } 
        echo $message;
    }
        }
        ?>
    <div id="client">
    <legend style="text-align: center;background-color: #C0C0C0">Create Account</legend>
        <div class="container">
         <form action="" method="POST">
             <div class="form-group" style="width: 40%">
                 <p><input class="form-control" name="name" type="text" placeholder="First Name" required></p>
                 <div class="form-group">
   <p><input class="form-control" name="id" type="text" placeholder="National ID/passport" required></p>
        </div>
    <div class="form-group">
   <p><input class="form-control" name="pnumber" type="text" placeholder="Phone Number" required></p>
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
            <p><input type="submit" value="Signup" name="submit" class="btn btn-primary btn-lg active" /></p>
            
    </div>
  </form>
            </div>
    </div>
         </div>
                  </div>
              </div>
        <?php
       $date = date('m/d/Y ');
       echo $date;
       ?>
        </body>
        
      