<?php
$usuario = new HouseController();
$usuario->insertHouseController();
?>
<div class="contenedor">
    <!--  class="apartment-sidebar"> -->

    <div class="widget_rental_search clerafix">
        <div class="form-border gradient-border">
            <form action="" method="$_POST" class="advance_search_query booking-form">
                <div class="form-bg seven">
                    <div class="form-container2">
                        <h2 class="form-title2">Registrar Inmueble para Rentar</h2><br>
                        <div class="form-group2">
                            <label>Nombre para tu casa</label><br>
                            <input type="fullName" name="title" placeholder="Ej: casa campestre"><br><br>
                        </div><!-- /.form-group -->
                        <div class="form-group2">
                            <label>Descripción</label><br>
                            <textarea name="description" rows="10"
                                cols="20">Has una breve descripción del inmueble</textarea><br>
                        </div><!-- /.form-group -->
                        <div class="form-group2">
                            <label>Imagenes</label>
                            <textarea name="imageHouse" rows="05"
                                cols="20">Carga fotos del inmueble a registrar</textarea>
                        </div><!-- /.form-group -->
                        <div class=".styled-select select">
                            <label>Número de Habitaciones</label>
                            <select name=" numRooms" id="personas">
                                <option value="%1%"> 1 </option>
                                <option value="2"> 2 </option>
                                <option value="3"> 3 </option>
                                <option value="4"> 4 </option>
                                <option value="5"> 5 </option>
                                <option value="6"> 6 </option>
                                <option value="7"> 7 </option>
                                <option value="8"> 8 </option>

                            </select><br>

                        </div><!-- /.form-group -->
                        <div class="form-group2">
                            <label>Número de Baños </label>
                            <select name="numBath" id="personas"><br>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select><br><br>

                            <label>Parqueadero</label>
                            <input type="fullName" name="parking" placeholder="Ej: 1">
                            <br> <label>Internet</label>
                            <input type="fullName" name="serviceInternet" placeholder="Ej: Si">

                        </div><!-- /.form-group -->
                        <div class="form-group2">
                            <label>Servicios Adicionales</label>
                            <textarea name="aditionalServices" rows="05" cols="20">Ej:piscina</textarea>
                        </div><!-- /.form-group -->
                        <div class="form-group2">
                            <label>Precio</label>
                            <input type="priceAlquiler" name="fullName" placeholder="Ej: $250.000">
                        </div><!-- /.form-group -->
                        <div class="form-group2">
                            <label>Dirección</label>
                            <input type="location" name="fullName" placeholder="ej: Armenia">
                        </div><!-- /.form-group -->

                        <div class="form-group2">
                            <label>Fecha llegada</label>
                            <input type="date" name="starDateAvail"><br><br>
                            <label>Fecha salida</label>
                            <input type="date" name="endDateAvail">

                        </div><!-- /.form-group -->
                    </div><!-- /.form-group -->
                    <div>
                        <label>Capacidad de personas </label>
                        <select name="capacity" id="personas">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option valu e="4">4</option>
                        </select>
                    </div>

                    <div class="form-group2">
                        <p class="fieldset">
                            <input type="checkbox" name="dpr" id="accept-terms">
                            <label for="accept-terms">Aceptas los<a href="">Terminos</a> y condiciones</label>
                        </p>
                    </div><!-- /.form-group -->
                    <div class="form-group2">
                        <button type="submit" class="button default-template-gradient button-radius">Aceptar</button>
                    </div><!-- /.form-group -->
                </div><!-- /.form-content -->
        </div><!-- /.form-bg -->
        </form> <!-- /.advance_search_query -->
    </div><!-- /.form-border -->
</div><!-- /.widget_rental_search -->


</div><!-- /.apartment-sidebar -->
</div> <!-- .col-md-4 -->
</div> <!-- /.row -->
</div> <!-- /.container -->
</div> <!-- /.appartment-single-area -->