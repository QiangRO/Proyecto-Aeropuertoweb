<?php require_once "./layout/headcheck.php"; ?>
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
                        <div class="row" style="padding-left: 250px;">
                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                <div class="input-field">
                                    <form id="contact-form" method="post" action="">
                                        Codigo del avion:
                                        <input style="padding-left: 250px;" type="text" name="codigo" class="form-control" placeholder="Ingrese su codigo:" >
                                        <br>Nombre del pasajero:
                                        <input style="padding-left: 250px;" type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre:" >
                                        <br>Apellido del pasajero:
                                        <input style="padding-left: 250px;" type="text" name="apellido" class="form-control" placeholder="Ingrese su apellido:" >
                                        <br>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <input type="submit" class="btn btn-primary btn-block" value="IDENTFICAR">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-bral">
            <div>
                <input class="ac-input" id="ac-1" name="accordion-1" type="checkbox" />
                <label class="ac-label" for="ac-1">Informacion<i></i></label>
                <div class="article ac-content">
                    <div class="col-md-12  text-center">
                        <h2 class="heading-title">
                            </h2s>
                    </div>
                    <div class="col-md-6 ">
                        <div class="row2">
                            <div class="col-md-12">
                                <section class="ftco-section">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-wrap">
                                                    <table class="table">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th>Codigo de vuelo</th>
                                                                <th>Nombre </th>
                                                                <th>Apellido</th>
                                                                <th>Asiento</th>
                                                                <th>&nbsp;</th>
                                                                <th>Boleto</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="alert" role="alert">
                                                                <th scope="row">001</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>A13</td>
                                                                <td><input type="submit" class="btn" value="IDENTFICAR"></td>
                                                                <td>
                                                                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                                                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="col-xs-12">
                                    <a href="contaccto.php"><input type="submit" class="btn btn-primary btn-block" value="Buscar vuelo"></a>
                                </div>

                                <div class="col-xs-12" style="padding-left: 250px;">
                                    <input type="submit" class="btn btn-primary btn-block" value="ACEPTAR">
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