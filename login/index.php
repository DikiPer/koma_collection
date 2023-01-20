<?php
session_start();



$dsd = $_SESSION['role'] = "";
if ($_SESSION['role'] == "admin") {
    header("Location: index.php");
} elseif ($_SESSION['role'] == "user") {
    header("Location: ../user/index.php");
}

if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "belum-login") {
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
      <strong>Anda Belum Login!</strong> Silahkan Login Terlebih Dahulu
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div>";
    }
}

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>KOMA</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Constra HTML Template v1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.png" />

    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="../assets/plugins/themefisher-font/style.css">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Animate css -->
    <link rel="stylesheet" href="../assets/plugins/animate/animate.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="../assets/plugins/slick/slick.css">
    <link rel="stylesheet" href="../assets/plugins/slick/slick-theme.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- Link eye -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">


</head>

<body id="body">

    <section class="signin-page account">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="block text-center">
                        <a class="logo" href="depan/index.php">
                            <img src="../assets/images/logotoko.png" alt="" width="100px">
                        </a>
                        <h2 class="text-center">LogIn</h2>
                        <form class="text-left clearfix" action="cek_login.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username"
                                    autofocus>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password"
                                    autocomplete="current-password" required="" id="id_password">
                                <i class="far fa-eye" id="togglePassword"
                                    style="cursor: pointer; float: right; margin-top: -30px; margin-right: 20px;"></i>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-main text-center">Login</button>
                            </div>
                        </form>
                        <p class="mt-20">New in this site ?<a href="signin.php"> Create New Account</a></p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 
    Essential Scripts
    =====================================-->

    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="js/script.js"></script>
    <script src="../assets/js/jqueqy_eye.js"></script>



</body>

</html>