<head>
    <script type="text/javascript" src="js/jquery.min.js"></script>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/msdropdown.css">
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.dd.js"></script>
<style>
    left
    {text-align: center;
    background-color: grey;
    margin-left: 10%}
</style>
  <script language="javascript">
   // document.getElementById('mainContent').removeattribute('border-right');
$(document).ready(function(e) {
try {
$(" select[name=id]").msDropDown();
$('')
} catch(e) {
alert(e.message);
}
});
</script>
</head>
<body>
<?php
$link= mysqli_connect("localhost", "root", "","phpgang") ;
      if($link->connect_error){
          die("connection failed".$link->connect_error);
      }
     // $sql="SELECT * FROM cars";
if (isset($_POST['box1']) && !empty($_POST['box1']))
    {
	             $id = $_POST['box1'];
                       $sql1= "select cars.*,models.* FROM cars,models WHERE (des='$id' and status='available' and cars.model=models.id)";
          $result=$link->query($sql1);
          echo'<select required name="comp" onchange="show2()" style="width: 300px;text-indent: 45px;margin-left:45px" class="form-control">';
           echo '<option value="">Choose model</option>';
   for($i=0;$i=$result->fetch_assoc();$i++)
{
      
echo '<option value="'.$i["model"].'">'.$i["modeln"].'</option>';
  
}
echo'</select>';
        
}

if (isset($_POST['comp']) && !empty($_POST['comp']))
{
     $file_path = 'http://localhost/carsyst/cars';
    
               $comp = $_POST['comp'];
                       $sql1= "select * FROM cars WHERE model='$comp' and status='available'";
          $result=$link->query($sql1);
//          echo'<select required name="id" style="width: 300px;text-indent: 45px;margin-left:45px" class="form-control">';
//           echo '<option value="">Choose Vehicle Id</option>';
//   for($i=0;$i=$result->fetch_assoc();$i++)
//{
//       $file_path = 'http://localhost/carsyst/cars';
//       $src=$file_path.$i['url'];
//     
//echo '<option value="'.$i["v_id"].'">'.$i["v_id"].'</option>';
//
//  
//}
//echo'</select>';
           
            $file_path = 'http://localhost/carsyst/cars/';
            
           echo'<select required id="msdrpdd20_child" required name="id" style="background-color:white;color:black;width:300px;text-align:center;text-indent: 40px;margin-left:45px" class="form-control" >';
        
           echo '<option value="" style=";height:100px;width: 200px;margin-left:200px" >CLICK to SELECT</option>';  
           for($i=0;$i=$result->fetch_assoc();$i++)
{
 
    for($j=0;$j<1;$j++)
    {  $src=$file_path.$i['url'];
   
  echo '<option style="height:300px;width: 100px;margin-left:100px;" value="'.$i["v_id"].'" data-image="'.$src.'">'.$i["v_id"].'</option>';
        }
    
}
echo "</select>";
           
         
}

?>

</body>
