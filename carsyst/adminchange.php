
    
<?php
$link=  mysqli_connect("localhost", "root", "", "phpgang");
if ($link->connect_error) {
die("Connection failed: " . $link->connect_error);}
if(isset($_POST['submit']))
{
$new=$_POST['pass1'];
$newc=$_POST['pass2'];


if ($new==$newc)
{
   $sql4="UPDATE admin SET password='$newc' WHERE id='1'";
        $result4=$link->query($sql4);
 if($link->query($sql4)){
      echo '<script language="javascript">';
echo 'alert("Your Password has been Changed")';
echo '</script>';
echo" <script>
  setTimeout(function() { window.location.href='bookinglogin.php'  }, 1000);
</script> "; 
 }
}
else {
    
      echo '<script language="javascript">';
echo 'alert("Your Password has not been Changed")';
echo '</script>';
echo" <script>
  setTimeout(function() { window.location.href='bookinglogin.php'  }, 1000);
</script> "; 
}}
if(isset($_POST['email']))
{
    $newemail=$_POST['email1'];
    
    $sql5="UPDATE admin SET email='$newemail' WHERE id='1'";
        $result5=$link->query($sql5);
        if($link->query($sql5)){
      echo '<script language="javascript">';
echo 'alert("Your EMail has been Changed")';
echo '</script>';
echo" <script>
  setTimeout(function() { window.location.href='bookinglogin.php'  }, 1000);
</script> ";
}
}
?>