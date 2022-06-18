<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/html2pdf.bundle.min.js"></script>
    <script src="js/script.js"></script>
    <title>Check In</title>
    
	<link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<header id="fh5co-header-section" class="sticky-banner">
<div class="container">
					<center><div class="nav-header" style="padding: 30px;">
                        <h1 id="fh5co-logo"><i id="btnCrearPdf" class="icon-print" style="color:#3683f7; "></i></h1>
						<a href="favicon.png" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.php"><i class="icon-airplane"></i>AIDU</a></h1>
                        <h1 class="tituloh2" style="color: #3683f7; padding-top:40px; ">CHECK IN</h1>
					</div></center>
				</div>
			</header>

    <?php
    
		$conexion = mysqli_connect("localhost", "root", "", "aeropuerto") or 
        die("Problemas con la conexion");
		$registros = mysqli_query($conexion, "select codigo_vuelo, ci, nombre, apellido, correo from pasajero
        where codigo_vuelo='$_REQUEST[codigo_vuelo]'") or
         die ("Problemas en el select:" . mysqli_error($conexion));
		while ($reg = mysqli_fetch_array($registros)){
			echo(" <center> <p>-----------------------------------------------------------</p>
            Nombre del pasajero: ". $reg['nombre'] . " <br>
            Apellido: ". $reg['apellido'] . " <br>
            Correo: ". $reg['correo'] . " <br>
            ci: ". $reg['ci'] . " <br>
            Codigo de vuelo: ". $reg['codigo_vuelo'] . "
                <p>-----------------------------------------------------------</p> </center>");
		}
		mysqli_close($conexion);
	?>

</body>

</html>

