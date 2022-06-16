<div class="fh5co-hero">
    <div class="fh5co-overlay"></div>
    <div class="fh5co-cover" data-stellar-background-ratio="0.5">
        <div class="desc">
            <div class="container animate-box">
                <div class="row">
                    <div class="col-sm-5 col-md-5">
                        <div class="tabulation ">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#vuelos" aria-controls="vuelos" role="tab" data-toggle="tab">Vuelos</a>
                                </li>
                                <li role="presentation">
                                    <a href="#checkin" aria-controls="checkin" role="tab" data-toggle="tab">Check In</a>
                                </li>
                                <!-- <li role="presentation">
                                    <a href="#packages" aria-controls="packages" role="tab" data-toggle="tab">Packages</a>
                                </li> -->
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="vuelos">
                                    <div class="row">
                                        <div class="col-xxs-12 col-xs-6 mt">
                                            <div class="input-field">
                                                <label for="desde">Desde:</label>
                                                <select name="desde" class="cs-select cs-skin-border" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();' required>
                                                    <option value="" disabled selected>Origen</option>
                                                    <option value="cochabamba">Cochabamba</option>
                                                    <option value="la paz">La Paz</option>
                                                    <option value="potosi">Potosi</option>
                                                    <option value="santa cruz">Santa Cruz</option>
                                                    <option value="sucre">Sucre</option>
                                                    <option value="trinidad">Trinidad</option>
                                                    <option value="uyuni">Uyuni</option>
                                                    <option value="lima">Lima</option>
                                                    <option value="sao paulo">Sao Paulo</option>
                                                    <option value="buenos aires">Buenos Aires</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xxs-12 col-xs-6 mt">
                                            <div class="input-field">
                                                <label for="hasta">A:</label>
                                                <select name="hasta" class="cs-select cs-skin-border" required>
                                                    <option value="" disabled selected>Destino</option>
                                                    <option value="cochabamba">Cochabamba</option>
                                                    <option value="la paz">La Paz</option>
                                                    <option value="potosi">Potosi</option>
                                                    <option value="santa cruz">Santa Cruz</option>
                                                    <option value="sucre">Sucre</option>
                                                    <option value="trinidad">Trinidad</option>
                                                    <option value="uyuni">Uyuni</option>
                                                    <option value="lima">Lima</option>
                                                    <option value="sao paulo">Sao Paulo</option>
                                                    <option value="buenos aires">Buenos Aires</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- <div class="col-xxs-12 col-xs-6 mt alternate">
                                            <div class="input-field">
                                                <input class="ac-input" id="ac-1" name="accordion-1" type="checkbox" />
                                                <label class="ac-label" for="ac-1">HTML and CSS only<i></i></label>

                                                <button type="button" onclick="mostrarPremio();">Ver premio</button>

                                                <div id="premio">
                                                    <p>Te ganaste un pasaje a Cusco</p>
                                                    <a href="javascript:void(0);" onclick="ocultarPremio();">No me gusta, no lo quiero!</a>
                                                </div>

                                                <div id="triste">
                                                    <h3>:'(</h3>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- <div class="col-xxs-12 col-xs-6 mt alternate">
                                            <div class="input-field">
                                                <label for="date-start">Solo ida:</label>
                                                <input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()" />
                                                <div id="content" style="display: none;">
                                                    contenido del div escondido<br />
                                                    contenido del div escondido<br />
                                                    contenido del div escondido<br />
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="col-xxs-12 col-xs-6 mt alternate">
                                            <div class="input-field">
                                                <label for="date-start">Ida y vuelta:</label>
                                                <input type="radio" name="check" id="check" value="1" onchange="javascript:mostrarContenido()" onclick="limpiar()" />
                                            </div>
                                        </div>
                                        <div class="col-xxs-12 col-xs-6 mt alternate">
                                            <div class="input-field">
                                                <label for="date-start">Solo ida:</label>
                                                <input type="radio" name="check" id="check" value="1" onchange="javascript:mostrarContenido()" onclick="limpiar()" />
                                            </div>
                                        </div>

                                        <div class="col-xxs-12 col-xs-6 mt alternate">
                                            <div class="input-field">
                                                <label for="date-start">Salida:</label>
                                                <input name="fechaSalida" type="text" class="form-control" id="date-start" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-xxs-12 col-xs-6 mt alternate">
                                            <div class="input-field">
                                                <div id="content" style="display: none;">
                                                    <label for="date-end">Regreso:</label>
                                                    <input name="fechaRegreso" type="text" class="form-control" id="date-end" placeholder="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mt">
                                            <section>
                                                <label for="class">Clase:</label>
                                                <select name="clase" class="cs-select cs-skin-border" required>
                                                    <option value="" disabled selected>Clase</option>
                                                    <option value="economica">Economica</option>
                                                    <option value="primera clase">Primera clase</option>
                                                    <option value="ejecutiva">Ejecutiva</option>
                                                </select>
                                            </section>
                                        </div>
                                        <div class="col-xxs-12 col-xs-6 mt">
                                            <section>
                                                <label for="class">Adultos:</label>
                                                <select name="adulto" class="cs-select cs-skin-border" required>
                                                    <option value="" disabled selected>1</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </section>
                                        </div>
                                        <div class="col-xxs-12 col-xs-6 mt">
                                            <section>
                                                <label for="class">Niños:</label>
                                                <select name="niño" class="cs-select cs-skin-border" required>
                                                    <option value="" disabled selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </section>
                                        </div>
                                        <div class="col-xs-12">
                                            <input type="submit" class="btn btn-primary btn-block" value="Buscar vuelo">
                                        </div>
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane" id="checkin">
                                                <div class="row">
                                                    <div class="col-xxs-12 col-xs-12 mt">
                                                    <div class="input-field">
                                                        <p style="color: black;" >Realízalo entre 48 y 1 hora antes del vuelo.</p>
                                                        <p style="color: black;">	Ten a mano tus documentos de viaje.</p>
                                                        <p style="color: black;">Ten lista tu impresora con hojas de papel tamaño carta.</p>
                                                    </div>
                                                    </div>
                                                    <div class="col-xxs-12 col-xs-6 mt alternate">
                                            <div class="input-field">
                                                <input type="checkbox" name="check" id="checkC" value="1" onchange="javascript:mostrarContenidoCheck()" onclick="limpiarCheck()" />
                                                <label for="date-start">Estoy de acuerdo con los terminos y condiciones</label>
                                            </div>
                                        </div>
                                        <div class="col-xxs-12 col-xs-6 mt alternate">
                                            <div class="input-field">
                                                <div id="contentCheck" style="display: none;">
                                                <a style="color: black;" href="checkIn.php">
                                                <input type="submit" class="btn btn-primary btn-block" id="date-endCheck" ></a>
                                                
                                                 </input>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="desc2 ">
                        <div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
                            <h2>Aeropuerto Internacional de Univalle</h2>
                            <h3>Viaja a traves del mundo</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>