<?php session_start();?>
<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->
    <!--== Preloader Area End ==-->
<!--== Header Area Start ==-->
<header id="header-area" class="fixed-top">

    <!--== Header Bottom Start ==-->
    <div id="header-bottom">
        <div class="container">
            <div class="row">
                <!--== Logo Start ==-->
                <div class="col-lg-4">
                    <a href="index.html" class="logo">
                        <img src="assets/img/logo.png" alt="JSOFT">
                    </a>
                </div>
                <!--== Logo End ==-->

                <!--== Main Menu Start ==-->
                <div class="col-lg-8 d-none d-xl-block">
                    <nav class="mainmenu alignright">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="available_cars.php">Rent-a-Car</a></li>
                            <li><a href="car_sale.php">Car Sale</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="admin/index.php">sell your car</a></li>
                            <?php if(isset($_SESSION['name'])){?>
                              <li><a><?php echo $_SESSION['name'];?></a>
                              <ul>
                                  <li><a href="logout.php">Log Out</a></li>
                              </ul>
                              </li>
                            <?php } else { ?>
                            <li><a href="login.php">login</a>
                            </li>
                          <?php } ?>
                        </ul>
                    </nav>
                </div>
                <!--== Main Menu End ==-->
            </div>
        </div>
    </div>
    <!--== Header Bottom End ==-->
</header>
<!--== Header Area End ==-->
