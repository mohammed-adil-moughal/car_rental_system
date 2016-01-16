<html>
    <head>
        <title>driver</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

	<link rel="stylesheet" href="admin_files/css3menu0/style.css" type="text/css" />

    </head>
    <body style="background-color: silver">
      <input type="checkbox" id="css3menu-switcher" class="c3m-switch-input">

<ul id="css3menu0" class="topmenu">

	<li class="switch"><label onclick="" for="css3menu-switcher"></label></li>
        <li class="topfirst"><a href="admin.html" style="height:18px;line-height:18px;"><span>Home</span></a>


	<li class="topmenu"><a href="#" style="height:18px;line-height:18px;"><span>Locations</span></a>

	<ul>

		<li><a href="addlocation.php"> New Location</a></li>
                <li><a href="viewlocation.php"> Locations</a></li>

	</ul>
        </li>
        <li class="topmenu"><a href="#" style="height:18px;line-height:18px;"><span>Drivers</span></a>

	<ul>

		<li><a href="adddriver.php"> New Driver</a></li>
                <li><a href="viewdriver.php"> Drivers</a></li>

	</ul>
        </li>
        
        

	 <li class="topmenu"><a href="#" style="height:18px;line-height:18px;"><span>Vehicles</span></a>

	<ul>

		<li><a href="addcar.php">New Vehicle</a></li>
                <li><a href="viewcar.php">Vehicles</a></li>

	</ul>
        </li>
       
</ul>
    </div >
   
    <h2 style=";background-color: black;color: lawngreen;text-align: center ;margin-left: 10%;margin-right: 10%;margin-top: 10%">Driver Profiles</h3>
<?php


//Retrieves data from MySQL
$link=  mysqli_connect("localhost", "root", "", "phpgang");

 $sql1="SELECT * FROM driver ";
        $result=$link->query($sql1);
$file_path = 'http://localhost/carsyst/images/';

  echo"  <table border='1' cellpadding='0' cellspacing='0'  style='margin-top:0%;margin-left:10%;margin-right:20%;text-align:center;border-collapse:collapse;background-color:#cccccc;width:80%;font-size:larger'>";  
  echo"<th>";echo"Image";
echo"<th>";echo"Names";
echo"<th>";echo"Gender";
echo"<th>";echo"National ID";
echo"<th>";echo"Age";
 for($i=0;$i=$result->fetch_assoc();$i++) {
    echo"<tr>";
                for($j=0;$j<1;$j++)
                {
                    
        $datum=$i["dob"];
         $secondsInAYear     = 31536000;
$secondsInAMonth    =  2635200; 
$secondsInADay      =    86400;

$birthDate = strtotime($datum);

$ageInSeconds   = time() - $birthDate;

$ageInYears = floor( $ageInSeconds / $secondsInAYear );
$ageRemainder   = ( $ageInSeconds % $secondsInAYear );             

$ageInMonths    = floor( $ageRemainder / $secondsInAMonth );
$monthsRemainder    = ( $ageRemainder % $secondsInAMonth );

$ageInDays      = floor( $monthsRemainder / $secondsInAMonth );
        
        
        
        
        
                   $src=$file_path.$i['url'];
echo"<td style='text-align: center'>";echo "<img src=".$src." style='height:60px;width:60px'>  ";
echo"<td style='text-align: center'>";echo"".$i['fname'];
echo"_".$i['oname'];
echo"<td style='text-align: center'>";echo"".$i['gender'];
echo"<td style='text-align: center'>";echo"".$i['nat_id'];
echo"<td style='text-align: center'>";echo"".$ageInYears."Yrs" ;
echo '<td><a href="deletedriver.php?id=' . $i['id'] . '">Delete</a></td>';
                }
                echo"</tr>";
}
echo"</table>";

?>

    
    </body>