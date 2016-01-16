<?php
$reg_no = $_GET['id'];
$v_id=$_GET['v_id'];
$link= mysqli_connect("localhost", "root", "","phpgang") ;
      if($link->connect_error){
          die("connection failed".$link->connect_error);
      }
       $sql= "DELETE FROM `phpgang`.`booking` WHERE `booking`.`reg_no` = '$reg_no'";
        $result=$link->query($sql);
         if(mysqli_query($link, $sql))
            {  echo "deletee 1Sucessfully!!";
           header("Location: bconfirm.php"); 
            }

    