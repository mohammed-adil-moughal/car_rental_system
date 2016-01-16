<html>
    <head> <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
        <script>
        function show() {
                    var id = $("select[name=brand]").val();
                    $.ajax({
                        url: 'addcarajax.php',
                        type: 'POST',
                        data: {brand: id},
                        success: function (data) {
                          $("#model").html(data);
                        }
                    });
                }
</script>
        <style>
            #cente{
                margin-left: 30%;
                margin-top: 5%;
                margin-right:30%;
                color: black;
                font-size: large;
                background-color: #cccccc;
                text-align: center;
               
                
            }
        </style>
       
        <link rel="stylesheet" href="admin_files/css3menu0/style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
 
        <link rel="stylesheet" href="css/pure-release-0.6.0/pure-min.css">
        <link href="aministrator/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="aministrator/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="aministrator/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="aministrator/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
   <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administator</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Sheikh motors </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
             
               
                    
                      
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a href="admin.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                         <li>
                            <a href="newvehiclemodel.php"><i class="fa fa-edit fa-fw"></i> new Brands/Models </a>
                            
                        </li>
                        <li>
                            <a href="addcar.php"><i class="fa fa-edit fa-fw"></i> New Vehicle  &nbsp&nbsp >></a>
                            
                        </li>
                        <li>
                            <a href="viewcar.php"><i class="fa fa-table fa-fw"></i> Vehicles</a>
                        </li>
                          <li>
                              <a href="bapproved.php"><i class="fa fa-table fa-fw"></i> Approved Bookings</a>
                        </li>
                          <li>
                              <a href="bconfirm.php"><i class="fa  fa-exclamation  fa-fw"></i> Pending bookings</a>
                        </li>
                        <li>
                            <a href="addlocation.php"><i class="fa fa-edit fa-fw"></i> Add location</a>
                        </li>
                        <li>
                            <a href="viewlocation.php"><i class="fa fa-wrench fa-fw"></i>View/edit locations</a>
                        </li>
                        <li>
                            <a href="viewclients.php"><i class="fa fa-sitemap fa-fw"></i> Clients<span class="fa arrow"></span></a>
                            
                        </li>
                         <li>
                            <a href="approveadverts.php"><i class="fa fa-exclamation fa-fw"></i> Pending Adverts </a>
                            
                        </li>
                        <li>
                            <a href="viewadverts.php"><i class="fa fa-table fa-fw"></i> Advertisements </a>
                            
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add a Vehicle</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Enter Vehicle details
                        </div>
                        <div class="panel-body">
                           <body >
         
  
   
<form method="post" action="" enctype="multipart/form-data" class="pure-form pure-form-aligned">
    <?php
     $link=  mysqli_connect("localhost", "root", "", "phpgang");
      $sqlw = "select * FROM categories";
         $resultw = $link->query($sqlw);
            echo"<h4 style='color:black'>Vehicle Category</h4>";
         echo"<select required  name='des' style='color:black;width: 380px;text-indent: 45px;margin-left:45px'  >";
      
          echo '<option value="">Choose category</option>';
            for ($i = 0; $i = $resultw->fetch_assoc(); $i++) {

                echo '<option style="color:black" value="' . $i["cat_id"] . '">' . $i["cat"] . '</option>';
                   }
             echo "</select>"
    ?>
    <br>
    <br>
  <?php
   $sqlmodel = "select * FROM brands";
         $resultmodel = $link->query($sqlmodel);
           echo"<h4 style='color:black'>Vehicle Make</h4>";echo"<br>";
         echo"<select onchange='show()' required  name='brand' style='color:black;width:380px;text-indent: 45px;margin-left:45px'  >";
          echo '<option value="">Choose Brand</option>';
            for ($i = 0; $i = $resultmodel->fetch_assoc(); $i++) {

                echo '<option  value="' . $i["brand_id"] . '">' . $i["brandn"] . '</option>';
                   }
             echo "</select>"
  ?>
      <br>
        <h4 style='color:black'>Vehicle Model</h4>
         <div id="model"><select id="number" class="form-control" style="margin-top:0%; width: 380px;text-indent: 45px;margin-left:45px"><option disabled="">select model</select></div>
        <br>
         <h4 style='color:black'>Vehicle Registration</h4>
     <br><input type="text" name="plate" size="45" placeholder="Vehicle Numberplate" required style="margin-left: 45px"><br>
      <h4 style='color:black'>Hiring Rate</h4>
    <br><input type="text" name="rate" size="45" placeholder=" Current rate(Ksh/Day)" required style="margin-left: 45px"><br>
     <h4> Description:</h4><br>
      <textarea name="brief"   placeholder="Vehicle description or features" required style="margin-left: 45px;width: 380px">
         
     </textarea><br>
    <h4> Image :</h4><br><input type="file" name="car" size="45" required><br>
     <input type="submit" name="submit" value="Add vehicle" >
     
    
        </form>
            </div>
    </body>
</html>
<?php
if (isset($_POST['submit']))
{   $plate=$_POST['plate'];
    $des=$_POST['des'];
    $brand=$_POST['brand'];
    $model=$_POST['model'];
    $rate=$_POST['rate'];
    $brief=$_POST['brief'];
    $status="available";
    $folder = "cars/";
    $link=  mysqli_connect("localhost", "root", "", "phpgang");
      $sql5= "select * FROM cars where plate='$plate' ";
       $result5=$link->query($sql5);
      
       
        if($result5->fetch_assoc()>=1)
        {
            echo"<script>alert('A vehicle with the same Registration has been uploaded'</script>";
        }
    //$a=$_FILES['car']['name'];
   // move_uploaded_file($_FILES["car"]["tmp_name"] , "$folder".$_FILES["car"]["name"]);
    $max_file_size = 1024*200; // 200kb
$valid_exts = array('jpeg', 'jpg', 'png', 'gif');
// thumbnail sizes
$sizes = array(100 => 100, 150 => 150, 250 => 250);
     if( $_FILES['car']['size'] < $max_file_size ){
    // get file extension
    $ext = strtolower(pathinfo($_FILES['car']['name'], PATHINFO_EXTENSION));
    if (in_array($ext, $valid_exts)) {
      /* resize image */
      foreach ($sizes as $w => $h) {
        $files[] = resize(200, 200);
      }

    } else {
      $msg = 'Unsupported file';
    }
  } else{
    $msg = 'Please upload image smaller than 200KB';
  }
  $a=$_FILES['car']['name'];

  //  echo "<p align=center>File ".$_FILES["car"]["name"]."_uploaded...";
    /*,'$des','$brand','$model','$rate','$a'..........des,brand,model,rate,*/
 
 $sql="INSERT INTO cars(plate,des,brand,model,rate,url,brief,status) VALUES('$plate','$des','$brand','$model','$rate','$a','$brief','$status')";
            if(mysqli_query($link, $sql))
            { echo"<script>alert('Vehicle susseccfully uploaded')</script>";
            mysqli_close($link);
            }
 else {echo "<script> alert('Sorry, there was a problem saving your file. a duplicate registration number detected')</script>";

 }

}
function resize($width, $height){
  /* Get original image x y*/
  list($w, $h) = getimagesize($_FILES['car']['tmp_name']);
  /* calculate new image size with ratio */
  $ratio = max($width/$w, $height/$h);
  $h = ceil($height / $ratio);
  $x = ($w - $width / $ratio) / 2;
  $w = ceil($width / $ratio);
  /* new file name */
  $path = 'cars/'.$_FILES['car']['name'];
  
  echo"<br>";
  /* read binary data from image file */
  $imgString = file_get_contents($_FILES['car']['tmp_name']);
  /* create image from string */
  $car = imagecreatefromstring($imgString);
  $tmp = imagecreatetruecolor($width, $height);
  imagecopyresampled($tmp, $car,
    0, 0,
    $x, 0,
    $width, $height,
    $w, $h);
  /* Save image */
  switch ($_FILES['car']['type']) {
    case 'image/jpeg':
      imagejpeg($tmp, $path, 100);
      break;
    case 'image/png':
      imagepng($tmp, $path, 0);
      break;
    case 'image/gif':
      imagegif($tmp, $path);
      break;
    default:
      exit;
      break;
  }


  return $path;
  /* cleanup memory */
  
}

?>
                                        </div>
                                   
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
