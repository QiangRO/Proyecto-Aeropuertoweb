<?php include_once "sesion.php" ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta content="Semantic-UI-Forest, collection of design, themes and templates for Semantic-UI." name="description" />
    <meta content="Semantic-UI, Theme, Design, Template" name="keywords" />
    <meta content="PPType" name="author" />
    <meta content="#ffffff" name="theme-color" />
    <title>Administrador</title>
    <link href="../css/semantic.min.css" rel="stylesheet" type="text/css" />
    <link href="../css/styleadmin.css" rel="stylesheet" type="text/css" />

    <script src="../js/jquery.min.js"></script>
    <script src="../js/admin.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="">
</head>

<body>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", () => {
            const boton = document.querySelector(".navbar-burger");
            const menu = document.querySelector(".navbar-menu");
            boton.onclick = () => {
                menu.classList.toggle("is-active");
                boton.classList.toggle("is-active");
            };
        });
    </script>
    <div class="ui inverted huge borderless fixed fluid menu">
        <a class="header item">SISTEMA DE RESERVA DE BOLETOS</a>
        <div class="right menu">
            <a class="item" href="logout.php">Cerrar sesión</a>
        </div>
    </div>

    <div class="ui grid">
        <div class="row">
            <div class="column" id="sidebar">
                <div class="ui secondary vertical fluid menu">
                    <a class="item" href="reservas.php">Reservas</a>
                    <a class="item" href="transacciones.php">Transaccion</a>
                    <a class="item" href="vuelos.php">Vuelos</a>
                </div>
            </div>