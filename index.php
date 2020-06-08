<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Cardoor-HOME</title>

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Vegas Min CSS ===-->
    <link href="assets/css/plugins/vegas.min.css" rel="stylesheet">
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

  <!--== Slider Area Start ==-->
  <section id="slider-area">
      <!--== slide Item One ==-->
      <div class="single-slide-item overlay">
          <div class="container">
              <div class="row">
                  <div class="col-lg-5">
                      <div class="book-a-car">
                        <?php if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']==true){ ?>
                          <form method="POST" action="available_cars.php">
                              <!--== Pick Up Location ==-->
                              <div class="pickup-location book-item">
                                  <h4>PICK-UP LOCATION:</h4>
                                  <select class="custom-select"name="zone">
                                    <option>Dhanmondi</option>
                                    <option>Mohammodpur</option>
                                    <option>Panthapath</option>
                                    <option>Azimpur</option>
                                  </select>
                              </div>
                              <!--== Pick Up Location ==-->

                              <!--== Pick Up Date ==-->
                              <!--== Pick Up Date ==-->
                              <div class="pick-up-date book-item">
                                  <h4>PICK-UP DATE:</h4>
                                  <input id="from" name="pick_date" required />

                                  <div class="return-car">
                                      <h4>Return DATE:</h4>
                                      <input id="to" name="return_date" required />
                                  </div>
                              </div>
                              <!--== Pick Up Location ==-->

                              <div class="book-button text-center">
                                  <input type="submit" name="search" class="book-now-btn" value="Book Now">
                              </div>
                          </form>
                        <?php } else { ?>
                        <h4>Please Login or SignUp for Booking!</h4>
                        <?php } ?>
                      </div>
                  </div>

                  <div class="col-lg-7 text-right">
                      <div class="display-table">
                          <div class="display-table-cell">
                              <div class="slider-right-text">
                                  <h1>BOOK A CAR TODAY!</h1>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--== slide Item One ==-->
  </section>
    <!--== Partner Area Start ==-->
    <div id="partner-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner-content-wrap">
                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-1.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-2.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-3.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-4.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-5.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-1.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-4.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Partner Area End ==-->

    <!--== Services Area Start ==-->
    <section id="service-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Services</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

			<!-- Service Content Start -->
			<div class="row">
				<div class="col-lg-11 m-auto text-center">
					<div class="service-container-wrap">
						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-taxi"></i>
							<h3>RENTAL CAR</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-cog"></i>
							<h3>CAR REPAIR</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-map-marker"></i>
							<h3>TAXI SERVICE</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-life-ring"></i>
							<h3>life insurance</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-bath"></i>
							<h3>car wash</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-phone"></i>
							<h3>call driver</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
						</div>
						<!-- Single Service End -->
					</div>
				</div>
			</div>
			<!-- Service Content End -->
        </div>
    </section>
    <!--== Services Area End ==-->

    <!--== Fun Fact Area Start ==-->
    <section id="funfact-area" class="overlay section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-md-12 m-auto">
                    <div class="funfact-content-wrap">
                        <div class="row">
                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-smile-o"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">550</span>+</p>
                                        <h4>HAPPY CLIENTS</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-car"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">250</span>+</p>
                                        <h4>CARS IN STOCK</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-bank"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">50</span>+</p>
                                        <h4>office in cities</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Fun Fact Area End ==-->



    <!--== Pricing Area Start ==-->
    <section id="pricing-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Only quality for clients</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <!-- Pricing Table Conatent Start -->
            <div class="row">
                <!-- Single Pricing Table -->
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-pricing-table">
                        <h3>BUSINESS</h3>
                        <h2>$ 55.99</h2>
                        <h5>PER MONTH</h5>

                        <ul class="package-list">
                            <li>FREE VEHICLE DELIVERY</li>
                            <li>WEDDINGS CELEBRATIONS</li>
                            <li>FULL INSURANCE INCLUDED</li>
                            <li>TRANSPORT ABROAD</li>
                            <li>ALL INCLUSIVE MINI BAR</li>
                            <li>CHAUFFER INCLUDED IN PRICE</li>
                        </ul>
                    </div>
                </div>
                <!-- Single Pricing Table -->

                <!-- Single Pricing Table -->
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-pricing-table">
                        <h3>Trial</h3>
                        <h2>Free</h2>
                        <h5>PER MONTH</h5>

                        <ul class="package-list">
                            <li>FREE VEHICLE DELIVERY</li>
                            <li>OTHER CELEBRATIONS</li>
                            <li>FULL INSURANCE</li>
                            <li>TRANSPORT ABROAD</li>
                            <li>MINI BAR</li>
                            <li>INCLUDED IN PRICE</li>
                        </ul>
                    </div>
                </div>
                <!-- Single Pricing Table -->

                <!-- Single Pricing Table -->
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-pricing-table">
                        <h3>standard</h3>
                        <h2>$ 35.99</h2>
                        <h5>PER MONTH</h5>

                        <ul class="package-list">
                            <li>DELIVERY AT AIRPORT</li>
                            <li>WEDDINGS AND OTHER</li>
                            <li>FULL INCLUDED</li>
                            <li>TRANSPORT ABROAD</li>
                            <li>ALL MINI BAR</li>
                            <li>CHAUFFER PRICE</li>
                        </ul>
                    </div>
                </div>
                <!-- Single Pricing Table -->
            </div>
            <!-- Pricing Table Conatent End -->
        </div>
    </section>
    <!--== Pricing Area End ==-->

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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="/resources/demos/style.css">
     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <?php $id = date('m/d/Y'); ?>
     <script>
        $( function() {
          var dateFormat = "mm/dd/yy",
          from = $( "#from" )
          .datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 1,
            minDate: new Date("<?=$id?>"),
          })
          .on( "change", function() {
            to.datepicker( "option", "minDate", getDate( this ) );
          }),
          to = $( "#to" ).datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 1,
          })
          .on( "change", function() {
            from.datepicker( "option", "maxDate", getDate( this ) );
          });
          function getDate( element ) {
            var date;
            try {
              date = $.datepicker.parseDate( dateFormat, element.value );
              } catch( error ) {
              date = null;
            }
            return date;
          }
        } );
      </script>
</body>

</html>

<!-- Modal -->
