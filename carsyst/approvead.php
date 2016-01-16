<?php
$add_id = $_GET['id'];

$link= mysqli_connect("localhost", "root", "","phpgang") ;
      if($link->connect_error){
          die("connection failed".$link->connect_error);
      }
       $sql= "UPDATE addetails SET approved='yes' WHERE ad_id='$add_id'";
        $result=$link->query($sql);
         if(mysqli_query($link, $sql))
            {  echo "update Sucessfully!!";
          
            }

            header('Location:approveadverts.php');