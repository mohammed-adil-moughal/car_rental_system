<?php
$reg_no = $_GET['id'];
$v_id=$_GET['v_id'];
$link= mysqli_connect("localhost", "root", "","phpgang") ;
      if($link->connect_error){
          die("connection failed".$link->connect_error);
      }
       $sql= "UPDATE booking SET status='approved' WHERE reg_no='$reg_no'";
        $result=$link->query($sql);
         if(mysqli_query($link, $sql))
            {  echo "update 1Sucessfully!!";
          
            }

      $sqlupdate="UPDATE cars SET status='booked' WHERE v_id='$v_id'";
             if(mysqli_query($link, $sqlupdate))
            {  echo "update 2Sucessfully!!";
          
            }
            header('Location:bconfirm.php');