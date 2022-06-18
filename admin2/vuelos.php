<?php require_once "./layout/head.php" ?>
<?php
include_once "funciones.php";
$productos = obtenerProductos();
?>
<div class="column" id="content" style="display:none">
  <div class="ui grid">
    <div class="row">
      <h1 class="ui huge header">Vuelos</h1>
    </div>
    <div class="ui horizontal divider"> Todos los vuelos disponibles para el usuario</div>

    <div class="row">
      <a class="button is-success" href="agregar_vuelo.php">Nuevo&nbsp;<i class="fa fa-plus"></i></a>
      <table class="ui single line striped selectable center aligned  table">
        <thead>
          <tr>
            <th>Codigo de vuelos</th>
            <th>Origen</th>
            <th>Destino</th>
            <th>Fecha de Salida</th>
            <th>Fecha de Regreso</th>
            <th>Hora Salida</th>
            <th>Hora Llegada</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($productos as $producto) { ?>
            <tr>
              <td><?php echo $producto->codigovuelo ?></td>
              <td><?php echo $producto->origen ?></td>
              <td><?php echo $producto->destino ?></td>
              <td><?php echo $producto->fechasalida ?></td>
              <td><?php echo $producto->fecharegreso ?></td>
              <td><?php echo $producto->horasalida ?></td>
              <td><?php echo $producto->horallegada ?></td>
              <td>
                <form action="eliminar_vuelo.php" method="post">
                  <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                  <button class="button is-danger">
                    <i class="fa fa-trash-o"></i>
                  </button>
                </form>
              </td>
            <?php } ?>
            </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
</div>
</body>

</html>