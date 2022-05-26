<html>
<head>
<title>registro equipaje</title>
</head>
<body>
	<?php // direccion, usuario, pass, nombre de la base
		$conexion = mysqli_connect("sql207.byethost31.com", "b31_29729395", "12345678900987654321", "b31_29729395_checkin") or 
		die("problemas con la conexion o datos incorrectos");

		mysqli_query($conexion, "insert into Equipaje_Facturado (cod_pasajero,peso,cod_tipoequipaje) values ((select cod_pasajero from Pasajero where Nombre = '$_REQUEST[nombre]' and Apellido = '$_REQUEST[apellido]'),'$_REQUEST[peso]','$_REQUEST[tipo]');")

		or die("error en vuelva a intentarlo <a href='./frmRegistroequipaje.php'>Regresar al formulario</a><br>" . mysqli_error($conexion));

		// or die("error en vuelva a intentarlo <a href='http://kaeytt123.byethost24.com/equipaje/frmRegistroequipaje.php'>Regresar al formulario</a><br>" . mysqli_error($conexion)); 

		mysqli_close($conexion);

		echo "la informacion fue grabada con exito.";
		echo "<a href='./verEquipajes.php'>Ver equipajes</a>";
	?>
</body>
</html>
