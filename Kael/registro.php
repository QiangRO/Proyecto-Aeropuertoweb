<html>
<head>
<title>php y my sql</title>
</head>
<body>
	<?php // direccion, usuario, pass, nombre de la base
		$conexion = mysqli_connect("sql207.byethost31.com", "b31_29729395", "12345678900987654321", "b31_29729395_checkin") or 
		die("problemas con la conexion o datos incorrectos");

		mysqli_query($conexion, "insert into Pasajero (Nombre,Apellido,Calle,Ciudad) values ('$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[ciudad]','$_REQUEST[calle]')")
		or die("problemas en el select" . mysqli_error($conexion)); 

		mysqli_close($conexion);

		echo "la informacion fue grabada con exito.";
	?>
	<a href="./frmRegistroequipaje.php">registrar equipaje</a>
    <!-- <a href="http://kaeytt123.byethost24.com/equipaje/frmRegistroequipaje.php">registrar equipaje</a> -->
</body>
</html>

