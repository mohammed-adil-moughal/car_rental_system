<html>
    <head>
       
       
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
                            <a href="addcar.php"><i class="fa fa-edit fa-fw"></i> New Vehicle</a>
                            
                        </li>
                        <li>
                            <a href="viewcar.php"><i class="fa fa-table fa-fw"></i> Vehicles</a>
                        </li>
                          <li>
                              <a href="bapproved.php"><i class="fa fa-table fa-fw"></i> Approved Bookings</a>
                        </li>
                          <li>
                              <a href="bconfirm.php"><i class="fa  fa-exclamation fa-fw"></i> Pending bookings  </a>
                        </li>
                        <li>
                            <a href="addlocation.php"><i class="fa fa-edit fa-fw"></i> Add location</a>
                        </li>
                        <li>
                            <a href="viewlocation.php"><i class="fa fa-wrench fa-fw"></i>View/edit locations</a>
                        </li>
                        <li>
                            <a href="viewclients.php"><i class="fa fa-sitemap fa-fw"></i> Clients</a>
                            
                        </li>
                        <li>
                            <a href="approveadverts.php"><i class="fa fa-exclamation fa-fw"></i> Pending Adverts </a>
                            
                        </li>
                         <li>
                            <a href="viewadverts.php"><i class="fa fa-table fa-fw"></i> Advertisements &nbsp&nbsp >></a>
                            
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
                    <h1 class="page-header">Advertisements Posted</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"style="margin-bottom: 0%">
                       Delete Advertisements            
                        </div>
                        <div class="panel-body" > 
                            <div class="table-responsive">
<?php

 $link= mysqli_connect("localhost", "root", "","phpgang") ;
      if($link->connect_error){
          die("connection failed".$link->connect_error);
      }
      
         $sql="SELECT addetails.*,models.*,brands.* FROM models,brands,addetails where (addetails.approved='yes' and addetails.model=models.id and addetails.make=brands.brand_id)";
        $result=$link->query($sql);
   // echo"<table border='1px' padding='1px'>";  
     echo"  <table border='1' cellpadding='0' cellspacing='0' class='table table-hover' style='margin-top:0%;margin-left:0%;margin-right:20%;text-align:center;border-collapse:collapse;background-color:;width:100%'>";  
echo"<thead>";
echo"<th >";echo"CLIENT ID";
echo"<th >";echo"MAKE";
echo"<th >";echo"MODEL";
echo"<th >";echo"DESCRIPTION";
echo"<th >";echo"RATE";
echo"<th >";echo"IMAGE";

      echo"</thead";
      echo"<br>";
   echo"<tbody>";
   $file_path = 'http://localhost/carsyst/advertcars/';
    for($i=0;$i=$result->fetch_assoc();$i++)
{
    echo"<tr>";
    for($j=0;$j<1;$j++)
    {  
    $src=$file_path.$i['image'];
      echo"<td >";echo "" .$i["client_id"];
       echo"<td >";echo "" .$i["brandn"];
      echo"<td >";echo "" .$i["modeln"];
      echo"<td >";echo "" .$i["description"];
      echo"<td >";echo "" .$i["rate"].$i["shs"];
      echo"<td>";echo "<img src=".$src." style='height:50px;width:80px'>";
    
    

      echo" <div class='tooltip-demo'>";
      echo '<td><a  class="btn btn-default" title="reject" data-toggle="tooltip" data-placement="top" style="color: red" href="rejectad.php?id=' . $i['ad_id'] . '"><i class="fa  fa-trash-o  fa-fw"></i></a></td>';
     
     echo"</div>";
    }
    echo"</tr>";
    
}
echo"</table>";
?><h2 >                         </div></div>
                        </div>
                    </div>