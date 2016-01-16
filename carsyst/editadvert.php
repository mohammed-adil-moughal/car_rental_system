<style>
    
    #reset
    {
        background-color: black;
        opacity: 0.89;
        color: white;
       height:400px;
        text-align: center;
        margin-left: 200px;
        margin-right: 200px;
        margin-top: 150px;
        border-style: groove;
        border-color: white
         }
        
</style>
<body style="background-image: url(stylimage/grey.jpg)">
    <div id="reset">
<?php

$link=  mysqli_connect("localhost", "root", "", "phpgang");
if ($link->connect_error) {
die("Connection failed: " . $link->connect_error);}
 
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
 <head>
 <title>Edit Record</title>
 <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 </head>
 <body>
 <a href="userstart.php">BACK TO HOMEPAGE</a>
 
 <form action="" method="post">
 <input  class="form-control" type="hidden" name="id" value="<?php echo $plate; ?>"/>
 <div>
 <p><strong>ID:</strong> <?php echo $_GET['id'];; ?></p>
 <?php
 $link=  mysqli_connect("localhost", "root", "", "phpgang");
if ($link->connect_error) {
die("Connection failed: " . $link->connect_error);}

$sql1="SELECT * FROM addetails";
$result1=$link->query($sql1);
 ?>
 
 <strong style="color:red">DESCRIPTION: *</strong><br><textarea  class="form-control"  style="margin-left: 35%;width: 30%" required rows="3" name="description" placeholder="Vehicle description." onfocus='this.select()'>
<?php   echo htmlspecialchars($_GET['description']); ?>
</textarea><br>
<strong style="color:red">RATE: *<br></strong>
 <!--<input type="text" name="status" value="<?php echo $_GET['status']; ?>"/><br/>-->
 <select style="margin-left: 35%;width: 31.5%" class="form-control" name="rate" required>
     <option value="">Select Rate</option>
     <option value="KSH/DAY">KSH/DAY</option>
     <option value="KSH/HOUR">KSH/HOUR</option>
     </select>
 <br>
<!-- <strong><br></strong> <input class="form-control" required type="text" name="shs" value="<?php echo $_GET['shs']; ?>"/><br/>-->
 <div class="form-group" style="margin-left: 35%;width: 32%">
    <div class="input-group">
        <div class="input-group-addon">Ksh</div>
      <input  class="form-control" required type="text" name="shs" value="<?php echo $_GET['shs']; ?>"/>
     
    </div>
  </div>
 <strong style="color:red">BOOKING STATUS: *<br></strong>
 <select style="margin-left: 35%;width: 31.5%" class="form-control" name="status" required>
     <option value="">Choose Status</option>
     <option value="available">Available</option>
     <option value="booked">Booked</option>
     </select>
 <br>
 <input style="color:red" type="submit" name="submit" value="Submit">
 </div>
 </form> 
 </body>
 </html>
 
 <?php
 
$link=  mysqli_connect("localhost", "root", "", "phpgang");
if ($link->connect_error) {
die("Connection failed: " . $link->connect_error);}

 if (isset($_POST['submit']))
 { 


 
 $id = $_GET['id'];
 $description =$_POST['description'];
 $rate=$_POST['rate'];
 $shs=$_POST['shs'];
 $status=$_POST['status'];
 
      $sql1="UPDATE addetails SET rate='$rate' WHERE ad_id='$id'";
        $result=$link->query($sql1);
           $sql2="UPDATE addetails SET description='$description' WHERE ad_id='$id'";
        $result2=$link->query($sql2);
        $sql3="UPDATE addetails SET shs='$shs' WHERE ad_id='$id'";
        $result3=$link->query($sql3);
        $sql4="UPDATE addetails SET status='$status' WHERE ad_id='$id'";
        $result4=$link->query($sql4);
 
 
 
 header("Location: manageposts.php"); 

 }
?>
</div>