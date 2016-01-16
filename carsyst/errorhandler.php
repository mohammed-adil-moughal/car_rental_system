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

    echo" <script>
  setTimeout(function() { window.location.href='modular-business/index.html'  }, 5000);
</script> "; 
      
?>
   <!-- set up the modal to start hidden and fade in and out -->
<div id="myModal" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
<!-- dialog body -->
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h1>KINDLY LOGIN</h1><br>
<h1>TO PROCEED</h1><br>
<h1>IF YOU HAVE FORGOTTEN YOUR PASSWORD A RESET IS POSSIBLE</h1><br>
</div>
<!-- dialog buttons -->
<div class="modal-footer">You will be redirected to the homepage in 5 seconds...........<br>
    <a href="modular-business/index.html">I cant wait(Click Me)</a>
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