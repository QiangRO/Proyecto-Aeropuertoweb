
<?php
if (!isset($_POST["codigovuelo"]) || !isset($_POST["origen"]) || !isset($_POST["destino"]) || !isset($_POST["fechasalida"]) || !isset($_POST["fecharegreso"]) || !isset($_POST["horasalida"]) || !isset($_POST["horallegada"]) || !isset($_POST["precio"])) {
    exit("Faltan datos");
}
include_once "funciones.php";
guardarProducto($_POST["codigovuelo"], $_POST["origen"], $_POST["destino"], $_POST["fechasalida"], $_POST["fecharegreso"], $_POST["horasalida"], $_POST["horallegada"], $_POST["precio"]);
header("Location: vuelos.php");
