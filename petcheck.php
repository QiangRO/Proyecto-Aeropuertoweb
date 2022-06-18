<?php require_once "./layout/head.php"; ?>

<div id="fh5co-tours" class="fh5co-section-gray">
    <div class="container">
        <div class="row2 row-bottom-padded-md">
            <div class="col-md-12  text-center">
                <h2 class="heading-title2 tituloh2">PET CHECK</h2>
            </div>
        </div>
        <div class="row2 row-bottom-padded-md">
            <div class="col-md-12  text-center">
                <h2 class="heading-title">Datos de tu mascota</h2>
            </div>
            <div class="col-md-6 ">
                <div class="row2">
                    <div class="col-md-12">
                        <div class="row" style="padding-left: 250px; ">
                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                <div class="input-field">
                                    <form id="contact-form" name="post" action="imprimirDocM.php">
                                        Codigo del avion:
                                        <input style="padding-left: 50px; width: 500px;" type="text" name="codigo_vuelo"
                                            class="form-control" placeholder="Ingrese su codigo">
                                        <br>Nombre del pasajero:
                                        <input style="padding-left: 50px; width: 500px;" type="text" name="nombre"
                                            class="form-control" placeholder="Ingrese su nombre">
                                        <br>Nombre de la mascota:
                                        <input style="padding-left: 50px; width: 500px;" type="text" name="nomMascota"
                                            class="form-control" placeholder="Ingrese su nombre de su mascota">
                                        <br>
                                        <div class="col-xxs-12 col-xs-6 mt alternate">
                                            <div class="input-field">
                                                <div id="contentCheck">
                                                    <a href="imprimirDocM.php">
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