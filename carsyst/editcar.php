<?php

$link=  mysqli_connect("localhost", "root", "", "phpgang");
if ($link->connect_error) {
die("Connection failed: " . $link->connect_error);}
 
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
 <a href="viewcar.php">BACK TO VEIW CARS</a>
 <form action="" method="post">
 <input type="hidden" name="id" value="<?php echo $plate; ?>"/>
 <div>
 <p><strong>ID:</strong> <?php echo $_GET['id'];; ?></p>
 <?php
 $link=  mysqli_connect("localhost", "root", "", "phpgang");
if ($link->connect_error) {
die("Connection failed: " . $link->connect_error);}

$sql1="SELECT * FROM cars";
$result1=$link->query($sql1);
 ?>
 <strong>RATE: *<br></strong> <input type="text" name="rate" value="<?php echo $_GET['rate']; ?>"/><br>
 <strong>DESCRIPTION: *</strong><br><textarea style="height: 200px" rows="3" name="brief" placeholder="Vehicle description." onfocus='this.select()'>
<?php   echo htmlspecialchars($_GET['brief']); ?>
</textarea><br>
 <strong>STATUS: *<br></strong>
 <!--<input type="text" name="status" value="<?php echo $_GET['status']; ?>"/><br/>-->
 <select name="status">
     <option value="available">available</option>
     <option value="booked">booked</option>
     </select>
 
 <p>* Required</p>
 
 <input type="submit" name="submit" value="Submit">
 </div>
 </form> 
 </div>
 </body>
 </html>
 
 <?php
 
$link=  mysqli_connect("localhost", "root", "", "phpgang");
if ($link->connect_error) {
die("Connection failed: " . $link->connect_error);}

 if (isset($_POST['submit']))
 { 


 
 $plate = $_GET['id'];
 $rate =$_POST['rate'];
 $brief=$_POST['brief'];
 $status=$_POST['status'];
 
      $sql1="UPDATE cars SET rate='$rate' WHERE plate='$plate'";
        $result=$link->query($sql1);
           $sql2="UPDATE cars SET brief='$brief' WHERE plate='$plate'";
        $result2=$link->query($sql2);
        $sql3="UPDATE cars SET status='$status' WHERE plate='$plate'";
        $result3=$link->query($sql3);
 
 
 header("Location: viewcar.php"); 

 }
?>