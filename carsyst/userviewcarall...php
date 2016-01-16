<html>
    <head>
      
        <style type="text/css">
       .s
{
    color:white;
        font-size:0px;
    display:none;
    
}
  .left{float:left;
  height:200px;width:300px;}
  
 
</style>
        <script src="js/jquery.min.js"></script>
                     <link rel="stylesheet" href="css/bootstrap.min.css">
 
        <script >
             function show() {
            var id = $("select[name=box1]").val();
            $.ajax({
                url: 'userviewcarajaxall.php',
                type: 'POST',

                data: {box1: id},
                success: function(data) {
                    $("#model").html(data);
                }
            });
        }

        </script>
        
    </head>
    <body onload="show()"style="background-image: url(stylimage/bike.jpg);background-repeat: no-repeat;width: 100%;	background-attachment: fixed;">
        
      <!--      <legend>CHOOSE YOUR VEIW</legend>
        <form method="POST" action="">
            <input type="submit" name="a" value="Available vehicles" class="submit">
            <input type="submit" name="a" value="All vehicles" class="submit">
          
             </form>-->
        
            <h3 style="color: whitesmoke"> Browse by Category:</h3>
<!--            <select name="box1"  onchange="show()" class="form-control" style="width: 20%">
            <option  value="all">::::ALL VEHICLES::::</option>
            <option value="heavy commercial">Heavy Commercial</option>
            <option value="luxury">Luxury</option>
            <option value="sport">Sport</option>
            <option value="budget">Budget</option>
        </select>-->
              <?php
     $link=  mysqli_connect("localhost", "root", "", "phpgang");
      $sqlw = "select * FROM categories";
         $resultw = $link->query($sqlw);
         echo" <select name='box1'  onchange='show()' class='form-control' style='width: 20%;margin-left: 40%;margin-bottom: 0%;height: 5%'>";
          echo '<option value="">Choose category</option>';
          echo'<option value="all">All vehicles</option>';
            for ($i = 0; $i = $resultw->fetch_assoc(); $i++) {

                echo '<option style="color:black" value="' . $i["cat_id"] . '">' . $i["cat"] . '</option>';
                   }
             echo "</select>"
    ?>
       
        
          
              <div id="model"></div>
            
    
    </body>
</html>