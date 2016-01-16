<?php

  $link=  mysqli_connect("localhost", "root", "", "phpgang");
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
 
 // check if the 'id' variable is set in URL, and check that it is valid
 if (isset($_GET['id']))
 {

 $id = $_GET['id'];
 
 // delete the entry
 $sql1="DELETE FROM addetails WHERE ad_id='$id'";
        $result=$link->query($sql1);
        if(mysqli_query($link, $sql1))
{
    echo " successfully deleted";
}
 //$result = mysql_query("DELETE FROM players WHERE id=$id")
 //or die(mysql_error()); 
 
 // redirect back to the view page
 header("Location: manageposts.php");
 }
 else

 {
 header("Location: manageposts.php");
 }
 
?>