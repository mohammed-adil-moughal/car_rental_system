<style>
    
  #reset
    {
        background-color: black;
        opacity: 0.89;
        color: white;
       height:200px;
        text-align: center;
        margin-left: 200px;
        margin-right: 200px;
        margin-top: 200px;
        border-style: ridge;
        border-color: red;
      
         }
</style>
<body >
    <div id="reset">
        <a href="clientprofile.php" style="color:blue">BACK TO HOMEPAGE</a>
     
<?php

$link = mysqli_connect("localhost", "root", "", "phpgang");
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
   session_start();


if (isset($_GET['email']))
    {
    echo"<p>ENTER NEW EMAIL</p>";
    $email = $_GET['email'];
    echo"<form action='' method='Post'>";
    echo"<input style='width:30%' type=text name='newemail' value='$email';>";
    echo"<br>";
    echo"<input type=submit name='submit' value='submit'>";
    echo"</form>";
    if (isset($_POST['submit'])) {
        $newemail = $_POST['newemail'];
        $sql1 = "UPDATE clients SET email='$newemail' WHERE email='$email'";
        $result = $link->query($sql1);
        header("Location: userstart.php");
    }
}
else if (isset($_GET['phone'])) {
  echo"<p>ENTER NEW PHONE NUMBER</p>";

    $phone = $_GET['phone'];

    echo"<form action='' method='Post'>";
    echo"<input style='width:30%'type=text name='newno' value='$phone';>";
    echo"<br>";
    echo"<input type=submit name='submit' value='submit'>";
    echo"</form>";

    if (isset($_POST['submit'])) {
        $client = $_SESSION['useremail'];
        echo $client;
        $newno = $_POST['newno'];
        $sql1 = "UPDATE clients SET phone='$newno' WHERE email='$client'";
        if ($result = $link->query($sql1)) {
            header("Location: userstart.php");
        }
    }
}
else if (isset($_GET['id']))
    
{
 echo"<p>ENTER NEW PASSWORD</p>";
    echo"<form action='' method='Post'>";
    echo"<input type=text name='pass1' placeholder='enter new password' ;>";
    echo"<br>";
    echo"<br>";
    echo"<input type=text name='pass2' placeholder='confirm password ';>";
     echo"<br>";
    
    echo"<input type=submit name='submit' value='submit'>";
    echo"</form>";

    if (isset($_POST['submit'])) {
        $client = $_SESSION['useremail'];
       $pass1=$_POST['pass1'];
       $pass2=$_POST['pass2'];
      $correct= md5($pass1);
       if($pass1== $pass2)
       {
        $sql1 = "UPDATE clients SET pass='$correct' WHERE email='$client'";
        if ($result = $link->query($sql1)) {
            header("Location: userstart.php");
        }
       }
       else{echo "passwords dont match ";}
    }
}

?>
</div>