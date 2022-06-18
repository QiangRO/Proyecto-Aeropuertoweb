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
                                <?php echo $producto->nombre ?>
                            </p>
                        </header>
                        <div class="card-content">
                            <div class="content">
                                <?php echo $producto->descripcion ?>
                            </div>
                            <h1 class="is-size-3"><?php echo number_format($producto->precio, 2) ?> BOB.</h1>
                            <?php if (productoYaEstaEnCarrito($producto->id)) { ?>
                                <form action="eliminar_del_carrito.php" method="post">
                                    <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                                    <span class="button is-success">
                                        <i class="fa fa-check"></i>&nbsp;En el carrito
                                    </span>
                                    <button class="button is-danger">
                                        <i class="fa fa-trash-o"></i>&nbsp;Quitar
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
                                        <i class="fa fa-cart-plus"></i>&nbsp;Agregar al carrito
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