<?php include_once "headBuscarVuelos.php" ?>
<?php
include_once "funciones.php";
$productos = obtenerProductos();
?>
<div id="fh5co-tours" class="fh5co-section-gray">
    <div class="container">
        <div class="row2 row-bottom-padded-md">
            <div class="col-md-12  text-center">
                <h2 class="heading-title2 tituloh2">COMPRA DE BOLETOS</h2>
            </div>
        </div>
        <?php foreach ($productos as $producto) { ?>
            <div class="columns">
                <div class="column is-full">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title is-size-4">
                                <?php echo $producto->origen ?> -- <?php echo $producto->destino ?> con salida: <?php echo $producto->fechasalida ?>
                            </p>
                        </header>
                        <div class="card-content is-primary">
                            <div class="content">
                                <table class="ui single line striped selectable center aligned table">
                                    <thead class=" is-size-6">
                                        <tr>
                                            <th>HORA SALIDA</th>
                                            <th>TIEMPO DE VIAJE</th>
                                            <th>HORA LLEGADA</th>
                                        </tr>
                                    </thead>
                                    <tbody class="is-size-5">
                                        <tr>
                                            <td><?php echo $producto->horasalida ?></td>
                                            <td><?php
                                                $to_time = strtotime($producto->horasalida);
                                                $from_time = strtotime($producto->horallegada);
                                                $minutes = round(abs($to_time - $from_time) / 60, 2);
                                                echo ("Tiempo total: $minutes minutos."); ?>
                                            <td>
                                            <td><?php echo $producto->horallegada ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h1 class="is-size-3"><?php echo number_format($producto->precio, 2) ?> BOB.</h1>
                            <?php if (productoYaEstaEnCarrito($producto->id)) { ?>
                                <form action="eliminar_del_carrito.php" method="post">
                                    <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                                    <span class="button is-link"> 
                                        <i class="fa fa-check"></i>&nbsp;Adquirido
                                    </span>
                                    <button class="button is-danger is-outlined">
                                        <i class="fa fa-trash-o "></i>&nbsp;Quitar
                                    </button>
                                    <!-- <div class="buttons">
                                <a href="ver_carrito.php" class="button is-success">
                                    <strong>Ver carrito <?php
                                                        include_once "funciones.php";
                                                        $conteo = count(obtenerIdsDeProductosEnCarrito());
                                                        if ($conteo > 0) {
                                                            printf("(%d)", $conteo);
                                                        }
                                                        ?>&nbsp;<i class="fa fa-shopping-cart"></i></strong>
                                </a>
                            </div> -->
                                </form>
                            <?php } else { ?>
                                <form action="agregar_al_carrito.php" method="post">
                                    <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                                    <button class="button is-primary">
                                        <i class="fa fa-cart-plus"></i>&nbsp;Adquirir
                                    </button>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php include_once "footer.php" ?>