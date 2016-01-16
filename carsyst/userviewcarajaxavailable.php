<head>
     <link rel="stylesheet" href="css/bootstrap.min.css">
 
</head>

<body >
    <div id="left">
<div style="opacity: 0.97">
<?php

$link= mysqli_connect("localhost", "root", "","phpgang") ;
      if($link->connect_error){
          die("connection failed".$link->connect_error);
      }
     // $sql="SELECT * FROM cars";
if (isset($_POST['box1']) && !empty($_POST['box1']))
    {
	             $id = $_POST['box1'];
                     
               if($id=="all")
               {
                                                $sql5= "select cars.*,models.*,brands.* FROM cars,models,brands where(cars.brand=brands.brand_id and  cars.model=models.id and  status='available')  ";

         // $sql5= "select * FROM cars where status='available' ";
          $result5=$link->query($sql5);
    
       $file_path = 'http://localhost/carsyst/cars/';
       echo"<div class='container'>";
      echo"<div class='row' >";
      for($i=0;$i=$result5->fetch_assoc();$i++)
      {
      echo"<div class='col-md-4' >";
     
      
     
          $src=$file_path.$i['url'];
  
    echo" <a href='$src' class='thumbnail' style='height:500px' >";
 echo"<br>";echo "<img src=".$src." style='width:300px;height:200px;margin-left:10%;margin-top:5px'; >";

   
       
          echo"<br>";
          echo"<b style='color:red'>MODEL:</b>".$i['brandn'];echo"<br>";
          echo"<br>";
          echo"<b style='color:red'>MODEL:</b>".$i['modeln'];echo"<br>";
          echo"<br>";
          echo "<b style='color:red'>RATE(KSH/DAY):</b>" .$i["rate"];echo"<br>";
         echo"<br>";
      
    
      
     echo"<b style='color:red'>BOOOKING STATUS:</b>".$i['status'];echo"<br>";echo"<br>";
      echo "<b style='color:red'>DESCRIPTION :</b>" .$i["brief"];echo"<br>";
     
    
     echo"</a>";
     echo"<br>";   
     echo"</div>";
       
         
       
         
      }
         
         echo"</div>";
         echo"</div>";
           
        }
    
        
                   
               
              

	             else  
                          
                         
                          
        {
     $sql= "select cars.*,models.*,brands.* FROM cars,models,brands where(cars.brand=brands.brand_id and  cars.model=models.id and  status='available' and des='$id')  ";
                
         // $sql= "select * FROM cars WHERE des='$id' and status='available'";
          $result=$link->query($sql);
    echo"<div class='container'>";
      echo"<div class='row'>";
       $file_path = 'http://localhost/carsyst/cars/';
      for($i=0;$i=$result->fetch_assoc();$i++)
      {  
      echo"<div class='col-md-4' style='height:200px'>";
     
      
     
          $src=$file_path.$i['url'];
  
    echo" <a href='$src' class='thumbnail' style='height:500px'>";
 echo"<br>";echo "<img src=".$src."  style='width:300px;height:200px;margin-left:10%;margin-top:5px'; >";

   
       
          
          echo"<br>";
          echo"<b style='color:red'>MODEL:</b>".$i['brandn'];echo"<br>";
          echo"<br>";
          echo"<b style='color:red'>MODEL:</b>".$i['modeln'];echo"<br>";
          echo"<br>";
          echo "<b style='color:red'>RATE(KSH/DAY):</b>" .$i["rate"];echo"<br>";
         echo"<br>";
      
    
      
     echo"<b style='color:red'>BOOOKING STATUS:</b>".$i['status'];echo"<br>";echo"<br>";
      echo "<b style='color:red'>DESCRIPTION :</b>" .$i["brief"];echo"<br>";
     
     echo"</a>";
     echo"<br>";   
     echo"<br>";   
     echo"</div>";
      
         
        
         
      }
      echo"</div>";
         echo"</div>";
        
            
        }
         
    } 
            

?>
        </div>
</body>