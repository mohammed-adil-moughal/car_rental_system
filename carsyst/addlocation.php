<html>
    
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
        <title>LOCATIONS</title>
   
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
                    <h1 class="page-header">Company Locations</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"style="margin-bottom: 0%">
                      Update/Add Locations Within Reach of Company Resources
                        </div>
                        <div class="panel-body" > 
                            <div class="table-responsive">
    <body >
 
        <fieldset style="margin-left: 19%;margin-right: 19%;font-size: larger;margin-top: 0%;border-radius: 10px">
            <div id="pick">
        <form action="" method="post">
            <h3 style="text-align: center">Pick up location</h3>
          
            Location:<br><input type="text" name="pick" size="30" required><br>
            Cost(Ksh):<br><input type="number" name="pickcost" size="30" required ><br>
         
          <input name="action" type="hidden" value="pick">
          
               <input type="submit" value="add pick up">
               </div>
      
            <div id="drop">
           </form>
            <h3 style="text-align: center">Drop off location</h3>
        <form action="" method="post">
        
            Location:<br><input type="text" name="drop" size="30" required> <br>
            
            Cost(Ksh):<br><input type="number" name="dropcost" size="30" required ><br>
         
          <input name="action" type="hidden" value="drop">
           <input type="submit" value="add drop off">
       </form>
            </div>
        </fieldset>
    </body>
</html>
 <?php 

 $link=  mysqli_connect("localhost", "root", "", "phpgang");
   if(ISSET($_POST['action']))
   {
       if($_POST['action']=="pick")
       {
           $pick=$_POST["pick"];
           $pickcost=$_POST["pickcost"];
           $sqlcheck="select * from pick where pick='$pick'";
           $resultcheck=$link->query($sqlcheck);
           if($resultcheck->fetch_assoc()>=1)
           {echo"<script>alert('duplicate location')</script> ";}
         else{   $sql="INSERT INTO pick(pick,pickcost) VALUES('$pick','$pickcost')";
            if(mysqli_query($link, $sql))
{
    echo"<div id='form' class='res'>"; echo "<script>alert('pick_up location successfully added')</script>";echo"</div>";
    mysqli_close($link);
}
else{echo "error";}
       }}
        if($_POST['action']=="drop")
       {$link=  mysqli_connect("localhost", "root", "", "phpgang");
           $drop=$_POST["drop"];
            $dropcost=$_POST["dropcost"];
            $sqlcheck1="select * from drop_off where drop_o='$drop'";
           $resultcheck1=$link->query($sqlcheck1);
           if($resultcheck1->fetch_assoc()>=1)
           {echo"<script>alert('duplicate location')</script> ";}
           else{
            $sql="INSERT INTO drop_off(drop_o,dropcost) VALUES('$drop','$dropcost')";
            if(mysqli_query($link, $sql))
{
   echo"<div id='form' class='res'>"; echo "<script>alert('drop_off location successfully added')</script>";echo"</div>";
}
else{echo "error";}
mysqli_close($link);
       }}
       
       
      


       
       
   }
   
     
     ?>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </body>