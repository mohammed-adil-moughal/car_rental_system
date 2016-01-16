<html>
    <head>
                <link rel="stylesheet" href="css/bootstrap.min.css">

        <style type="text/css">
       .s
{
    color:white;
        font-size:0px;
    display:none;
    
}
  .left{float:left;
  height:200px;width:300px;}
  
  .display{
      background-color: #0f0f0f;
      color: #2aabd2
  }
</style>
        <script src="js/jquery.min.js"></script>
              
        <script >
             function show() {
            var id = $("select[name=box1]").val();
            $.ajax({
                url: 'userviewcarajaxavailable.php',
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
        
      
        <br>
        <h3 style="color: whitesmoke"> Browse by Category:</h3>
            <select name="box1"  onchange="show()" class="form-control" style="width: 20%" >
            <option  value="all">::::ALL VEHICLES::::</option>
            <option value="heavy commercial">Heavy Commercial</option>
            <option value="luxury">Luxury</option>
            <option value="sport">Sport</option>
            <option value="budget">Budget</option>
        </select>
            <br>
       
    
              
       
                <div id="model" ></div>
         
         
           
                 
   
    </body>
</html>
