<html>
    <?php $link= mysqli_connect("localhost", "root", "","phpgang") ;
      if($link->connect_error){
          die("connection failed".$link->connect_error);
      }?>
    
    <head>
        <style>
            #pick
            {
                margin-left: 10%;
                margin-right: 10%;
                text-align: center;
                background-color: #ccc
            }
             #drop
            {
                margin-left: 10%;
                margin-right: 10%;
                text-align: center;
                background-color: lightgrey
            }
        </style>
        <title>new model</title>
   
    <html>
  
       
       
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
                            <a href="addcar.php"><i class="fa fa-edit fa-fw"></i> New Vehicle</a>
                            
                        </li>
                        <li>
                            <a href="viewcar.php"><i class="fa fa-table fa-fw"></i> Vehicles</a>
                        </li>
                          <li>
                              <a href="bapproved.php"><i class="fa fa-table fa-fw"></i> Approved Bookings</a>
                        </li>
                          <li>
                              <a href="bconfirm.php"><i class="fa  fa-exclamation  fa-fw"></i> Pending bookings </a>
                        </li>
                        <li>
                            <a href="addlocation.php"><i class="fa fa-edit fa-fw"></i> Add locations   &nbsp&nbsp >></a>
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
                    <h1 class="page-header">BRANDS/MODELS</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"style="margin-bottom: 0%">
                      Enter New Brands/Models
                        </div>
                        <div class="panel-body" > 
                            <div class="table-responsive">
    <body >
 
        <fieldset style="margin-left: 19%;margin-right: 19%;font-size: larger;margin-top: 0%;border-radius: 10px">
            <div id="pick">
        <form action="" method="post">
            <h3 style="text-align: center">BRAND</h3>
          
            <br><input type="text" name="brand" size="30" required placeholder="BRAND NAME"><br>
           
         
          <input name="action" type="hidden" value="brand">
          
               <input type="submit" value="Add Brand">
               </div>
      
            <div id="drop">
           </form>
            <h3 style="text-align: center">MODEL</h3>
        <form action="" method="post">
        
            BRAND:<br>  <?php
   $sqlmodel = "select * FROM brands";
         $resultmodel = $link->query($sqlmodel);
        
         echo"<select onchange='show()' required  name='brand' style='color:black;width:380px;text-indent: 45px;margin-left:45px'  >";
          echo '<option value="">Choose Brand</option>';
            for ($i = 0; $i = $resultmodel->fetch_assoc(); $i++) {

                echo '<option  value="' . $i["brand_id"] . '">' . $i["brandn"] . '</option>';
                   }
             echo "</select>"
  ?> <br>
            
  <input type="text" name="model" size="30" required placeholder="MODEL"><br>
         
          <input name="action" type="hidden" value="model">
           <input type="submit" value="Add Model">
       </form>
            </div>
        </fieldset>
    </body>
</html>
 <?php 


   if(ISSET($_POST['action']))
   {
       if($_POST['action']=="brand")
       {
           $brand=$_POST["brand"];
             $sqlcheck1="select * from brands where brandn='$brand'";
           $resultcheck1=$link->query($sqlcheck1);
           if($resultcheck1->fetch_assoc()>=1)
           {echo"<script>alert('existing brand')</script> ";}
         
         else{    $sql="INSERT INTO brands(brandn) VALUES('$brand')";}
            if(mysqli_query($link, $sql))
{
    echo"<div id='form' class='res'>"; echo "<script>alert('brands updated')</script>";echo"</div>";
    mysqli_close($link);
}
else{echo "error"; mysqli_close($link);}
       }
       
       if($_POST['action']=="model")
       {
           $brand=$_POST["brand"];
          $model=$_POST["model"];
            $sqlcheck1="select * from models where modeln='$model'";
           $resultcheck1=$link->query($sqlcheck1);
           if($resultcheck1->fetch_assoc()>=1)
           {echo"<script>alert('duplicate model')</script> ";}
           else{
            $sql="INSERT INTO models(modeln,brand) VALUES('$model','$brand')";
            if(mysqli_query($link, $sql))
{
   echo"<div id='form' class='res'>"; echo "<script>alert('Models Update Successful ')</script>";echo"</div>";
}
else{echo "error";}
mysqli_close($link);
       }
       }
   }
       
       
      


       
       
   
   
     
     ?>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </body>