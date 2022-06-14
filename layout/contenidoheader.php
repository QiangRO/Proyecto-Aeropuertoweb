<div class="fh5co-hero">
    <div class="fh5co-overlay"></div>
    <div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
        <div class="desc">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-md-5">
                        <div class="tabulation animate-box">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Vuelos</a>
                                </li>
                                <li role="presentation">
                                    <a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">Hoteles</a>
                                </li>
                                <li role="presentation">
                                    <a href="#packages" aria-controls="packages" role="tab" data-toggle="tab">Paquetes</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="flights">
                                    <div class="row">
                                        <div class="col-xxs-12 col-xs-6 mt">
                                            <div class="input-field">
                                                <label for="from">Desde:</label>
                                                <select class="cs-select cs-skin-border" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();' required>
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
                                                <label for="from">A:</label>
                                                <select class="cs-select cs-skin-border" required>
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
                                        <div class="col-xxs-12 col-xs-6 mt alternate">
                                            <div class="input-field">
                                                <label for="date-start">Salida:</label>
                                                <input type="text" class="form-control" id="date-start" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-xxs-12 col-xs-6 mt alternate">
                                            <div class="input-field">
                                                <label for="date-end">Regreso:</label>
                                                <input type="text" class="form-control" id="date-end" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mt">
                                            <section>
                                                <label for="class">Clase:</label>
                                                <select class="cs-select cs-skin-border" required>
                                                    <option value="" disabled selected>Clase</option>
                                                    <option value="economy">Economica</option>
                                                    <option value="first">Primera clase</option>
                                                    <option value="business">Ejecutiva</option>
                                                </select>
                                            </section>
                                        </div>
                                        <div class="col-xxs-12 col-xs-6 mt">
                                            <section>
                                                <label for="class">Adultos:</label>
                                                <select class="cs-select cs-skin-border" required>
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
                                                <select class="cs-select cs-skin-border" required>
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

                                <div role="tabpanel" class="tab-pane" id="hotels">
                                    <div class="row">
                                        <div class="col-xxs-12 col-xs-12 mt">
                                            <div class="input-field">
                                                <label for="from">Ciudad:</label>
                                                <select class="cs-select cs-skin-border" required>
                                                    <option value="" disabled selected>Ciudad</option>
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
                                        <div class="col-xxs-12 col-xs-6 mt alternate">
                                            <div class="input-field">
                                                <label for="date-start">Llegada:</label>
                                                <input type="text" class="form-control" id="date-start" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-xxs-12 col-xs-6 mt alternate">
                                            <div class="input-field">
                                                <label for="date-end">Salida:</label>
                                                <input type="text" class="form-control" id="date-end" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mt">
                                            <section>
                                                <label for="class">Habitaciones:</label>
                                                <select class="cs-select cs-skin-border" required>
                                                    <option value="" disabled selected>1</option>
                                                    <option value="economy">1</option>
                                                    <option value="first">2</option>
                                                    <option value="business">3</option>
                                                </select>
                                            </section>
                                        </div>
                                        <div class="col-xxs-12 col-xs-6 mt">
                                            <section>
                                                <label for="class">Adultos:</label>
                                                <select class="cs-select cs-skin-border" required>
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
                                                <select class="cs-select cs-skin-border" required>
                                                    <option value="" disabled selected>1</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </section>
                                        </div>
                                        <div class="col-xs-12">
                                            <input type="submit" class="btn btn-primary btn-block" value="Buscar hotel">
                                        </div>
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane" id="packages">
                                    <div class="row">
                                        <div class="col-xxs-12 col-xs-6 mt">
                                            <div class="input-field">
                                                <label for="from">Desde:</label>
                                                <select class="cs-select cs-skin-border" required>
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
                                                <label for="from">A:</label>
                                                <select class="cs-select cs-skin-border" required>
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
                                        <div class="col-xxs-12 col-xs-6 mt alternate">
                                            <div class="input-field">
                                                <label for="date-start">Llegada:</label>
                                                <input type="text" class="form-control" id="date-start" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-xxs-12 col-xs-6 mt alternate">
                                            <div class="input-field">
                                                <label for="date-end">Regreso:</label>
                                                <input type="text" class="form-control" id="date-end" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mt">
                                            <section>
                                                <label for="class">Habitaciones:</label>
                                                <select class="cs-select cs-skin-border" required>
                                                    <option value="" disabled selected>1</option>
                                                    <option value="economy">1</option>
                                                    <option value="first">2</option>
                                                    <option value="business">3</option>
                                                </select>
                                            </section>
                                        </div>
                                        <div class="col-xxs-12 col-xs-6 mt">
                                            <section>
                                                <label for="class">Adultos:</label>
                                                <select class="cs-select cs-skin-border" required>
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
                                                <select class="cs-select cs-skin-border" required>
                                                    <option value="" disabled selected>1</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </section>
                                        </div>
                                        <div class="col-xs-12">
                                            <input type="submit" class="btn btn-primary btn-block" value="Buscar paquete">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="desc2 animate-box">
                        <div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
                            <h2>Aeropuerto Internacional de Univalle</h2>
                            <h3>Viaja a traves del mundo</h3>
                            <!-- <span class="price">500 BOB.</span> -->
                            <!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>