<!DOCTYPE html>
<html class="no-js" lang="zxx">

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

    <!--== Gallery Page Content Start ==-->
    <section id="gallery-page-content" class="section-padding">
        <div class="container">
        	<div class="row">
            <!-- Sidebar Area Start -->
            <div class="col-lg-3">
                <div class="sidebar-content-wrap m-t-30">
                    <!-- Single Sidebar Start -->
                    <div class="single-sidebar">
                        <h3>Filters</h3>

                        <div class="sidebar-body">
                          <form method="POST" onsubmit=" return myfn()">

                          <div class="recent-tip-body">
                              <h5>Select Car Class :</h5><br>
                          </div>
                          <select class="custom-select col-lg-12" id="class" name="class">
                            <option>SELECT FROM HERE</option>
                            <option>Compact</option>
                            <option>Supermini</option>
                            <option>Sedan</option>
                            <option>Minivan</option>
                          </select><hr>
                          <div class="recent-tip-body">
                              <h5>Select Price Range :</h5><br>
                          </div>
                          <select class="custom-select col-lg-12" id="price" name="price">
                            <option value="1">Select from here</option>
                            <option value="500000">Below 5 lakh</option>
                            <option value="1000000">Below 10 lakh</option>
                            <option value="1500000">Below 15 lakh</option>
                            <option value="1500000">Below 20 lakh</option>
                            <option value="1500000">Below 25 lakh</option>
                            <option value="1500000">Below 30 lakh</option>
                          </select><hr>
                          <div class="book-button text-center">
                              <input type="submit"  name="search" id="search" class="book-now-btn" value="Search">
                          </div>
                          </form>
                        </div>
                    </div>
                    <!-- Single Sidebar End -->
                </div>
            </div>
            <!-- Sidebar Area End -->

        		<div class="col-lg-9">
					      <div class="popular-cars-wrap">
						<div class="row popular-car-gird">
							<!-- Single Popular Car Start -->
              <?php
              include_once 'admin/dbCon.php';
              $conn= connect();
              $resultData='';
              if (isset($_POST['search'])){
                $class=$_POST['class'];
                $price = $_POST['price'];
                $sql = "select * from sale_car_details WHERE class='$class' AND price < '$price'";
                $resultData=$conn->query($sql);
                  }else if(!isset($_POST['search'])){
              $sql = "select * from sale_car_details";
              $resultData=$conn->query($sql);
              }
              if($resultData->num_rows > 0){
              foreach($resultData as $view){
               ?>
							<div class="col-lg-6 col-md-6">
                <form>
                  <input type="hidden" name="car_id" value="<?=$view['car_id']?>" >
								<div class="single-popular-car">
									<div class="p-car-thumbnails">
										<a class="car-hover" href="admin/images/<?=$view['img1']?>">
										  <img src="admin/images/<?=$view['img1']?>" alt="JSOFT">
									   </a>
									</div>
									<div class="p-car-content">
										<h3>
											<a><?=$view['car_name']?></a>
											<span class="price"><i class="fa fa-tag"></i> $<?=$view['price']?></span>
										</h3><br>
										<div class="p-car-feature">
                      <a><?=$view['class']?></a>
                      <a><?=$view['fuel']?></a>
                      <a>door :: <?=$view['door']?></a>
                      <a><?=$view['gearbox']?></a>
										</div><br>
                    <div class="row">
                      <?php if (!isset($_GET['comp1'])){ ?>
                    <div class="col-lg-6 text-left">
                      <a href="car_sale.php?comp1=<?=$view['car_id']?>"><button type="button"  class="btn btn-outline-success btn-block">Click to compare</button></a>
                  </div>
                  <div class="col-lg-6 text-center">
                      <a target="_blank" href="car_sale_details.php?id=<?=$view['car_id']?>"><button type="button"  class="btn btn-outline-dark btn-block">see details</button></a></br>
                  </div>
                <?php }
                else
                {
                ?>
                  <div class="col-lg-6 text-left">
                    <a target="_blank" href="compare.php?comp1=<?=$_GET['comp1']?>&&comp2=<?=$view['car_id']?>"><button type="button"  class="btn btn-outline-success btn-block">compare with that</button></a>
                </div>
                <div class="col-lg-6 text-center">
                    <a target="_blank" href="car_sale_details.php?id=<?=$view['car_id']?>"><button type="button"  class="btn btn-outline-dark btn-block">see details</button></a></br>
                </div>
                <div class="col-lg-12 text-left">
                  <a  href="car_sale.php"><button type="button" name="book" class="btn btn-outline-danger btn-block">cancel comparison</button></a></br>
              </div>
                <?php
              }

          ?>
                </div>
								</div>
							</div>
            </form>
						</div>
          <?php }
        } else {?>
          <div class="alert alert-danger" role="alert">
            <h3>No result found ! try again!</h3>
          </div>
          <?php } ?>
							<!-- Single Popular Car End -->
						</div>
        			</div>
        		</div>
        	</div>
        </div>
    </section>
    <!--== Gallery Page Content End ==-->

<?php include_once 'includes/footer.php'; ?>
<script>
function myfn(){
var c= document.getElementById('class').value;
var p= document.getElementById('price').value;
if(c=="SELECT FROM HERE"){
  alert('please select car class');
  return false;
}else if(p=="1"){
  alert('please select car price');
  return false;
}

}


</script>
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
