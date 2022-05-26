<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Check</title>
    <link rel="stylesheet" href="../css/check-in.css">
</head>

<body class="bodyPet">
    <div class="contact-tittle">
        <h1 style="color: gold;">Pet Check</h1>
        <h2>Ingrese los datos de su mascota</h2>
    </div>

    <div class="contact-form divPet">
        <form id="contact-form" method="post" action="saveImage.php" enctype="multipart/form-data">
            <input type="text" name="codigoMascota" class="form-control" placeholder="Código de mascota:" required>
            <br>
            <input type="number" name="peso" class="form-control" placeholder="Peso:" required>
            <br>
            <input type="text" name="raza" class="form-control" placeholder="Raza:" required>
            <br>
            <input type="text" name="origen" class="form-control" placeholder="Origen:" required>
            <br>
            <input type="text" name="destino" class="form-control" placeholder="Destino:" required>
            <br>
            <p>
                <br>
                Foto de tu mascota:
                <input type="file" name="foto"> <br><br>

                Certificado de vacunas:
                <input type="file" name="certificado"><br><br>

                Informe sanitario:
                <input type="file" name="informe"><br><br>

                Cartilla de vacunacion:
                <input type="file" name="vacunacion"><br>
                <input class="form-control botonPet" type="submit" name="enviar" value="Enviar">
            </p>
        </form>
    </div>

    <!-- <center>
        <h1>REGISTRA TU MASCOTA</h1>
        <form action="petcheck.php" method="post" >
            <input type="text" name="codigoMascota" placeholder="Código de mascota:"><br>
            <input type="number" name="peso" placeholder="Peso:"><br>
            <input type="text" name="raza" placeholder="Raza"><br>

            <input type="text" name="origen" placeholder="Origen:"><br>
            
            <input type="text" name="destino" placeholder="Destino:"><br>
            <p>
                <br>
                Foto de tu mascota:
                <input type="file" name="foto"> <br><br>

                Certificado de vacunas:
                <input type="file" name="certificado"><br><br>

                Informe sanitario:
                <input type="file" name="informe"><br><br>

                Cartilla de vacunacion:
                <input type="file" name="vacunacion"><br><br>
                <input type="submit" name="enviar" value="Enviar">
            </p>
        </form>
    </center> -->
</body>

</html>