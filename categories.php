<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Menu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">Coffee</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a class="active" href="categories.php">Menu</a></li>
          <li><a href="resume.php">Resume</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/panda.motovlog.1?mibextid=ZbWKwL" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://l.instagram.com/?u=https%3A%2F%2Finstagram.com%2Filmirajinbelajar%3Figshid%3DNjIwNzIyMDk2Mg%253D%253D&e=AT05KtZI_x8J_qgj8rcIg6ivOFiO_m4gS_SwmUtNKuI5WI3qSg4UJBacPsUbRLVES5aQmBkj4YAPYseWlChWozIEItSkpL32f_0fzKTa5diRf0seMYcu5Q" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>

  </header><!-- End Header -->

  <main id="main">

    <!-- Menu -->
    <div class="container text-center" style="margin-top: 6rem; margin-bottom: 10rem;">
      <div class="row justify-content-center">
        <h1 class="fw-bold m-2">Categories</h1>
        <hr>

        <?php
        include('koneksi.php');
        $queryCategories = mysqli_query($koneksi, "SELECT * FROM categories");
        foreach ($queryCategories as $key => $value) :
        ?>

          <div class="col-6 col-lg-4 col-md-4 mb-2">
            <div class="card">
              <img src="assets/img/<?= $value['photo']; ?>" class="card-img-top" alt="<?= $value['photo']; ?>">
              <div class="card-body">
                <h5 class="card-title"><?= $value['nama_category']; ?></h5>
                <a href="menu.php?id_category=<?= $value['id']; ?>" class="btn btn-primary w-100">More...</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <!-- End Menu -->
    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="fixed-bottom">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>ilmirajinbelajar</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/ -->
          Designed by <a href="https://l.instagram.com/?u=https%3A%2F%2Finstagram.com%2Filmirajinbelajar%3Figshid%3DNjIwNzIyMDk2Mg%253D%253D&e=AT05KtZI_x8J_qgj8rcIg6ivOFiO_m4gS_SwmUtNKuI5WI3qSg4UJBacPsUbRLVES5aQmBkj4YAPYseWlChWozIEItSkpL32f_0fzKTa5diRf0seMYcu5Q">ilmirajinbelajar</a>
        </div>
      </div>
    </footer><!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>