<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
 
            <script src="css/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/dist/sweetalert.css">
<script>
   
</script>
</head>
<body>
<?php

//echo"adil";
session_start();


//echo date('Y m d H:i:s', $_SESSION['time']);echo "<br>";

$userid= $_SESSION['userid'];echo "<br>";
  $v_id=$_SESSION['v_id'];echo "<br>";
 $pick= $_SESSION['pick'] ;echo "<br>";
 $pick_up=$_SESSION['pickup'];echo "<br>";
 $drop=$_SESSION['drop']  ;echo "<br>";
 $dropoff=$_SESSION['dropoff'];
$time=$_SESSION['time'];
  $cash=$_SESSION['cash'] ;
$status="pending";
// You may want to use SID here, like we did in page1.php
//echo '<br /><a href="userstart.php">page 1</a>';
  
             
//          echo $userid;echo $v_id;echo $pick;echo $pick_up;echo $drop;echo $dropoff;
          $linkadd = mysqli_connect("localhost", "root", "","phpgang") ;
                 if($linkadd->connect_error)
                     {die("connection failed".$linkadd->connect_error);}
         $sqladd="insert into booking(client_id,v_id,pick_date,pick_location,drop_date,drop_location,timestamp,cost,status) values('$userid','$v_id','$pick','$pick_up','$drop','$dropoff','$time','$cash','$status')";
            if(mysqli_query($linkadd, $sqladd))
                    
            {  //echo "booking Sucessfully!!";
          
           
            } 
            else
            {
            echo"error";    
            }
//            $sqlupdate="UPDATE cars SET status='booked' WHERE v_id='$v_id'";
//             if(mysqli_query($linkadd, $sqlupdate))
//            {  echo "update Sucessfully!!";
//          
//            }
          
       
    // echo "<script>setTimeout(\"location.href = 'userstart.php';],3000\");</script>";
    echo" <script>
  setTimeout(function() { window.location.href='userstart.php'  }, 5000);
</script> "; 
      
?>
   <!-- set up the modal to start hidden and fade in and out -->
<div id="myModal" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
<!-- dialog body -->
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h1>Thank you for using our service</h1><br>
<h1>Your Booking has been processed successfully</h1><br>
<h1>Please pay the deposit in due time to secure the vehicle</h1><br>
</div>
<!-- dialog buttons -->
<div class="modal-footer">You will be redirected to your Profile in 5 seconds...........<br>
    <a href="userstart.php">I cant wait(Click Me)</a>
</div>
</div>
</div>
</div>
 
<!-- sometime later, probably inside your on load event callback -->
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
</body>