<?php require_once "./layout/head.php" ?>
<div class="column" id="content" style="display:none">
    <div class="ui grid">
        <div class="row">
            <h1 class="ui huge header">Registrar vuelos</h1>
        </div>
        <div class="ui horizontal divider"> Ingresa los datos requeridos para el registro de un vuelo</div>
        <div class="row">
            <!-- <div class="columns">
    <div class="column is-one-third">
        <h2 class="is-size-2">Nuevo producto</h2> -->
            <form action="guardar_producto.php" method="post">
                <div class="field">
                    <label for="codigovuelo">Codigo Vuelo</label>
                    <div class="control">
                        <input required id="codigovuelo" class="input" type="text" placeholder="Codigo vuelo" name="codigovuelo">
                    </div>
                </div>
                <div class="field">
                    <label for="origen">Origen</label>
                    <div class="control">
                        <input required id="origen" class="input" type="text" placeholder="Origen" name="origen">
                    </div>
                </div>
                <div class="field">
                    <label for="destino">Destino</label>
                    <div class="control">
                        <input required id="destino" class="input" type="text" placeholder="Destino" name="destino">
                    </div>
                </div>
                <div class="field">
                    <label for="fechasalida">Fecha Salida</label>
                    <div class="control">
                        <input required id="fechasalida" class="input" type="text" placeholder="Fecha Salida" name="fechasalida">
                    </div>
                </div>
                <div class="field">
                    <label for="fecharegreso">Fecha Regreso</label>
                    <div class="control">
                        <input required id="fecharegreso" class="input" type="text" placeholder="Fecha Regreso" name="fecharegreso">
                    </div>
                </div>
                <div class="field">
                    <label for="horasalida">Hora Salida</label>
                    <div class="control">
                        <input required id="horasalida" class="input" type="time" placeholder="Hora Regreso" name="horasalida">
                    </div>
                </div>
                <div class="field">
                    <label for="horallegada">Hora Llegada</label>
                    <div class="control">
                        <input required id="horallegada" class="input" type="time" placeholder="Hora Llegada" name="horallegada">
                    </div>
                </div>
                <!-- <div class="field">
                    <label for="descripcion">Descripción</label>
                    <div class="control">
                        <textarea name="descripcion" class="textarea" id="descripcion" cols="30" rows="5" placeholder="Descripción" required></textarea>
                    </div>
                </div> -->
                <!-- <div class="field">
                    <label for="precio">Precio</label>
                    <div class="control">
                        <input required id="precio" name="precio" class="input" type="number" placeholder="Precio">
                    </div>
                </div> -->
                <div class="field">
                    <div class="control">
                        <button class="button is-success">Guardar</button>
                        <a href="vuelos.php" class="button is-warning">Volver</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</div>
</div>
</body>

</html>