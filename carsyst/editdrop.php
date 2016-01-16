<?php

$link=  mysqli_connect("localhost", "root", "", "phpgang");
if ($link->connect_error) {
die("Connection failed: " . $link->connect_error);}
 function renderForm($id, $drop, $cost, $error)
 {
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
 <head>
 <title>Edit Record</title>
 </head>
 <body>
 <?php 
 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 
 
 <form action="" method="post">
 <input type="hidden" name="id" value="<?php echo $id; ?>"/>
 <div>
 <p><strong>ID:</strong> <?php echo $id; ?></p>
 <strong>drop off location: *</strong> <input type="text" name="drop" value="<?php echo $drop; ?>"/><br/>
 <strong>cost: *</strong> <input type="text" name="cost" value="<?php echo $cost; ?>"/><br/>
 <p>* Required</p>
 <input type="submit" name="submit" value="Submit">
 </div>
 </form> 
 </body>
 </html>
 
 <?php
 $link=  mysqli_connect("localhost", "root", "", "phpgang");
 }




$link=  mysqli_connect("localhost", "root", "", "phpgang");
if ($link->connect_error) {
die("Connection failed: " . $link->connect_error);}

 if (isset($_POST['submit']))
 { 

 if (is_numeric($_POST['id']))
 {
 
 $id = $_POST['id'];
 $drop =$_POST['drop'];
 $cost=$_POST['cost'];

 if ($drop == '' || $cost == '')
 {

 $error = 'ERROR: Please fill in all required fields!';
 

 renderForm($id, $drop, $cost, $error);
 }
 else
 {
      $sql1="UPDATE drop_off SET drop_o='$drop', dropcost='$cost' WHERE id='$id'";
        $result=$link->query($sql1);
 
 header("Location: viewlocation.php"); 
 }
 }
 else
 {
 $error='ERROR!!!!!!!!';
 echo 'Error!';
 }
 }
 else

 {
 
 if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
 {

 $id = $_GET['id']; 
  $sql="SELECT * FROM drop_off WHERE id=$id";
        $result=$link->query($sql);

 $i=$result->fetch_assoc();
 
 if($i)
 {
 
 $drop = $i['drop_o'];
 $cost = $i['dropcost'];
 
 renderForm($id, $drop, $cost, '');
 }
 else
 {
 echo "No results!";
 }
 }
 else
 {

 $error="ERROR no id selected!!!!!";
 echo $error;
 }
 }
?>