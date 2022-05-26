<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check In</title>
    <link rel="stylesheet" href="../css/check-in.css">
</head>

<body class="bodyCheck">
    <div class="contact-tittle">
        <h1 style="color: green;">Check In</h1>
        <h2>Ingrese sus datos</h2>
    </div>

    <div class="contact-form">
        <form id="contact-form" method="post" action="tablaCheckIn.php">
            <input type="text" name="codigo" class="form-control" placeholder="Ingrese su codigo:" required>
            <br>
            <input type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre:" required>
            <br>
            <input type="text" name="apellido" class="form-control" placeholder="Ingrese su apellido:" required>
            <br>
            <input type="text" name="origen" class="form-control" placeholder="Ingrese su origen:" required>
            <br>
            <input type="text" name="destino" class="form-control" placeholder="Ingrese su destino:" required>
            <br>
            <input type="email" name="correo" class="form-control" placeholder="Ingrese su correo:" required>
            <br>
            <input type="submit" class="form-control boton" value="ENVIAR">
        </form>
    </div>
</body>

</html>