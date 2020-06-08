<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Cardoor</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<?php include_once 'includes/navbar.php'; ?>
<?php include_once 'includes/sidebar.php'; ?>

        <form method="POST" action="insert_edit.php" enctype="multipart/form-data">
        <div class="container">
          <h3>Add your car details here :</h3>
          <hr>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Car Brand & Model No :</label>
              <input type="text" class="form-control" name = "car_name" id="car_name" placeholder=" car name and model">
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Expected Price per day :</label>
              <input type="text" class="form-control" id="price" name="price"  placeholder=" ৳ price in taka">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Additional Info :</label>
            <textarea class="form-control" id="carinfo" name="carinfo" placeholder=" car details"></textarea>
          </div>
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputState">Class :</label>
              <select id="class" name="class" class="form-control">
                <option selected>Choose car class...</option>
                <option>Compact</option>
                <option>Supermini</option>
                <option>Sedan</option>
                <option>Minivan</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label for="inputState">Fuel type :</label>
              <select id="fuel" name="fuel" class="form-control">
                <option selected>Choose fuel type...</option>
                <option>Petrol</option>
                <option>Diesel</option>
                <option>CNG</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label for="inputState">Doors :</label>
              <select id="doors" name="doors" class="form-control">
                <option selected>Choose number of doors...</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label for="inputState">Gearbox :</label>
              <select id="gearbox" name="gearbox" class="form-control">
                <option selected>Choose gearbox type...</option>
                <option>Automatic</option>
                <option>Manual</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Driver Name :</label>
              <input type="text" class="form-control" id="drivername" name="drivername"  placeholder=" ex: John doe">
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Driver's Phone No. :</label>
              <input type="text" class="form-control" id="driverphone" name="driverphone" placeholder=" ex: 01234567891">
            </div>
          </div>
          <div class="card">
          <div class="form-row">
          <div class="form-group col-md-4">
            <label for="exampleInputFile">Image 1 upload</label>
            <input type="file" class="form-control-file" name="imageup1" id="exampleInputFile" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">Image 1 </small>
          </div>
          <div class="form-group col-md-4">
            <label for="exampleInputFile">Image 2 upload </label>
            <input type="file" class="form-control-file" name="imageup2" id="exampleInputFile" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">Image 2 </small>
          </div>

          <div class="form-group col-md-4">
            <label for="exampleInputFile">Image 3 upload </label>
            <input type="file" class="form-control-file" name="imageup3" id="exampleInputFile" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">Image 3 </small>
          </div>
          </div>
        </div>
      </div></br>
        <div align="center">
        <input type="submit" name="cardetails" value="SAVE" class="btn btn-outline-primary col-lg-8">
      </div>
    </br>
        </form>

  <?php include_once 'includes/footer.php' ?>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
