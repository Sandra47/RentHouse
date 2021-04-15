<?php
$usuario = new HouseController();
$usuario->insertHouseController(); 
?> 

<!-- 
<div class="col-md-4">
    <div class="apartment-sidebar">
        <div class="widget_rental_search clerafix"> -->
            <!-- <div class="form-border gradient-border"> -->
                <form action="booking.html" method="POST" class="advance_search_query booking-form">
                    <div class="form-bg seven">
                        <div class="form-container">
                            <h2 class="form-title">Registrar Inmueble para Rentar</h2>
                            <div class="form-group">
                                <label>Nombre para tu casa</label>
                                <input type="text" name="title" placeholder="titulo  de la casa">
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>Descripción</label>
                                <textarea name="description" rows="10" cols="50">Descripción de la casa</textarea>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>Imagen Casa</label>
                                <textarea name="imageHouse" rows="10" cols="50">Descripción de la casa</textarea>
                            </div><!-- /.form-group -->
                            
                            <div class="form-group">
                                <label>Cantidad de Habitaciones</label>
                                <select name="numRooms" id="personas">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                <label>Cantidad de Baños</label>
                                <select name="numBath" id="personas">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                <label>Parqueadero</label>
                                <input type="title" name="parking" placeholder="parqueadero">
                                <label>Internet </label>
                                <input type="title" name="serviceInternet" placeholder="internet">



                                


                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>Servicios Adicionales</label>
                                <textarea name="aditionalServices" rows="05" cols="20">servicios</textarea>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>Precio de Alquiler por noche</label>
                                <input type="fullName" name="priceAlquiler" placeholder="$Valor de la casa por noche">
                            </div><!-- /.form-group -->
                            <div class="form-group">
                            <label>Dirección</label>
                            <input type="fullName" name="location" placeholder="Ubicación del inmueble">
                           </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>Fecha llegada</label>
                                <input type="date" name="startDateAvail">
                                <label>Fecha salida</label>
                                <input type="date" name="endDateAvail">

                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>Capacidad de personas</label>
                                <select name="capacity" id="personas">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>

                            </div><!-- /.form-group -->


                        </div><!-- /.form-group -->
                       

                        <div class="form-group">
                            <p class="fieldset">
                                <input type="checkbox" name="dpr" id="accept-terms">
                                <label for="accept-terms">Aceptas los<a href="">Terminos</a> y condiciones</label>
                            </p>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <button type="submit"
                                class="button default-template-gradient button-radius">Aceptar</button>
                        </div><!-- /.form-group -->
                    </div><!-- /.form-content -->
            
                </form> <!-- /.advance_search_query -->
        
        
 
    
    
