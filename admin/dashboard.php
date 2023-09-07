<?php
session_start();

if (!isset($_SESSION['username']) and !isset($_SESSION['password'])) {
    echo "<script>
            alert('Dilarang mengakses halaman ini!');
            window.location='../login.php';
          </script>";
} else {

?>
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
        <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="../assets/css/style.css" rel="stylesheet">

        <!-- SweatAlert -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

                <h1 class="logo me-auto me-lg-0"><a href="#">Coffee</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>-->

                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li><a class="active" href="dashboard.php">Dashboard</a></li>
                        <li><a href="add.php">Add</a></li>
                        <li><a href="data.php">Data</a></li>
                        <li><a href="data_costumer.php">Data Custommer</a></li>
                        <li><a href="logout.php" class="alert_notif btn btn-danger text-light">Logout</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

            </div>

        </header><!-- End Header -->

        <main id="main">
            <div class="container" style="margin-top: 6rem;">
                <div class="row justify-content-center">
                    <div class="col-12 card p-4 shadow">
                        <h1>Hello, <?= $_SESSION['full_name'] ?></h1>
                    </div>
                </div>
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
            <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
            <script src="../assets/vendor/aos/aos.js"></script>
            <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
            <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
            <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
            <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
            <script src="../assets/vendor/php-email-form/validate.js"></script>

            <!-- Template Main JS File -->
            <script src="../assets/js/main.js"></script>
            <!-- 
            <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css"> -->

            <!-- jquery -->
            <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
            <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
            <script>
                $('.alert_notif').on('click', function() {
                    var getLink = $(this).attr('href');
                    Swal.fire({
                        title: 'Apakah kamu yakin ingin keluar?',
                        text: "Anda harus login ulang untuk bisa masuk ke halaman ini lagi!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, Keluar!'
                    }).then(result => {
                        if (result.isConfirmed) {
                            window.location.href = getLink
                        }
                    })
                    return false;
                });
            </script>

    </body>

    </html>

<?php } ?>