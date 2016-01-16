<!DOCTYPE html>
<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<link href="https://cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css">
<script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
    body { font-size: 140%; }
</style>
</head>
<body>
    <table id='example' border='1' cellpadding='0' cellspacing='0' class='table table-striped table-bordered' style='margin-top:0%;margin-left:0%;margin-right:20%;text-align:center;border-collapse:collapse;width:100%'>
    <thead>
<th colspan='1'>NAMES</th>
<th >CLIENT ID</th>
<th >PHONE</th>
<th >EMAIL</th>
<th >GENDER</th>
<th >AGE</th>

    </thead>
          <?php
        $link = mysqli_connect("localhost", "root", "", "phpgang");
        if ($link->connect_error) {
            die("connection failed" . $link->connect_error);
        }
        $sql="select * from clients";
        $result=$link->query($sql);
        
       
    
   echo"<tbody>";
    for($i=0;$i=$result->fetch_assoc();$i++)
{
    echo"<tr>";
    for($j=0;$j<1;$j++)
    {  $datum=$i["dob"];
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
        
    

     
     
      echo"<td >";echo "" .$i["fname"]." ";
    echo "" .$i["oname"];
      echo"<td >";echo "" .$i["id"];
      echo"<td >";echo "" .$i["phone"];
      echo"<td >";echo "" .$i["email"];
      echo"<td>";echo "".$i["gender"];
       echo"<td >";echo "" .$ageInYears."Yrs";
      

      
     
    }
    echo"</tr>";
    
}
echo"</table>";
        ?>
        </tbody>
    </table>
</body>
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').dataTable();
} );
</script>
</html>
