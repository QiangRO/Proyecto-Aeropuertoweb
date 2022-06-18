<?php include_once "headBuscarVuelos.php" ?>
<?php
include_once "funciones.php";
$productos = obtenerProductosEnCarrito(); ?>
<div id="fh5co-tours" class="fh5co-section-gray">
    <div class="container">
        <div class="row2 row-bottom-padded-md">
            <div class="col-md-12  text-center">
                <h2 class="heading-title2 tituloh2">PAGO DE BOLETOS</h2>
            </div>
        </div>
        <?php
        if (count($productos) <= 0) {
        ?>
            <section class="hero is-info">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title text-center">
                            Todavia no hay boletos agregados, por favor agregue alguno.
                        </h1>
                        <h2 class="subtitle text-center">
                            Visita el apartado de boletos para agregar alguno
                        </h2>
                        <center>
                            <a href="tienda.php" class="button is-danger">Agregar Boletos</a>
                        </center>
                    </div>
                </div>
            </section>
        <?php } else { ?>
            <div class="columns">
                <div class="column">
                    <h2 class="is-size-2">Mi carrito de compras</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Origen</th>
                                <th>Destino</th>
                                <th>Fecha de Salida</th>
                                <th>Fecha de Regreso</th>
                                <th>Hora Salida</th>
                                <th>Hora Llegada</th>
                                <th>Precio</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total = 0;
                            foreach ($productos as $producto) {
                                $total += $producto->precio;
                            ?>
                                <tr>
                                    <td><?php echo $producto->origen ?></td>
                                    <td><?php echo $producto->destino ?></td>
                                    <td><?php echo $producto->fechasalida ?></td>
                                    <td><?php echo $producto->fecharegreso ?></td>
                                    <td><?php echo $producto->horasalida ?></td>
                                    <td><?php echo $producto->horallegada ?></td>
                                    <td><?php echo number_format($producto->precio, 2) ?> BOB.</td>
                                    <td>
                                        <form action="eliminar_del_carrito.php" method="post">
                                            <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                                            <input type="hidden" name="redireccionar_carrito">
                                            <button class="button is-danger">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </form>
                                    </td>
                                <?php } ?>
                                </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2" class="is-size-4 has-text-right"><strong>Total</strong></td>
                                <td colspan="2" class="is-size-4">
                                    <?php echo number_format($total, 2) ?> BOB.
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <!-- <a href="terminar_compra.php" class="btn btn-primary"><i class="fa fa-check"></i>&nbsp;Confirmar compra</a> -->

                    <div class="col-xs-12">
                        <a href="terminar_compra.php"><input type="submit" class="btn btn-primary btn-block" value="Confirmar compra"></a>
                    </div>

                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php include_once "footer.php" ?>