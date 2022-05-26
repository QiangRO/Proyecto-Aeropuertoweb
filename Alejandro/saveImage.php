<?php
if (isset($_POST["enviar"])) {
    //obtenemos los valores de las imagenes
    $checkFoto = getimagesize($_FILES["foto"]["tmp_name"]);
    $checkCertificado = getimagesize($_FILES["certificado"]["tmp_name"]);
    $checkInforme = getimagesize($_FILES["informe"]["tmp_name"]);
    $checkVacunacion = getimagesize($_FILES["vacunacion"]["tmp_name"]);
    if (
        $checkFoto !== false and
        $checkCertificado !== false and
        $checkInforme !== false and
        $checkVacunacion !== false
    ) {
        /*
         * Insertar imagen en la base de datos
         */

        //Base de datos de la imagen
        $dbHost     = 'sql207.byethost31.com';
        $dbUsername = 'b31_29729395';
        $dbPassword = '12345678900987654321';
        $dbName     = 'b31_29729395_checkin';

        //Creamos la conexión
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        // Si se conecta correctamente
        if ($db->connect_error) {
            die("Error al conectar: " . $db->connect_error);
        }

        $codigoMascota = $_POST['codigoMascota'];
        $peso = $_POST['peso'];
        $raza = $_POST['raza'];
        $origen =  $_POST['origen'];
        $destino = $_POST['destino'];

        $imageFoto = $_FILES['foto']['tmp_name'];
        $imgContentFoto = addslashes(file_get_contents($imageFoto));

        $imageCrt = $_FILES['certificado']['tmp_name'];
        $imgContentCrt = addslashes(file_get_contents($imageCrt));

        $imageInf = $_FILES['informe']['tmp_name'];
        $imgContentInf = addslashes(file_get_contents($imageInf));

        $imageVacu = $_FILES['vacunacion']['tmp_name'];
        $imgContentVacu = addslashes(file_get_contents($imageVacu));
        $fechaRegistro = date("2022-05-25 H:i:s");

        //Insertar imagen a la base de datos
        $insert = $db->query("INSERT INTO petcheck (codigoMascota, peso, raza, origen, destino, foto, certificado, informe, vacunacion, fechaResgistro) VALUES ('$codigoMascota', '$peso', '$raza', '$origen', '$destino', '$imgContentFoto', '$imgContentCrt', '$imgContentInf', '$imgContentVacu', '$fechaRegistro')");
        if ($insert) {
            echo "El archivo fue subido exitosamente.";
            echo "<a href='./tablapetcheck.php'>Ver datos</a>";
        } else {
            echo "Error al subir el arhivo, vuelve a intentarlo.";
        }
    } else {
        echo "Por favor sube las imagenes solicitadas.";
    }
}
?>