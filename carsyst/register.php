<?php 
require_once 'core/init.php';

if (Input::exists()) {
    if (Token::check(Input::get('token'))) {
        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'reg_no' => array(
                'required' => true,
                'regex' => '/^[A-Z][0-9]{2}\/[0-9]{4,5}\/[0-9]{4}$/',
                'unique' => 'users'
                ),
            'name' => array(
                'required' => true,
                'min' => 2,
                'max' => 50
                ),
            'category' => array(
                'default' => 'choose'
                ),
            'school' => array(
                'default' => 'choose'
                ),
            'dept' => array(
                'default' => 'choose'
                ),
            'email' => array(
                'required' => true,
                'regex' => '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                'unique' => 'users'
                ),
            'password' => array(
                'required' => true,
                'min' => 6
                ),
            'password_again' => array(
                'required' => true,
                'matches' => 'password'
                )
            ));

        if ($validation->passed()) {
            $user = new User();
            
            $salt = Hash::salt(32);

            try {
                $activate_key = md5(Input::get('email') . time());
                $user->create(array(
                    'reg_no' => Input::get('reg_no'),
                    'password' => Hash::make(Input::get('password'), $salt),
                    'salt' => $salt,
                    'name' => Input::get('name'),
                    'joined' => date('Y-m-d H:i:s'),
                    'group' => 1,
                    'email' => Input::get('email'),
                    'category' => Input::get('category'),
                    'school' => Input::get('school'),
                    'dept' => Input::get('dept'),
                    'activation' => $activate_key,
                    'status' => 0
                    ));

                $to = Input::get('email');
                $subject = "Activation key";
                $message = "Your activation key is " . $activate_key . "\r\nEnter the key to activate your account!\r\nThank You!";
                $header = "From:ssc@localhost.com \r\n";
                mail ($to,$subject,$message,$header);

                Session::flash('home', 'You have been registered!');
                Redirect::to('activation.php');

            } catch(Exception $e) {
                die($e->getMessage());
            }
        } 
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign-up</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/ssc.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Self-Study Center</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="active">
                    <a href="register.php"><i class="fa fa-edit"></i> Sign-up</a>
                </li>
                <li>
                    <a href="login.php"><i class="fa fa-sign-in"></i> Sign-in</a>
                </li>
                <li>
                    <a href="activation.php"><i class="fa fa-cogs"></i> Activate</a>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="mails.php"><i class="fa fa-fw fa-envelope"></i> Mailbox</a>
                    </li>
                    <li>
                        <a href="notifications.php"><i class="fa fa-fw fa-newspaper-o"></i> Notifications</a>
                    </li>
                    <li>
                        <a href="queries.php"><i class="fa fa-fw fa-question-circle"></i> Questions</a>
                    </li>
                    <li>
                        <a href="resources.php"><i class="fa fa-fw fa-database"></i> Resources</a>
                    </li>
                    <li>
                        <a href="rooms.php"><i class="fa fa-fw fa-group"></i> Discussion Rooms</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Register
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-edit"></i> Sign-up</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <?php
                        if (Input::exists()) {
                            echo "<div class='alert alert-warning'>";
                            echo "<p align='center'>";
                            foreach ($validation->errors() as $error) {
                                echo $error, '<br>';
                            }
                            echo "</p>";
                            echo "</div>";
                        }
                        ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 align="center" class="panel-title"><i class="fa fa-edit"></i> Sign-up</h4>
                            </div>
                            <div class="panel-body" align="center">
                                <form action="" method="post" role="form">
                                    <div class="field form-group">
                                        <label for="reg_no">Registration number</label>
                                        <input type="text" name="reg_no" id="reg_no" value="<?php echo escape(Input::get('reg_no')); ?>" autocomplete="off" class="form-control">
                                    </div>

                                    <div class="field form-group">
                                        <label for="name">Enter your name</label>
                                        <input type="text" name="name" id="name" value="<?php echo escape(Input::get('name')); ?>" class="form-control">
                                    </div>

                                    <div class="field form-group">
                                        <label for="category">Choose your category</label>
                                        <select name="category" class="form-control">
                                            <option value="choose" selected="true" disabled="true">Choose...</option>
                                            <option value="Student">Student</option>
                                            <option value="Staff">Staff</option>
                                        </select>
                                    </div>

                                    <div class="field form-group" id="school">
                                        <label for="school">School</label>
                                        <select name="school" class="form-control" onchange="show()">
                                            <option value="choose" selected="true" disabled="true">Choose...</option>
                                            <?php
                                            $db = DB::getInstance();
                                            $faculties = $db->showAll('school_faculty');

                                            foreach ($faculties as $faculty) {
                                                echo '<option value="'.$faculty->id.'">'.$faculty->name.'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="field form-group" id="department">
                                        <label for="dept">Department</label>
                                        <div id="dept"></div>
                                    </div>

                                    <div class="field form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="email" value="<?php echo escape(Input::get('email')); ?>" autocomplete="off" class="form-control">
                                    </div>

                                    <div class="field form-group">
                                        <label for="password">Choose a password</label>
                                        <input type="password" name="password" id="password" class="form-control">
                                    </div>

                                    <div class="field form-group">
                                        <label for="password_again">Enter your password again</label>
                                        <input type="password" name="password_again" id="password_again" class="form-control">
                                    </div>

                                    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                                    <input class="btn btn-primary btn-flat" type="submit" value="Sign-up">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#department").hide();
        });
        function show() {
            var id = $("select[name=school]").val();
            $.ajax({
                url: 'ajax_update.php',
                type: 'POST',

                data: {school_id: id},
                success: function(data) {
                    $("#dept").html(data);
                }
            });
            $("#department").show('slow');
        }
    </script>

</body>

</html>
