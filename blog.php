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
<?php
include_once 'admin/dbCon.php';
$conn= connect();
if(isset($_POST['submit'])){
  $title = $_POST['title'];
  $blog = $_POST['blog'];
  $date = date('d-M-Y');
  $cus_id = $_SESSION['cus_id'];
  $name = $_SESSION['name'];
  $sql="INSERT INTO `blog`( `title`, `blog`, `date`, `cus_id`,name)
        VALUES ('$title','$blog','$date','$cus_id','$name')";
        echo $sql;
  $conn->query($sql);
}


?>
    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Latest Blogs</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Car List Area Start ==-->
    <div id="blog-page-content" class="section-padding">
        <div class="container">
            <div class="row">
                <?php if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']==true){ ?>
              <div class="col-lg-10">
                <h3>Write Your Blog :</h3><hr>
                  <div class="review-area">
                    <div class="review-form">
                      <form method="POST">
                        <div class="message-input">
                          <input type="text" name="title" placeholder="Write Blog Title...." required>
                        </div>
                        <div class="message-input">
                          <textarea name="blog" cols="140" rows="5" placeholder="Write Blog Content here...." required></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary btn-block col-lg-4 " name="submit" value="POST"><br><hr>
                      </form>
                  </div>
              </div>
              </div>
            <?php } ?>
              <div class="col-lg-10">
                  <h3>All Blogs :</h3><hr>
              </div>
              <?php
              $sql="select * from blog ORDER BY date ASC";
              $result = $conn->query($sql);
              foreach($result as $row){
                $name = $row['name'];
                $title = $row['title'];
                $blog = $row['blog'];
                $date = $row['date'];
                $id = $row['blog_id'];

              ?>
                <!-- Single Articles Start -->


                <div class="col-lg-10">
                    <article class="single-article">
                            <div class="col-lg-12">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                      <form method="POST" action="blog_details.php">
                                        <div class="article-body">
                                            <h3><a><?=$title?></a></h3>
                                            <div class="article-meta">
                                                <a class="author">By :: <span><?=$name?></span></a>
                                            </div>
                                            <div class="article-date"><?=$date?></div>
                                            <p><?=$blog?></p>

                                              <input type="hidden" name="id" value="<?=$id?>">
                                              <input type="submit" class="readmore-btn" value="Read More">
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </article>
                </div>
                <!-- Single Articles End -->
              <?php } ?>

            </div>
        </div>
    </div>
    <!--== Car List Area End ==-->

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
