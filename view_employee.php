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
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
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
                        <a href="view_all_ticket.php"><i class="fa fa-book"></i> View all ticket</a>
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
                            ALL EMPLOYEE
                        </h1>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-dashboard"></i>  
                                    <a href="view_employee.php">View employee</a>
                            </li>
                            <li class="active"><i class="fa fa-table"></i> 
                                <a href="add_employee.php">create employee</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <h2></h2>
                        <div class="table-responsive">
                               <table class="table table-bordered table-hover table-striped">

                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>User Name</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Options</th> 

                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                        include 'connect.php';
                        
                        $n=0;
                        $sql2 = $con ->query("SELECT * FROM  employee");
                        $count = mysqli_num_rows($sql2);
                        if($count > 0)
                        {
                          while($row = mysqli_fetch_array($sql2))
                          {
                            $n++;
                            ?>
                            <tr>
                            <td><?php echo $n?></td>
                            <td><?php echo $row['username']?></td>
                            <td><?php echo $row['first_name']?></td>
                            <td><?php echo $row['last_name']?></td>
                            <td><?php echo $row['email']?></td>
                            <td>
                                <?php
                                echo '
                                    &nbsp;&nbsp;&nbsp;
                                <a href="edit_employee.php?id='.$row['id'].'"><i class="fa fa-pencil text-primary"></i></a>
                                <a href="deleteemp.php?deleteid='.$row['id'].'"><i class="fa fa-trash-o text-danger"></i></a>';
                                ?>
                                    
                            </td>
                            
                            </tr>
                           <?php }}?>
                                        </tbody>
                                    </table>
                        </div>
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