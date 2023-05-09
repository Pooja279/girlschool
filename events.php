<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ggicballia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <!-- Favicons -->
  <link href="assets/img/upboard.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
<script>
  $(function() {
  var selectedClass = "";
  $(".filter").click(function(){
    console.log("Call hre======>>>");
    selectedClass = $(this).attr("data-rel");
    $("#gallery").fadeTo(100, 0.1);
    $("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
    setTimeout(function() {
      $("."+selectedClass).fadeIn().addClass('animation');
      $("#gallery").fadeTo(300, 1);
    }, 300);
  });
});
</script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
    <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="assets/img/upboard.png" class="me-2" height="30"
        alt="MDB Logo" loading="lazy" />
      <small>GGICBALLIA</small>
    </a>
  </div>
</nav>
      <h1 class="logo me-auto"><a href="index.php"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a  href="courses.php">Academics</a></li>
          <li><a href="admission.php">Admission</a></li>
          <li><a class="active" href="events.php">Events</a></li>
          <!-- <li><a href="pricing.php">Pricing</a></li> -->

          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Events</h2>
        <p>Our school's events gallery showcases the exciting and memorable moments from our various events throughout the school year.</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <!-- Grid row -->
<div class="row">

<!-- Grid column -->
<div class="col-md-12 d-flex justify-content-center mb-5">

  <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">All</button>
  <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="1">Amrit Mahotsav</button>
  <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="2">Yoga Day</button>
  <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="3">Republic Day</button>


</div>
<!-- Grid column -->

</div>
<!-- Grid row -->

<!-- Grid row -->
<div class="gallery" id="gallery">

<!-- Grid column -->
<div class="mb-3 pics animation all 3">
  <img class="img-fluid" src="images/republicday/4.jpg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 2">
  <img class="img-fluid" src="images/YogaDay/1.jpeg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 1">
  <img class="img-fluid" src="images/AzadiKa AmritMahotsav/18.jpeg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 1">
  <img class="img-fluid" src="images/AzadiKa AmritMahotsav/2.jpeg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 2">
  <img class="img-fluid" src="images/YogaDay/7.jpeg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 3">
  <img class="img-fluid" src="images/republicday/5.jpg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 3">
  <img class="img-fluid" src="images/republicday/1.jpg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 2">
  <img class="img-fluid" src="images/YogaDay/12.jpeg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 1">
  <img class="img-fluid" src="images/AzadiKa AmritMahotsav/17.jpeg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 3">
  <img class="img-fluid" src="images/republicday/12.jpg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 3">
  <img class="img-fluid" src="images/republicday/4.jpg" alt="Card image cap">
</div>
<!-- Grid column -->

</div>
<!-- Grid row -->
    <!-- <section id="events" class="events">
      <div class="container" data-aos="fade-up">

    </div>
    </section>End Events Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
include "footer.php";
?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>