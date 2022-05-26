<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro pasajeros</title>
	<link rel="stylesheet" href="../css/check-in.css">
</head>

<body class="bodyReg">
	<div class="contact-tittle">
		<h1 style="color: green;">Registro de pasajero</h1>
		<h2>Ingrese sus datos</h2>
	</div>

	<div class="contact-form">
		<form id="contact-form" method="post" action="registro.php">
			<input type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre:" required>
			<br>
			<input type="text" name="apellido" class="form-control" placeholder="Ingrese su apellido:" required>
			<br>
			<input type="text" name="ciudad" class="form-control" placeholder="Ingrese su Ciudad de procedencia:" required>
			<br>
			<input type="text" name="calle" class="form-control" placeholder="Ingrese su Calle:" required>
			<br>
			<select name="genero">
				<option value="1">Hombre</option>
				<option value="2">mujer</option>
				<option value="3">prefiero no decirlo</option>
			</select>
			<br>
			<input type="submit" class="form-control boton" name="guardar" value="GUARDAR">
		</form>
	</div>
</body>

</html>