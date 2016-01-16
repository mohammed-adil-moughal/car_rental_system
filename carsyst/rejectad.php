<?php
$add_no = $_GET['id'];
$link= mysqli_connect("localhost", "root", "","phpgang") ;
      if($link->connect_error){
          die("connection failed".$link->connect_error);
      }
       $sql= "DELETE FROM `phpgang`.`addetails` WHERE `addetails`.`ad_id` = '$add_no'";
        $result=$link->query($sql);
         if(mysqli_query($link, $sql))
            {  echo "deletee Sucessfully!!";
          header("Location: approveadverts.php"); 
            }
