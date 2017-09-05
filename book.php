<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RITCO DASHBOARD USER</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div id="wrapper">

     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">USER </a>
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
                        <a href="user_dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-book"></i> View all my ticket</a>
                    </li>
                    <li>
                        <a href="book.php"><i class="fa fa-shopping-cart"></i> book ticket</a>
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
                           Book yout ticket
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="#">ticket</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> ticket
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">

                        <form role="form">
                            <div class="col-md-3">
                                <label>Date</label>
                                <input type="date" class="form-control" name="date" placeholder="Select ">
                            </div>
                            <div class="col-md-3">
                                <label>Time</label>
                                <input type="time" class="form-control" name="time" placeholder="Select ">
                            </div>
                              <div class="col-md-6">
                                <label>Number od Seats</label>
                                <input type="number" class="form-control" name="seats_number" placeholder="Select ">
                            </div>
                            <div class="col-md-6">
                                <label>From</label>
                                  <select class="form-control" name="from">
                                   <option value="Kigali">Kigali</option> 
                                   <option value="Kigali">Muhanga</option>     
                                   <option value="Kigali">Nyagatare</option>   
                                    </select>
                            </div>
                             <div class="col-md-6">
                                <label>To</label>
                                    <select class="form-control" name="to">
                                        <option value="Butare"> Butare</option>
                                        <option value="Butare"> Gisenyi</option>
                                        <option value="Butare"> Rwamagana</option>
                                        <option value="Butare"> Nyamata</option>
                                        
                                    </select>
                            </div>
                              <div class="col-md-6">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="first_name" placeholder="Enter  First Name ">
                            </div>
                            <div class="col-md-6">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="first_name" placeholder="Enter  First Name ">
                            </div>
                            <div class="col-md-6">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name ">
                            </div>
                            <div class="col-md-6">
                                <label>Telephone</label>
                                    <input type="text" class="form-control" name="telephone" placeholder="Enter telehone Number">
                            </div>
                            <div class="col-md-12">
                                <label>Email</label>
                                <input type="text" class="form-control" name="telephone" placeholder="Enter Your Email">
                            </div>


                            <div class="col-md-12" style="margin-top: 2%; margin-left: 44%;">
                            <button type="submit" class="btn btn-success">Save </button>
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