        <link rel="stylesheet" href="css/pure-release-0.6.0/pure-min.css">

<?php
$link= mysqli_connect("localhost", "root", "","phpgang") ;
      if($link->connect_error){
          die("connection failed".$link->connect_error);
      }
if (isset($_POST['brand']) && !empty($_POST['brand']))
    {
	        $brand=$_POST['brand'];
           
                
                $sql="select * from models where brand='$brand'";
                 $result=$link->query($sql);
                  echo'<select required name="model"  style="width: 380px;text-indent: 45px;margin-left:45px" class="form-control">';
           echo '<option value="">Choose model</option>';
   for($i=0;$i=$result->fetch_assoc();$i++)
{
      
echo '<option value="'.$i["id"].'">'.$i["modeln"].'</option>';
  
}
echo'</select>';
                
        
}
if (isset($_POST['brandad']) && !empty($_POST['brandad']))
    {
	        $brand=$_POST['brandad'];
           
                
                $sql="select * from models where brand='$brand'";
                 $result=$link->query($sql);
                  echo'<select required name="title"  style="width: 50%;text-indent: 45px;margin-left:" class="form-control">';
           echo '<option value="">Choose model</option>';
   for($i=0;$i=$result->fetch_assoc();$i++)
{
      
echo '<option value="'.$i["id"].'">'.$i["modeln"].'</option>';
  
}
echo'</select>';
                
        
}
?>
