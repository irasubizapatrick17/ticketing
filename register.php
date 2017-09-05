<!DOCTYPE html>
<html lang="en">

  <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>RITCO</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin.css" rel="stylesheet">

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

                $sql ="INSERT INTO user (username, password,email)
                VALUES ('".$_POST["username"]."','".$_POST["password"]."','".$_POST["email"]."')";

                if ($conn->query($sql) === TRUE) {
                echo 'Succefull';
                header('Location: index.php');


                } else {
                echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
                }

                $conn->close();
                }
                ?>

  <body class="bg-dark">

    <div class="container">

      <div class="card card-register mx-auto mt-5" style="width: 57%;">
        <div class="card-header">
          Register an Account
        </div>
        <div class="card-body">
          <form role="form" action = "<?php $_PHP_SELF ?>" method="post" enctype="multidata/part" >
          <div class="form-group">
            <div class="form-row">
                <div class="col-md-6">
                  <label>User name</label>
                  <input type="text" class="form-control"   placeholder="Enter username" name="username">
                </div>
              <div class="col-md-6">
                  <label>Email address</label>
                  <input type="text" class="form-control"   placeholder="Enter email" name="email" >
              </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label>Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                <div class="col-md-6">
                  <label>Confirm password</label>
                  <input type="password" class="form-control"  placeholder="Confirm password">
                </div>
              </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit" value="register"  name="submit">Register</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="index.php">Login Page</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>

<!-- Localized -->