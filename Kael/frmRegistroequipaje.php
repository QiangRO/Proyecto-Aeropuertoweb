<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro de equipaje</title>
	<link rel="stylesheet" href="../css/check-in.css">
</head>

<body class="bodyEquip">
	<div class="contact-tittle">
		<h1 style="color: green;">Registra tu equipaje</h1>
		<h2>Ingrese sus datos</h2>
	</div>

	<div class="contact-form">
		<form id="contact-form" method="post" action="registroEquipaje.php">
			<input type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre:" required>
			<br>
			<input type="text" name="apellido" class="form-control" placeholder="Ingrese su apellido:" required>
			<br>
			<input type="text" name="peso" class="form-control" placeholder="Ingrese el peso del equipaje:" required>
			<br>
			<p>Ingrese seleccione el tipo de equipaje que es:</p>
			<select name="tipo">
				<option value="1">Fragil</option>
				<option value="2">pesado</option>
				<option value="3">Peso normal</option>
			</select>
			<br>
			<input type="submit" class="form-control boton" name="guardar" value="ENVIAR">
		</form>
	</div>
</body>

</html>