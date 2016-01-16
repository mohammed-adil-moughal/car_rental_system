<?php

$link=  mysqli_connect("localhost", "root", "", "phpgang");
if ($link->connect_error) {
die("Connection failed: " . $link->connect_error);}
 function renderForm($id, $pick, $cost, $error)
 {
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
 <head>
       <style>
         #put
         {
             background-color: #CCCCCC;
             text-align: center;
         }
     </style>
 <title>Edit Record</title>
 </head>
 
 <body>
     <div id="put">
         <a href="viewlocation.php">BACK TO LOCATIONS</a>
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
 <strong>pick up location: *</strong><br> <input type="text" name="pick" value="<?php echo $pick; ?>"/><br/>
 <strong>cost: *</strong><br> <input type="text" name="cost" value="<?php echo $cost; ?>"/><br/>
 <p>* Required</p>
 <input type="submit" name="submit" value="Submit">
 </div>
 </form> 
         </div>
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
 $pick =$_POST['pick'];
 $cost=$_POST['cost'];

 if ($pick == '' || $cost == '')
 {

 $error = 'ERROR: Please fill in all required fields!';
 

 renderForm($id, $pick, $cost, $error);
 }
 else
 {
      $sql1="UPDATE pick SET pick='$pick', pickcost='$cost' WHERE id='$id'";
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
  $sql="SELECT * FROM pick WHERE id=$id";
        $result=$link->query($sql);

 $i=$result->fetch_assoc();
 
 if($i)
 {
 
 $pick = $i['pick'];
 $cost = $i['pickcost'];
 
 renderForm($id, $pick, $cost, '');
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