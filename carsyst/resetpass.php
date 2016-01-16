<head>
    <title>RESET</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
 
            <script src="css/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/dist/sweetalert.css">
</head>
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
        <a href="Bookinglogin.php">BACK TO LOGIN PAGE</a><br><br>
        Kindly enter your <i style="color: red">Email</i> and <i style="color: red">Id number</i> to enable a reset<br><br>
    <form action="" method="post">
        Id number:
        <input style="color: #000" type="text" name="id" placeholder="ID_NUMBER">
        Email address:
        <input style="color: #000"type="text" name="email" placeholder="abcd@abcd.com">
        <input style="color: red"type="submit" name="submit" value=".reset." >
        </form>
       
    </div>
</body>
<?php
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $email=$_POST['email'];
    echo $id;
    echo $email;
     $link= mysqli_connect("localhost", "root", "","phpgang") ;
      if($link->connect_error){
          die("connection failed".$link->connect_error);
          
      }
      $correct='12345678';
      echo $correct;
      $sql="select * from clients where(id='$id' and email='$email' )";
      $result=$link->query($sql);
      if($result->fetch_assoc()>=1)
      {
         $sql4="UPDATE clients SET pass='".md5($correct)."' WHERE id='$id'";
        $result4=$link->query($sql4);
        if($link->query($sql4))
        {
           echo"your password has been reset";
           echo"<div id='myModal' class='modal fade'>";
echo"<div class='modal-dialog'>";
echo"<div class='modal-content'>";

echo"<div class='modal-body'>";
echo"<button type='button' class='close' data-dismiss='modal'>&times;</button>";
echo"<h1>YOUR PASSWORD RESET IS SUCCESSFUL</h1><br>";
echo"<h1>YOUR NEWPASSWORD IS <i style='color=RED'>12345678</i></h1><br>";
echo"<h1>LOGIN TO YOUR ACCOUNT AND CHANGE YOUR PASSWORD FOR SECURITY</h1><br>";
echo"</div>";
echo"<div class='modal-footer'>You will be redirected to in 5 seconds...........<br>";
   echo" <a href='bookinglogin.php'>I cant wait(Click Me)</a>";
echo"</div>";
echo"</div>";
echo"</div>";
echo"</div>";
echo" <script>
  setTimeout(function() { window.location.href='bookinglogin.php'  }, 5000);
</script> "; 
      
        }
        else{
            echo"Your password could not be reset";
        }
 
      }
      else{echo "details dont exist";}
    
}
?>

<script>
$("#myModal").on("show", function() { // wire up the OK button to dismiss the modal when shown
$("#myModal a.btn").on("click", function(e) {
console.log("button pressed"); // just as an example...
$("#myModal").modal('hide'); // dismiss the dialog
});
});
$("#myModal").on("hide", function() { // remove the event listeners when the dialog is dismissed
$("#myModal a.btn").off("click");
});
$("#myModal").on("hidden", function() { // remove the actual elements from the DOM when fully hidden
$("#myModal").remove();
});
$("#myModal").modal({ // wire up the actual modal functionality and show the dialog
"backdrop" : "static",
"keyboard" : true,
"show" : true // ensure the modal is shown immediately
});
</script> 
