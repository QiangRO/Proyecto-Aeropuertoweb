<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla CheckIn</title>
    <link rel="stylesheet" href="../css/check-in.css">
</head>

<body class="bodyPet">
    <?php
    $conexion = mysqli_connect("sql207.byethost31.com", "b31_29729395", "12345678900987654321", "b31_29729395_checkin") or
        die("problemas con la conexion o datos incorrectos");

    $registros = mysqli_query($conexion, "select codigoMascota, peso, raza, origen, destino from petcheck") or die("Problemas en el select" . mysqli_error($conexion));

    while ($registro = mysqli_fetch_array($registros)) {
        echo "<div class='divPet'>";
        echo "Codigo de la Mascota: " . $registro['codigoMascota']. "<br>";
        echo "Peso de la Mascota: " . $registro['peso'] . "<br>";
        echo "Raza de la mascota:" . $registro['raza'] . "<br>";
        echo "Origen de la mascota:" . $registro['origen'] . "<br>";
        echo "Destino de la mascota:" . $registro['destino'] . "<br>";
        echo "<br> <br>";
        echo "</div>";
    }
    mysqli_close($conexion);
    ?>

    <center>
        <input type="submit" class="boton" value="FINALIZAR">
    </center>
</body>

</html>