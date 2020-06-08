<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Cardoor - Car Rental HTML Template</title>

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="assets/css/responsive.css" rel="stylesheet">

</head>

<?php include_once 'includes/navbar.php'; ?>
<?php
    include_once 'admin/dbCon.php';
    $conn= connect();
    if (isset($_POST['book'])){
      function generateRandomString()  {
         $characters = '0123456789';
         $length = 6;
         $charactersLength = strlen($characters);
         $randomString = '';
         for ($i = 0; $i < $length; $i++) {
             $randomString .= $characters[rand(0, $charactersLength - 1)];
         }
         return $randomString;
                                         }
      $booking_id = generateRandomString();
      $zone = $_POST['zone'];
      $pick_date = $_POST['pick_date'];
      $return_date = $_POST['return_date'];
      $class = $_POST['class'];
      $car_id = $_POST['car_id'];
      $price = $_POST['price'];
      $cus_id = $_SESSION['cus_id'];
      $booking_date = date('m/d/Y');
      $days = (strtotime($return_date) - strtotime($pick_date)) / (60 * 60 * 24);
      $diff = ($days + 1);
      $total = ($diff * $price);
      $sql = "INSERT INTO `booking_details`(`booking_id`, `car_id`, `pick_date`, `return_date`,
              `total_day`, `total_bill`, `price`, `pickup_location`, `booking_date`, `cus_id`)
              VALUES ('$booking_id','$car_id','$pick_date','$return_date',
                '$diff','$total','$price','$zone','$booking_date','$cus_id')";
      if($conn->query($sql)){
        echo '<script>window.open("mail.php?id='."$booking_id".'");</script>';
      }

    }
 ?>
</br></br>
    <!--== Car List Area Start ==-->
    <section id="car-list-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-12">
                    <div class="car-list-content">
                        <div class="row">
                            <!-- Single Car Start -->
                            <?php
                            include_once 'admin/dbCon.php';
                            $conn= connect();
                            if(isset($_POST['search'])){
                              $zone = $_POST['zone'];
                              $pick_date = $_POST['pick_date'];
                              $return_date = $_POST['return_date'];
                              $ssql = "SELECT car_id FROM booking_details  WHERE
                                      pick_date  BETWEEN '$pick_date' AND '$return_date'
                                      AND return_date BETWEEN '$pick_date' AND '$return_date' GROUP BY car_id";
                                      // echo $ssql;

                                $result = $conn->query($ssql);
                                $data = '00';
                                foreach( $result as $row ){
                                  $data .=  $row['car_id'].',';
                                }
                                $data = rtrim($data,',');
                                  $sql = "SELECT * FROM `car_details` WHERE `car_id` NOT IN ($data)";
                                  // echo $sql;
                                $resultData=$conn->query($sql);
                                if($resultData->num_rows > 0){
                                foreach($resultData as $view){
                            ?>

                            <div class="col-lg-6 col-md-6">
                                <div class="single-car-wrap">
                                  <form method="POST" >
                                    <input type="hidden" name="car_id" value="<?=$view['car_id']?>" >
                                    <input type="hidden" name="zone" value="<?=$_POST['zone']?>" >
                                    <input type="hidden" name="pick_date" value="<?=$_POST['pick_date']?>" >
                                    <input type="hidden" name="return_date" value="<?=$_POST['return_date']?>" >
                                    <input type="hidden" name="class" value="<?=$_POST['class']?>" >
                                    <input type="hidden" name="price" value="<?=$view['price']?>" >
                                  <div class="single-car-preview">
                                      <img src="admin/images/<?=$view['img1']?>" alt="JSOFT">
                                  </div>
                                    <div class="car-list-info without-bar">
                                        <h2><a><?=$view['car_name']?></a></h2>
                                        <h5> $<?=$view['price']?> Rent /per a day</h5>
                                        <p><?=$view['car_details']?></p>
                                        <ul class="car-info-list">
                                            <li><?=$view['class']?></li>
                                            <li><?=$view['fuel']?></li>
                                            <li><?=$view['door']?></li>
                                            <li><?=$view['gearbox']?></li>
                                        </ul>
                                        <div class="row">
                                          <div class="col-lg-6">
                                            <input type="submit" name="book" value="BOOK NOW" class="btn btn-outline-success btn-block">
                                          </div>
                                        </form>
                                          <div class="col-lg-6">
                                            <form  action="car_details.php" method="POST" target="_blank" >
                                              <input type="hidden" name="car_id" value="<?=$view['car_id']?>" >
                                              <input type="submit" value="SEE DETAILS" class="btn btn-outline-primary btn-block">
                                            </div>
                                            </form>
                                          </div>
                                    </div>
                                </div>
                            </div>
                              <!-- Single Car End -->
                          <?php
                        }
                      }else{
                        ?>
                        <div class="col-lg-12 col-md-12">
                          <H3>No Car Is available in that day!! Sorry, Try Again With another date!!</H3>
                        </div>
                        <?php
                      }
                       }
                          if(!isset($_POST['search'])){
                            $sql = "select * from car_details";
                            $resultData=$conn->query($sql);
                            foreach($resultData as $view){
                            ?>

                            <div class="col-lg-6 col-md-6">
                                <div class="single-car-wrap">
                                  <form method="POST" action="car_details.php" >
                                    <input type="hidden" name="car_id" value="<?=$view['car_id']?>" >
                                  <div class="single-car-preview">
                                      <img src="admin/images/<?=$view['img1']?>" alt="JSOFT">
                                  </div>
                                    <div class="car-list-info without-bar">
                                        <h2><a><?=$view['car_name']?></a></h2>
                                        <h5> $<?=$view['price']?> Rent /per a day</h5>
                                        <p><?=$view['car_details']?></p>
                                        <ul class="car-info-list">
                                            <li><?=$view['class']?></li>
                                            <li><?=$view['fuel']?></li>
                                            <li><?=$view['door']?></li>
                                            <li><?=$view['gearbox']?></li>
                                        </ul>
                                        <input type="submit" value="SEE DETAILS" class="rent-btn">
                                    </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Single Car End -->
                          <?php
                                }
                              }
                           ?>
                        </div>
                    </div>
                </div>
                <!-- Car List Content End -->
            </div>
        </div>
    </section>
    <!--== Car List Area End ==-->
    <!--== Footer Area Start ==-->
    <?php include_once 'includes/footer.php'; ?>

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="assets/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="assets/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="assets/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="assets/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="assets/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="assets/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="assets/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="assets/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="assets/js/main.js"></script>
</body>

</html>
