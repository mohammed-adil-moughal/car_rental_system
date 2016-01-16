<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    <h1 style="text-align: center">WELCOME TO MAXRENT THE NO 1 RENTAL SITE</h1>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
           #align{
               margin-top:20px;
                margin-left: 40%;
                  
                 
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
  width: 400px;
  border-color: #51a7e8;
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1),0 0 5px rgba(81,167,232,0.5);
  outline: none;
}
        </style>
    </head>
    <body>
        <?php
     
$connection = mysqli_connect('localhost','root','','phpgang') or die(mysqli_error($connection));


        ?>
        <?php
        include('db.php');
if(isset($_POST['action']))
{          
    if($_POST['action']=="login")
    {    $p=$_POST['password'];
    
        $email = mysqli_real_escape_string($connection,$_POST['email']);
        $password = mysqli_real_escape_string($connection,$_POST['password']);
        $strSQL = mysqli_query($connection,"select name from users where email='".$email."' and password='".md5($password)."'");
        $Results = mysqli_fetch_array($strSQL);
        if(count($Results)>=1)
        { 
            if($p=="administrator")
        {$message = $Results['name']."  Login Sucessfully as administrator!!";
       echo "<script> window.location.assign('admin.html'); </script>";
        
        }
          else {$message = $Results['name']."  Login Sucessfully!!";}
        }
        else
        {
            $message = "Invalid email or password!!";
        } 
        echo $message;
    }
    elseif($_POST['action']=="signup")
    {
        $name       = mysqli_real_escape_string($connection,$_POST['name']);
        $email      = mysqli_real_escape_string($connection,$_POST['email']);
        $password   = mysqli_real_escape_string($connection,$_POST['password']);
        $query = "SELECT email FROM users where email='".$email."'";
        $result = mysqli_query($connection,$query);
        $numResults = mysqli_num_rows($result);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
        {
            $message =  "Invalid email address please type a valid email!!";
        }
        elseif($numResults>=1)
        {
            $message = $email." Email already exist!!";
        }
        else
        {
            mysqli_query($connection,"insert into users(name,email,password) values('".$name."','".$email."','".md5($password)."')");
            //mysqli_query($connection,”insert into users(name,email,password) values(‘”.$name.”‘,'”.$email.”‘,'”.md5($password).”‘)”);
            $message = "Signup Sucessfully!!";
              echo "<script> window.location.assign('login.php'); </script>";
        }
    echo $message;}
}
 
?>
<!-- Login and Signup forms -->
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Login</a></li>
    <li><a href="#tabs-2" class="active">Signup</a></li>
 
  </ul>  
    <div id="align">
  <div id="tabs-1">
  <form action="" method="post">
    <p><input id="email" name="email" type="text" placeholder="Email"></p>
    <p><input id="password" name="password" type="password" placeholder="Password">
    <input name="action" type="hidden" value="login" /></p>
    <p><input type="submit" value="Login" /></p>
  </form>
  </div>
  <div id="tabs-2">
    <form action="" method="post">
    <p><input id="name" name="name" type="text" placeholder="Name"></p>
    <p><input id="email" name="email" type="text" placeholder="Email"></p>
    <p><input id="password" name="password" type="password" placeholder="Password">
    <input name="action" type="hidden" value="signup" /></p>
    <p><input type="submit" value="Signup" /></p>
  </form>
  </div>
</div>
</div>
    </body>
</html>
