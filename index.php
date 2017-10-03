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

  <body class="bg-dark">

    <div class="container">

      <div class="card card-login mx-auto mt-5" style="width: 42%;">
        <div class="card-header">
          Login
        </div>
        <div class="card-body">
          <form method="POST" action="logging.php">
            <div class="form-group">
              <label for="exampleInputEmail1">Username </label>
              <input type="text" name="username" placeholder="user name" value="" class="form-control" required="">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control"  name="password" value="" placeholder="Password" required="">
            </div>
             <div class="form-group">
              <label>User type</label>
              <select name="type" class="form-control"  required="">            
                  <option >Select User Type</option>
                  <option value ="employee">Employee</option>
                  <option value ="admin">Admin</option>
                  <option value ="user">User</option>

              </select>
            </div>
            <button class="btn btn-primary btn-block" type="submit" value="login"  name="submit">Login</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.php">Register an Account</a>
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