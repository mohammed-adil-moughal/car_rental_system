<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <link rel="stylesheet" href="css/bootstrap.min.css">
         
        <script >
             function show() {
            var id = $("select[name=box1]").val();
            $.ajax({
                url: 'advertisementajax.php',
                type: 'POST',

                data: {box1: id},
                success: function(data) {
                    $("#model").html(data);
                }
            });
        }

        </script>
        
<title>Sheikh motors Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="modular-business/layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="modular-business/layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="modular-business/layout/scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="modular-business/layout/scripts/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="modular-business/layout/scripts/jquery.jcarousel.setup.js"></script>



</head>
    <body id="top" style="background-image: url(images/f2.jpg);	background-attachment: fixed;background-repeat: no-repeat;background-size: 100%;color: black">
<div class="wrapper col1">
  <div id="topbar">
    <p>Tel: 0727768794</p>
    <ul>
      <li><a href="http://gmail.com"> Mail: Sheikhmotors@kenyasport.com</a></li>
      <li><a href="http://twitter.com">Follow us on twitter @sheikmotors</a></li>
      <li><a href="http://www.fb.com">Like us on facebook</a></li>
   
    </ul>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="header">
    <div class="fl_left">
      <h1 style="font-family: fantasy"><a href="index.html">SHEIKH MOTORS</a></h1>
      <p>The leading car-rental service</p>
    </div>
      <div class="fl_right"> <a href="#"><img src="modular-business/images/demo/logo.png"width="90%" alt="" /></a> </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="topnav">
    <ul>
        <li class="active"><a href="modular-business/index.html">Homepage</a></li>
<!--      <li><a href="pages/style-demo.html">client</a><span>Test Text Here</span></li>
      <li><a href="pages/full-width.html">Advertise</a><span>Test Text Here</span></li>-->
      <li><a href="Bookinglogin.php">LOGIN</a><span>Your account</span>
        </li>
      <li><a href="Bookingsignup.php">SIGNUP</a><span>Use our services</span>
        
      </li>
 <li><a href="#">VEHICLES</a><span>company vehicles for hire</span>
        <ul>
            <li><a href="userviewallcars.php">ALL VEHICLES</a></li>
            <li><a href="userviewavailablecars.php">AVAILABLE</a></li>
          
        </ul>
      </li>

<li class="last"><a href="Advertisements.php">ADVERTS</a><span>advertised vehicles</span></li>
    </ul>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col4" style="margin-bottom: 0%;opacity: 0.50;font-family: cursive" >
    <div id="breadcrumb">
    <ul>
        <li><a href="modular-business/index.html">Home</a></li>
      <li>&#187;</li>
      <li><a href="Advertisements.php">Advertisements</a></li>
      
      
    </ul>
    </div>
    </div>
<div class="wrapper col6" style="background-image: url(images/f2.jpg);	background-attachment: fixed;background-repeat: no-repeat;background-size: 100%;color: black">
    <h2 style="text-align: center;"></h2>
  
        <div class="container" style="text-align: center;color: black">
          <div class="input-group" style="margin-left: 20%;margin-bottom: 20px">
              <div class="input-group-addon"><i style="font-family: cursive">Browse  by Category</i></div>
<!--            <select name="box1"  onchange="show()" class="form-control" style="width: 20%;margin-left: 40%;margin-bottom: 0%">
            <option disabled selected>select an option</option>
            <option  value="all">All Vehicles</option>
           <option value="2-door">2-door</option>
             <option value="4-door">4-door</option>
              <option value="convertible">convertible</option>
               <option value="pick_up">Pick_up</option>
               <option value="Sports_utility_vehicle(S.U.V)">Sports utility vehicle(S.U.V)</option>
               <option value="Heavy_commercial">Heavy Commercial</option>
               <option value="vans">Vans/minivans</option>
        </select>-->
             <?php
     $link=  mysqli_connect("localhost", "root", "", "phpgang");
      $sqlw = "select * FROM categories";
         $resultw = $link->query($sqlw);
       echo" <select name='box1'  onchange='show()' class='form-control' style='width: 60%'>";
          echo '<option value="">Choose category</option>';
          echo'<option value="all">All vehicles</option>';
            for ($i = 0; $i = $resultw->fetch_assoc(); $i++) {

                echo '<option style="color:black" value="' . $i["cat_id"] . '">' . $i["cat"] . '</option>';
                   }
             echo "</select>"
    ?>
       
       
        </div>
          
              <div id="model"></div>
            </div>
    </div>
   