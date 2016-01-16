<?php
/* 
 DELETE.PHP
 Deletes a specific entry from the 'players' table
*/

 // connect to the database
  $link=  mysqli_connect("localhost", "root", "", "phpgang");
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
 
 // check if the 'id' variable is set in URL, and check that it is valid
 if (isset($_GET['id']))
 {

 $id = $_GET['id'];
 
 // delete the entry
 $sql1="DELETE FROM booking WHERE reg_no='$id'";
        $result=$link->query($sql1);
        if(mysqli_query($link, $sql1))
{
    echo " successfully deleted";
}
 //$result = mysql_query("DELETE FROM players WHERE id=$id")
 //or die(mysql_error()); 
 
 // redirect back to the view page
 header("Location: bapproved.php");
 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
 header("Location: viewcar.php");
 }
 
?>