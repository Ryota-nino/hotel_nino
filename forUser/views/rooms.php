<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>About - Moderna Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Moderna - v2.2.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container">

            <div class="logo float-left">
                <h1 class="text-light"><a href="index.php"><span>NINO</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.php"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu float-right d-none d-lg-block">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li class="active"><a href="rooms.php">Rooms</a></li>
                    <li><a href="portfolio.php">Photos</a></li>
                    <li><a href="team.php">Team</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="reserve.php">Reserve</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li>
                        <?php
                        if (isset($_SESSION['user_id'])) {
                        ?>
                            <a href="../action/logout.php"> <?php echo "Logout"; ?> </a>
                        <?php
                        } else {
                        ?>
                            <a href="login.php"> <?php echo "Login"; ?> </a>
                        <?php
                        }
                        ?>
                    </li>
                    <li>
                        <?php
                        if (isset($_SESSION['user_id'])) {
                        ?>
                            <a href="account.php"> <?php echo "Account"; ?> </a>
                        <?php
                        } else {
                        ?>
                            <a href="signup.php"> <?php echo "Sign up"; ?> </a>
                        <?php
                        }
                        ?>
                    </li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Features Section ======= -->
        <section class="features">
            <div class="container">

                <div class="section-title">
                    <h2>Rooms</h2>
                    <p>We offer a wide variety of rooms to suit your mood. Please find a room that suits you. If you don't like the color of the sheets in the room, you can change it.</p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="../assets/img/rooms-1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-4">
                        <h3>Standard Queen Room</h3>
                        <p class="font-italic">
                            The room is based on white. You will be able to have a relaxing morning. If you don't like white, you can change the color only if you contact us in advance.
                        </p>
                        <ul>
                            <li><i class="icofont-check"></i> We have taken advanced security measures.</li>
                            <li><i class="icofont-check"></i> The room is completely sterilized with alcohol.</li>
                        </ul>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="../assets/img/rooms-2.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1">
                        <h3>Standard Jack Room</h3>
                        <p class="font-italic">
                            The structure of the room is reminiscent of a tropical country. Makes you feel like you are in a different world.
                        </p>
                        <ul>
                            <li><i class="icofont-check"></i> We have taken advanced security measures.</li>
                            <li><i class="icofont-check"></i> The room is completely sterilized with alcohol.</li>
                        </ul>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="../assets/img/rooms-3.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5">
                        <h3>Superior Ace Room</h3>
                        <p>It is a luxurious room with a pool in the room. It is a luxurious room with a pool in the room. No matter how much you swim, it's your pool.</p>
                        <ul>
                            <li><i class="icofont-check"></i> We have taken advanced security measures.</li>
                            <li><i class="icofont-check"></i> The room is completely sterilized with alcohol.</li>
                            <li><i class="icofont-check"></i> I try to keep insects out.</li>
                        </ul>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="../assets/img/rooms-4.jpg" class="img-fluid" alt="" height="300" width="100%">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1">
                        <h3>Joker Park Suite</h3>
                        <p class="font-italic">
                            This room has a garden with a pool. It is a luxurious room with a pool in the room. No matter how much you swim, it's your pool.
                        </p>
                        <ul>
                            <li><i class="icofont-check"></i> We have taken advanced security measures.</li>
                            <li><i class="icofont-check"></i> The room is completely sterilized with alcohol.</li>
                            <li><i class="icofont-check"></i> I try to keep insects out.</li>
                        </ul>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="../assets/img/rooms-5.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5">
                        <h3>King Room Villa (Ocean Front)</h3>
                        <p>It is a large room that can be stopped by up to 10 people. It makes you feel as if you were a king. You can scuba dive from the room. This is the room we recommend most.</p>
                        <ul>
                            <li><i class="icofont-check"></i> We have taken advanced security measures.</li>
                            <li><i class="icofont-check"></i> The room is completely sterilized with alcohol.</li>
                            <li><i class="icofont-check"></i> I try to keep insects out.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h4>Our Newsletter</h4>
                        <p>Can you search our newsletter?</p>
                    </div>
                    <div class="col-lg-6">
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>About Moderna</h3>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/vendor/venobox/venobox.min.js"></script>
    <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="../assets/vendor/counterup/counterup.min.js"></script>
    <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>