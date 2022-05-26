<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla CheckIn</title>
    <link rel="stylesheet" href="../css/check-in.css">
</head>

<body class="bodyCheck">
    <!-- <style>
        .boton {
            background: #8314a5;
            border-color: transparent;
            color: white;
            font-size: 20px;
            font-weight: bold;
            letter-spacing: 2px;
            height: 50px;
            margin-top: 56px;
            margin-bottom: 1px;
            cursor: pointer;
        }
    </style> -->
    <?php
    $conexion = mysqli_connect("sql207.byethost31.com", "b31_29729395", "12345678900987654321", "b31_29729395_checkin") or
        die("palabras con la conexion y datos incorrectos");
    mysqli_query($conexion, "insert into checkin (codigo,nombre,apellido,origen,destino,correo)

        values ('$_REQUEST[codigo]','$_REQUEST[nombre]','$_REQUEST[apellido]',
        '$_REQUEST[origen]','$_REQUEST[destino]','$_REQUEST[correo]')")

        or die("Problemas en el select" . mysqli_error($conexion));
    mysqli_close($conexion);
    ?>

    <?php
    $conexion = mysqli_connect("sql207.byethost31.com", "b31_29729395", "12345678900987654321", "b31_29729395_checkin") or
        die("Problemas con la conexion");

    $registros = mysqli_query($conexion, "select codigo,nombre,apellido,origen,destino,correo from checkin where codigo='$_REQUEST[codigo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    while ($reg = mysqli_fetch_array($registros)) {
        echo "<div class='divCheck' style='color: green'>";
        echo "<center>";
        echo "Codigo: " . $reg['codigo'] . "<br>";
        echo "Su nombre es: " . $reg['nombre'] . "<br>";
        echo "Su apellido es: " .  $reg['apellido'] . "<br>";
        echo "Esta saliendo de: " . $reg['origen'] . "<br>";
        echo "Esta viajando a: " .  $reg['destino'] . "<br>";
        echo "Su correo es: " .  $reg['correo'] . "<br>";
        echo "<br>";
        echo "</center>";
        echo "</div>";
    }

    mysqli_close($conexion);
    ?>

    <center>
        <input type="submit" class="boton" value="FINALIZAR">
    </center>
</body>

</html>