
<!DOCTYPE html>
<html class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Aeropuerto Univalle</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" />
	<meta name="keywords" content="html5, css3, mobile first, responsive" />
	<meta name="author" />
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<link rel="icon" href="../images/favicon.png">

	<!-- Animate.css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="../css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="../css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="../css/cs-select.css">
	<link rel="stylesheet" href="../css/cs-skin-border.css">
	<link rel="stylesheet" href="../css/style.css">

	<link rel="stylesheet" href="../css/acordeon.css">
	<link rel="stylesheet" href="../prueba/prueb1.css">
	<link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">

	<!-- <link rel="stylesheet" href="/fonts/style.css"> -->
	<!-- Estilos mapas-->
	<!-- <link rel="stylesheet" href="css/marcasMap.css"> -->

	<!-- <script src="js/marcasAeropuerto.js"></script> -->
	<script src="../js/marca-aeropuerto.js"></script>
	<script src="../js/datamapa.js"></script>
	<script src="../js/app.js"></script>

	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>

	<!-- Google map api javascript -->
	<script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgEpKnBhR574VxDg73mkEjJeuRCTJ77pU&map_ids=3792af100ec9ffce&callback=initMap">
	</script>

	<!-- Datatables -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />
	<title></title>
	<style>
		table.dataTable thead {
			background: linear-gradient(to right, #0575E6, #00F260);
			color: white;
		}
	</style>
</head>

<body>
	<div id="fh5co-wrapper">
		<div id="fh5co-page">
			<header id="fh5co-header-section" class="sticky-banner">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
						<h1 id="fh5co-logo"><a href="../index.php"><i class="icon-airplane"></i>AIDU</a></h1>

						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<!-- <li>
									<a href="vacaciones.php" class="fh5co-sub-ddown">Antes de viajar</a>
									<ul class="fh5co-sub-menu">
										<li><a href="antesviaje.php">Politica de equipaje</a></li>
										<li><a href="mascotas.php">Politicas de mascotas</a></li>
										<li><a href="ServiciosEspeciales.php">Servicios Especiales</a></li>
										<li><a href="llegarAeropuerto.php">Llegar al aeropuerto</a></li>
										<li><a href="PasajerosEspeciales.php"> Pasajeros especiales</a></li>
										<li><a href="TipsEquipaje.php"> Tips de equipaje</a></li>
									</ul>
								</li> -->
								<li><a href="../hotel.php">Hotel</a></li>
								<li><a href="../contacto.php">Contactanos</a></li>
							</ul>
							<div class="navbar-item">
								<div class="buttons">
									<a href="ver_carrito.php" class="button button is-link is-outlined">
										<strong>Comprar <?php
															include_once "funciones.php";
															$conteo = count(obtenerIdsDeProductosEnCarrito());
															if ($conteo > 0) {
																printf("(%d)", $conteo);
															}
															?>&nbsp;<i class="fa fa-shopping-cart"></i></strong>
									</a>
								</div>
							</div>
						</nav>
					</div>
				</div>
			</header>