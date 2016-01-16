<head>
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <script src="js/jquery.min.js"></script>
   

</head>
<div style="opacity: 0.97">
<body >
   
<?php
             function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
$link= mysqli_connect("localhost", "root", "","phpgang") ;
      if($link->connect_error){
          die("connection failed".$link->connect_error);
      }
     // $sql="SELECT * FROM cars";
if (isset($_POST['box1']) && !empty($_POST['box1']))
    {
   // phpAlert("afsdjkdnvf lsdrfg bvsrgfbrgjnblirgbribn;lsrbn;lsribns;rtf");
	             $id = $_POST['box1'];
                     
               if($id=="all")
               {
                                      
        //  $sql5= "select * FROM addetails  ";
                   $sql5= "SELECT models.*,brands.brandn,clients.phone,addetails.status,addetails.description,addetails.model,addetails.image,addetails.rate,addetails.shs,addetails.trans,addetails.type
               FROM clients, addetails,brands,models WHERE (addetails.model=models.id and clients.id = addetails.client_id and brands.brand_id=addetails.make and addetails.approved='yes')" ;
          $result5=$link->query($sql5);
    
       $file_path = 'http://localhost/carsyst/advertcars/';
    echo"<div class='container'>";
      echo"<div class='row'>";
     
      for($i=0;$i=$result5->fetch_assoc();$i++)
      {
     
      echo"<div class='col-md-4' >";
     
   
     
          $src=$file_path.$i['image'];
   
    echo" <a href='$src' class='thumbnail'>";
 echo"<br>";echo "<img  src=".$src." style='width:200px;height:200px;margin-left:20%;margin-top:5px'; >";

    
      echo"<br>";
          echo"<p style='color:red;margin-bottom:0%'><b>MAKE:</b></p>".$i['brandn'];
           echo"<br>";
         
          echo"<p style='color:red;margin-bottom:0%'><b>MODEL:</b></p>".$i['modeln'];
           echo"<br>";
     echo "<p style='color:red;margin-bottom:0%'><b>RATE:</b></p>" .$i["shs"].$i["rate"];
     
     echo"<br>";
     echo "<p style='color:red;margin-bottom:0%'><b>STATUS:</b></p>" .$i["status"];
     echo"<br>";
     echo"<p style='color:red;margin-bottom:0%'><b>Contact Details:</b></p>".$i['phone'];
     echo"<br>";
          echo "<p style='color:red;margin-bottom:0%'><b>DESCRIPTION:</b></p>" .$i["description"];
     echo"</a>";
     echo"<br>";   

          echo"</div>";
       
         
      }
     
     echo"</div>";
         echo"</div>";    
    }     

   
      
    
        
                   
               
              

	             else 
                          
                         
                          
        {
            $sql= "SELECT models.*,addetails.status, brands.brandn,clients.phone,addetails.description,addetails.model,addetails.image,addetails.rate,addetails.shs,addetails.trans,addetails.type
               FROM clients, addetails,brands,models WHERE (addetails.model=models.id and clients.id = addetails.client_id
                         and addetails.type = '$id' and  brands.brand_id=addetails.make and addetails.approved='yes')"; 
             
//          $sql= "select * FROM addetails WHERE type='$id' ";
          $result=$link->query($sql);
    echo"<div class='container'>";
      echo"<div class='row'>";
     $file_path = 'http://localhost/carsyst/advertcars/';
      for($i=0;$i=$result->fetch_assoc();$i++)
      {
      echo"<div class='col-md-4' >";
     
   
     
          $src=$file_path.$i['image'];

    echo" <a href='$src' class='thumbnail'>";
 echo"<br>";echo "<img  src=".$src." style='width:200px;height:200px;margin-left:20%;margin-top:5px'; >";

    
      echo"<br>";
          echo"<p style='color:red;margin-bottom:0%'><b>MAKE:</b></p>".$i['brandn'];
           echo"<br>";
         
          echo"<p style='color:red;margin-bottom:0%'><b>MODEL:</b></p>".$i['modeln'];
           echo"<br>";
     echo "<p style='color:red;margin-bottom:0%'><b>RATE:</b></p>" .$i["shs"].$i["rate"];
     
     echo"<br>";
     echo "<p style='color:red;margin-bottom:0%'><b>STATUS:</b></p>" .$i["status"];
     echo"<br>";
     echo"<p style='color:red;margin-bottom:0%'><b>Contact Details:</b></p>".$i['phone'];
     echo"<br>";
          echo "<p style='color:red;margin-bottom:0%'><b>DESCRIPTION:</b></p>" .$i["description"];
     echo"</a>";
     echo"<br>";   
     echo"</div>";
         echo"</fieldset>"; 
         
       
         
      }
      echo"</div>";
         echo"</div>";
         echo"</div>";
   
    }     

   }

?>
        </div>
    </body>
   =
</html>