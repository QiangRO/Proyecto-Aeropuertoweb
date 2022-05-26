<html>
<head>
<title>buscar Pequipajes</title>
</head>
<body>
	<?php 
		$conexion = mysqli_connect("sql207.byethost31.com", "b31_29729395", "12345678900987654321", "b31_29729395_checkin") or 
		die("problemas con la conexion o datos incorrectos");

		$registros = mysqli_query($conexion, "select Nombre,Apellido,Peso,tipoequipaje.Tipo,tipoequipaje.cod_tipoequipaje from Pasajero inner join Equipaje_Facturado on Pasajero.cod_pasajero = Equipaje_Facturado.cod_pasajero inner join tipoequipaje on tipoequipaje.cod_tipoequipaje = Equipaje_Facturado.cod_tipoequipaje") or die("Problemas en el select" . mysqli_error($conexion));

		while ($registro = mysqli_fetch_array($registros)){
		echo "nombre del pasajero:" . $registro['Nombre'] . " " . $registro['Apellido'] . "<br>";
		echo "peso del equipaje:" . $registro['Peso'] . "<br>";
		echo "tipo de equipaje:";
		switch ($registro['cod_tipoequipaje'])
        {
			case 1: echo "fragil"; break;
			case 2: echo "pesado"; break;
			case 3: echo "peso normal"; break;
		}
		echo "<br>";
		echo "<hr>";

	}
	mysqli_close($conexion);

	?>
</body>
</html>