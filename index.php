<?php session_start();
/*
if(isset($_SESSION['usuario'])){
  require 'index.php'
}else {
  header('Location:login.php')
}
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Aeropuerto Juan N Álvarez</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/Imagenes que se pueden ocupar/airport-MMAA.png" rel="icon">
  <link href="assets/Imagenes que se pueden ocupar/protesis.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.3.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body style="z-index: 100;">

  <!-- ======= Header ======= -->
  <header id="header" style="background: darkblue;" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">AIRLINE</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <!-- <li><a class="nav-link scrollto" href="#about">About</a></li>-->
          <!-- <li><a class="nav-link scrollto " href="#portfolio">¿?</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#team">¿?</a></li> -->
          <li><a class="nav-link scrollto" href="index-pagos.php">Reservas</a></li>
          <li class="dropdown"><a href="#"><span>Listas de Aerolineas</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Amaszonas</a></li>
              <li><a href="#">BOA</a></li>
              <li><a href="#">Aerolineas Argentinas</a></li>
              <li><a href="#">Ecojet</a></li>
              <li><a href="#">Amaszonas Uruguay</a></li>
              <li><a href="#">American Airlines</a></li>
              <li><a href="#">Air Europa</a></li>
              <li><a href="#">Azul</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="Aeropuertos.php"><span>Aeropuertos</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">La Paz</a></li>
              <li><a href="#">Santa Cruz</a></li>
              <li><a href="#">Cochabamba</a></li>
              <li><a href="#">Chuquisaca</a></li>
              <li><a href="#">Beni</a></li>
              <li><a href="#">Oruro</a></li>
              <li><a href="#">Potosi</a></li>
              <li><a href="#">Tarija</a></li>
              <li><a href="#">Pando</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="Interesante.php"><span>Interesante</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Los mejores Aviones</a></li>
              <li><a href="#">Información util para viajar</a></li>
              <li><a href="#">Aeropuerto mas activos</a></li>
              <li><a href="#">5 Aerolineas mas seguras</a></li>
              <li><a href="#">Miedo al volar y como vencerlo</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Sobre el sitio</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Politica y privacidad</a></li>
              <li><a href="#">Terminos y condiciones</a></li>
              <li><a class="nav-link scrollto" href="#contact">Contactanos</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </li>
          <li class="dropdown"><a href="#"><span>Momento Evaluativo</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="./Paola/check-in.php">Check-in</a></li>
              <li><a href="./Alejandro/petcheck.php">Pet-Check</a></li>
              <li><a href="./Kael/frmRegistro.php">Registro Pasajero</a></li>
              <!-- <li><a href="./Kael/frmRegistroequipaje.php">Registro Equipaje</a></li> -->
              <li><a href="./controlDeVuelos.php">Control de Vuelos</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </li>
      </nav><!-- .navbar -->
      <!-- <a href="Login.php" class="get-started-btn scrollto">Iniciar Sesión</a> -->
      <!--<a href="cerrar.php" class="get-started-btn scrollto">Cerrar Sesión</a>-->

    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->

  <section id="hero" class="d-flex align-items-center justify-content-center">
    <!--     -->
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>AEROPUERTO INTERNACIONAL DE EL ALTO<span>.</span></h1>
          <h2>COMODIDAD Y SEGURIDAD AL MOMENTO DE VIAJAR</h2>
        </div>
      </div>


      <main id="main">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
              </div>
              <div class="col-md-12">
              </div>
              <div class="col-md-12">
                <p style="color: white;">Copyright &copy; 2021 Todos los derechos reservador Aeropuerto internacional de El Alto

                  | Devoloped: <em>PERSONA X</em></p>
              </div>
            </div>
          </div>
        </footer>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/purecounter/purecounter.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

</body>

</html>