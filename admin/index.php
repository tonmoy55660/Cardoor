<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>
<?php
			session_start();
			include_once 'dbCon.php';
			$conn = connect();
			if(isset($_POST['submit'])){
				$mail 		= $_POST['email'];
				$password 	= $_POST['password'];
        echo $password;
				$sql = "SELECT * FROM `renter_details` WHERE `email`='$mail' AND `password`='$password'";
				$result = $conn->query($sql);
				if($result->num_rows > 0){
					$_SESSION['isLoggedIn'] = TRUE;
					foreach($result as $row){
							$_SESSION['renter_id']=$row['renter_id'];
							$_SESSION['name']=$row['name'];
							$_SESSION['email']=$row['email'];
							$_SESSION['phone']=$row['phone'];
            }
            echo "<script>window.location.href='dashboard.php'</script>";
          } else {
            echo "<script>window.location.href='login.php'</script>";
          }
        }

?>
<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="POST">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required>
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <input type="submit" class="btn btn-primary btn-block" name="submit" value="Login" >
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
