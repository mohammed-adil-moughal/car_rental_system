<html>
    <head>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <link href="https://cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css">
        <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body { font-size: 140%; }
        </style>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#example').dataTable();
            });
        </script>

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
                        <a class="navbar-brand" href="index.html">Sheikh Motors Automotive Company Dashboard </a>
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
                                    <a href="bapproved.php"><i class="fa fa-table fa-fw"></i> Approved Bookings </a>
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
                                    <a href="viewclients.php"><i class="fa fa-sitemap fa-fw"></i> Clients &nbsp&nbsp >></a>

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
                            <h1 class="page-header"> Clients Of Sheikh Motors</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading"style="margin-bottom: 0%">
                                    Client details 
                                </div>
                                <div class="panel-body" > 
                                    <div class="table-responsive">
                                    <table id='example' border='1' cellpadding='0' cellspacing='0' class='table table-striped table-bordered' style='margin-top:0%;margin-left:0%;margin-right:20%;text-align:center;border-collapse:collapse;width:100%'>
                                        <thead>
                                        <th colspan='1'>NAMES</th>
                                        <th >CLIENT ID</th>
                                        <th >PHONE</th>
                                        <th >EMAIL</th>
                                        <th >GENDER</th>
                                        <th >AGE</th>

                                        </thead>
                                        <?php
                                        $link = mysqli_connect("localhost", "root", "", "phpgang");
                                        if ($link->connect_error) {
                                            die("connection failed" . $link->connect_error);
                                        }
                                        $sql = "select * from clients";
                                        $result = $link->query($sql);



                                        echo"<tbody>";
                                        for ($i = 0; $i = $result->fetch_assoc(); $i++) {
                                            echo"<tr>";
                                            for ($j = 0; $j < 1; $j++) {
                                                $datum = $i["dob"];
                                                $secondsInAYear = 31536000;
                                                $secondsInAMonth = 2635200;
                                                $secondsInADay = 86400;

                                                $birthDate = strtotime($datum);

                                                $ageInSeconds = time() - $birthDate;

                                                $ageInYears = floor($ageInSeconds / $secondsInAYear);
                                                $ageRemainder = ( $ageInSeconds % $secondsInAYear );

                                                $ageInMonths = floor($ageRemainder / $secondsInAMonth);
                                                $monthsRemainder = ( $ageRemainder % $secondsInAMonth );

                                                $ageInDays = floor($monthsRemainder / $secondsInAMonth);





                                                echo"<td >";
                                                echo "" . $i["fname"] . " ";
                                                echo "" . $i["oname"];
                                                echo"<td >";
                                                echo "" . $i["id"];
                                                echo"<td >";
                                                echo "" . $i["phone"];
                                                echo"<td >";
                                                echo "" . $i["email"];
                                                echo"<td>";
                                                echo "" . $i["gender"];
                                                echo"<td >";
                                                echo "" . $ageInYears . "Yrs";
                                            }
                                            echo"</tr>";
                                        }
                                        echo"</table>";
                                        ?>
                                    </div>
                                        </body>
                                        </html>