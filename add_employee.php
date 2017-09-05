
<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RITCO DASHBOARD ADMIN</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>
      
         <?php
                if(isset($_POST["submit"])){
                $servername     = "localhost";
                $username       = "root";
                $password       = "";
                $dbname         = "ritco";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql ="INSERT INTO employee (username, password,first_name,last_name,email)
                VALUES ('".$_POST["username"]."','".$_POST["password"]."','".$_POST["first_name"]."','".$_POST["last_name"]."','".$_POST["email"]."')";

                if ($conn->query($sql) === TRUE) {
                echo 'Succefull';
                header('Location: view_employee.php');


                } else {
                echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
                }

                $conn->close();
                }
                ?>

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
                <a class="navbar-brand" href="admin.php">ADMIN </a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="admin.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"> <i class="fa fa-user"></i> Employee  <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="view_employee.php">View All Employee</a>
                            </li>
                            <li>
                                <a href="add_employee.php">Add Emplyee</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#buses"> <i class="fa fa-car"></i> Bus<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="buses" class="collapse">
                            <li>
                                <a href="view_bus.php">All bus </a>
                            </li>
                            <li>
                                <a href="add_bus.php">Add new bus</a>
                            </li>
                        </ul>
                    </li>
                      <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#destination"> <i class="fa fa-home"></i> Destination<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="destination" class="collapse">
                            <li>
                                <a href="all_destination.php">All Destination </a>
                            </li>
                            <li>
                                <a href="destination.php">Add new destination</a>
                            </li>
                        </ul>
                    </li>
                    
                     <li>
                        <a href="view_all_ticket.php"><i class="fa fa-book"></i> View all ticket</a>
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
                            Add new employee
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="add_employee.php">add employee</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Employee
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">

                        <form role="form" action = "<?php $_PHP_SELF ?>" method="post" enctype="multidata/part"  >

                            <div class="col-md-6">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="first_name" placeholder="Enter first name">
                            </div>
                            <div class="col-md-6">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="last_name" placeholder="Enter Last name">
                            </div>
                            <div class="col-md-6">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Enter username">
                            </div>
                            <div class="col-md-6">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Enter email">
                            </div>
                            <div class="col-md-6">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="password">
                            </div>
                            <div class="col-md-6">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" name="confirm_password" placeholder="confirm_password">
                            </div>
                            <br>
                            </br>
                            <div class="col-md-12" style="margin-top: 2%; margin-left: 44%;">
                            <button type="submit" name="submit" class="btn btn-success">Save </button>
                            <button type="reset" class="btn btn-danger">Reset </button>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<!-- Localized -->