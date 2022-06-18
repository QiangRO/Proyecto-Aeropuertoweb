<?php require_once "./layout/head.php"; ?>

<div id="fh5co-tours" class="fh5co-section-gray">
    <div class="container">
        <div class="row2 row-bottom-padded-md">
            <div class="col-md-12  text-center">
                <h2 class="heading-title2 tituloh2">CHECK IN</h2>
            </div>
        </div>
        <div class="row2 row-bottom-padded-md">
            <div class="col-md-12  text-center">
                <h2 class="heading-title">Buscar mi reserva</h2>
            </div>
            <div class="col-md-6 ">
                <div class="row2">
                    <div class="col-md-12">
                        <div class="row" style="padding-left: 250px; ">
                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                <div class="input-field">
                                    <form id="contact-form" name="post" action="imprimirDoc.php">
                                        Codigo del avion:
                                        <input style="padding-left: 50px; width: 500px;" type="text" name="codigo_vuelo"
                                            class="form-control" placeholder="Ingrese su codigo:">
                                        <br>Nombre del pasajero:
                                        <input style="padding-left: 50px; width: 500px;" type="text" name="nombre"
                                            class="form-control" placeholder="Ingrese su nombre:">
                                        <br>Apellido del pasajero:
                                        <input style="padding-left: 50px; width: 500px;" type="text" name="apellido"
                                            class="form-control" placeholder="Ingrese su apellido:">
                                        <br>
                                        <div class="col-xxs-12 col-xs-6 mt alternate">
                                            <div class="input-field">
                                                <div id="contentCheck">
                                                    <a href="imprimirDoc.php">
                                                        <input type="submit" class="btn btn-primary btn-block"
                                                            style="width:150px;" id="date-endCheck" value="guardar"></a>

                                                    </input>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "./layout/footer.php"; ?>