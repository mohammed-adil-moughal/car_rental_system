<head>
       
              <script src="js/jquery.min.js"></script>
              
        <script >
            
             function show2() {
            var id = $("select[name=comp]").val();
            $.ajax({
                url: 'carajax.php',
                type: 'POST',

                data: {comp: id},
                success: function(data) {
//                    $("#number").html(data);
                    alert(data);
                }
            });
        }
        
    

        </script>
        
    </head>
    <!--<body onload="show2()">-->
    

<?php



    ?>    
        <div id="number"></div>
  
        </body>