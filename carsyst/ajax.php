 

categrory:<br><select name="box1" onchange="show()">
                <option>---select a category---</option>>
                <option  value="sport">Sport</option>
                <option value="luxury">Luxury</option>
                <option value="Heavycommercial">Heavy Commercial</option>
                <option value="Budget">budget</option>
            </select><br>
                
            
            <label for="dept">Model</label>
              <div id="model"></div>
                                        
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
              <script src="js/jquery.min.js"></script>
              <script>
       
        function show() {
            var id = $("select[name=box1]").val();
            $.ajax({
                url: 'ajax_update.php',
                type: 'POST',

                data: {box1: id},
                success: function(data) {
                    $("#model").html(data);
                }
            });
        }
    </script>