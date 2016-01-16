<?php
extract($_POST);
  
    $pick=$_POST['pick'];
    $pickup=$_POST['pickup'];
     $drop=$_POST['drop'];
     $dropoff=$_POST['dropoff'];
   
     $model=$_POST['comp'];
     
     
     
$diff = abs(strtotime($pick) - strtotime($drop));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));


echo "<br>";




$diffday = (strtotime($drop)- strtotime($pick))/24/3600; 



$link = mysqli_connect("localhost", "root", "","phpgang") ;
                 if($link->connect_error)
                     {die("connection failed".$link->connect_error);}
      
 $sqlrate="select rate FROM cars WHERE model='$model'";
             $resultrate=$link->query($sqlrate);
                     for($i=0;$i=$resultrate->fetch_assoc();$i++)
                               {$rate=$i["rate"];}

 $sqllocation1="select pickcost FROM pick WHERE pick='$pickup'" ;
             $resultlocation1=$link->query($sqllocation1);
                   for($i=0;$i=$resultlocation1->fetch_assoc();$i++)
                          {$ratelocation=$i["pickcost"];}
 

$sqllocation2="select dropcost FROM drop_off WHERE drop_o='$dropoff'" ;
             $resultlocation2=$link->query($sqllocation2);
            
                    for($i=0;$i=$resultlocation2->fetch_assoc();$i++)
                            {$ratel=$i["dropcost"];
                           
                            }

  
    $cash=$rate*$diffday; 
    $cash=$cash+$ratelocation+$ratel;
    echo"Renting the vehicle for $years years,$months months,$days days will cost you.$cash kenyan shillings ";
   
?>