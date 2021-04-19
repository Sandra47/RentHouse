<!-- ======slider Area====== -->
<?php
$usuario = new HouseController();
$descrip=$usuario->selectHouseController();
?>
<div class="slider-area">
    <div class="pogoSlider">
        <div class="pogoSlider-slide" data-transition="expandReveal" data-duration="1000"
            style="background-image: url(views/assets/images/gallery/banner1.jpg);">
            <div class="container-slider one">
                <div class="row">
                    <div class="col-md-12">
                        <div class="slider-text-content">
                            <!-- <h3 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp"
                                data-duration="500" data-delay="500">Te bridamos el mejor servicio</h3> -->
                            <h2 class="pogoSlider-slide-element" data-in="slide-left" data-out="slideUp"
                                data-duration="500" data-delay="500">Los mejores Apartamentos en Armenia</h2>
                            <p class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp"
                                data-duration="500" data-delay="500">No importa el clima, no importa qué
                                la
                                situación en la que nos encontramos, si tenemos la perspectiva correcta en la
                                vida, la vida siempre será

                                ¡hermosa!</p>
                            <!-- <a href="#" class="button pogoSlider-slide-element" data-in="slideDown" data-out="slideUp"
                                data-duration="500" data-delay="500">Ofertas Especiales</a> -->
                        </div><!-- /.text-content -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container-slider -->
        </div>
        <div class="pogoSlider-slide" data-transition="expandReveal" data-duration="1000"
            style="background-image:url(views/assets/images/slider-one.png);">
            <div class="container-slider one">
                <div class="row">
                    <div class="col-md-12">
                        <div class="slider-text-content">
                            <h3 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp"
                                data-duration="500" data-delay="500">El buen servicio es nuestra pasión</h3>
                            <h2 class="pogoSlider-slide-element" data-in="slide-left" data-out="slideUp"
                                data-duration="500" data-delay="500">Maravilloso apartamento en Armenia</h2>
                            <p class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp"
                                data-duration="500" data-delay="500">No importa el clima, no importa qué
                                la
                                situación en la que nos encontramos, si tenemos la perspectiva correcta en la
                                vida, la vida siempre será
                                ser
                                ¡hermosa!
                            </p>
                            <!-- <a href="#" class="button pogoSlider-slide-element" data-in="slideDown" data-out="slideUp"
                                data-duration="500" data-delay="500">Ofertas Especiales</a> -->
                        </div><!-- /.text-content -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container-slider -->
        </div>
    </div><!-- .pogoSlider -->
</div><!-- /.slider-area container-fluid -->

<!-- ====== Apartments Area ====== -->

<div class="apartments-area bg-gray-color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-content-one border">
                    <h2 class="title" id="apartments">Casas &amp; Apartamentos</h2>
                    <h5 class="sub-title">Encuentra la Casa o Apartemento Ideal</h5>
                </div><!-- /.Apartments-heading-content -->
            </div>
        </div><!-- /.row -->
        <div class="row">
        <?php      
      
        foreach($descrip as $datos => $value){
            echo"  
            
      
            <div class='col-md-4 col-sm-6 col-xs-6'>
                <div class='apartments-content'>
                    <div class='image-content'>
                        <a href='formulario'><img src='{$value["imageHouse"]}'
                                alt='apartment' /></a>
                    </div><!-- /.image-content -->

                    <div class='text-content'>
                        <div class='top-content'>
                            <h3><a href='apartment-single.html'>{$value["title"]}</a></h3>
                            <span>
                                <i class='fa fa-map-marker'></i>
                                Armenía-Quindío
                            </span>
                        </div><!-- /.top-content -->
                        <div class='bottom-content clearfix'>
                            <div class='meta-bed-room'>
                                <i class='fa fa-bed'></i> {$value["numRooms"]} Alcobas
                            </div>
                            <div class='meta-bath-room'>
                                <i class='fa fa-bath'></i> {$value["numBath"]} Baños
                            </div>
                            <div class='meta-garage-room'>                              
                                <img src='views/assets/images/apartment/garaje.svg' class ='garage'alt='garage'/>  {$value["parking"]} garaje
                            </div>
                            <span class='clearfix'></span>
                            <div class='rent-price pull-left'>
                            {$value["priceAlquiler"]} 
                            </div>
                            
                        </div><!-- /.bottom-content -->
                    </div><!-- /.text-content -->
                </div><!-- /.partments-content -->
            </div><!-- /.col-md-4 -->
      
            ";
       }?>
        </div>
    </div><!-- /.container -->
</div>

    <!-- ====== About Us Area ====== -->
    <div id="about" class="aboutus-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-one">
                        <h2 class="title">Sobre Nosotros</h2>
                        <h5 class="sub-title">Bienvenidos a rentas pereira </h5>
                    </div><!-- /.heading-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-2">
                    <div class="tab-list">
                        <ul class="nav nav-tabs about-tab hidden-xs hidden-sm" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                    data-toggle="tab">Quienes Somos</a>
                            </li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
                                    data-toggle="tab">Terminos &amp; Condiciones</a>
                            </li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab"
                                    data-toggle="tab">Nuestra especialidad</a>
                            </li>
                            <!-- <li role="presentation"><a href="#messages" aria-controls="messages" role="tab"
                                data-toggle="tab">Our specialty</a>
                        </li> -->
                        </ul>
                        <form class="hidden-md hidden-lg">
                            <select class="about-mobile">
                                <option value='0'>Quienes somos</option>
                                <option value='1'>Terminos &amp; Condiciones</option>
                                <option value='2'>Nuestra Especialidad</option>
                                <!-- <option value='3'>O</option> -->
                            </select>
                        </form>
                    </div> <!-- /.tab-list -->
                </div> <!-- /.col-md-2 -->

                <div class="col-md-10">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active row" id="home">
                            <div class="col-md-6">
                                <div class="text-content">
                                    <p>Andrés Garrido es un emprendedor que lleva varios años trabajando en su
                                        proyecto de renta de
                                        casas en Armenia A donde quieres llegar. Andrés viene de una familia de
                                        emprendedores y pensó
                                        que sería buena idea ofrecer un servicio de renta en su ciudad, entonces
                                        realizó una investigación
                                        y la materializó a través de un MVP: abrió el instagram de su negocio y
                                        por
                                        allí empezó a realizar
                                        una pauta segmentada para empezar a encontrar clientes potenciales.</p>

                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="image-content">
                                    <img src="views/assets/images/apartment/apartamento2.jpeg" alt="about" />
                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                        </div> <!-- /.home -->

                        <div role="tabpanel" class="tab-pane fade row" id="profile">
                            <div class="col-md-6">
                                <div class="text-content">
                                    <p>Consulta con nuestros asesores para mas información.</p>

                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="image-content">
                                    <img src="assets/images/gallery/terms.jpeg" alt="about" />
                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                        </div> <!-- /.profile -->

                        <div role="tabpanel" class="tab-pane fade row" id="messages">
                            <div class="col-md-6">
                                <div class="text-content">
                                    <p>Obten el mejor servicio y un inmueble en perfectas condiciones para ti y
                                        para
                                        ti y para tu Familia.
                                    </p>
                                    <ul>
                                        <li>Nuestros >Arendadores ofrecen las mejores instalaciones</li>
                                        <li>No Habrá mejor lugar que nuestros inmuebles</li>
                                        <li>Tu familia te lo agradecerá</li>

                                    </ul>
                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="image-content">
                                    <img src="views/assets/images/gallery/about-image.jpg" alt="about" />
                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                        </div> <!-- /.messages -->
                    </div> <!-- /.tab-content -->
                </div><!-- /.col-md-10 -->
            </div><!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.aboutus-area -->



    <!-- ====== Call To Action ======= -->
    <div class="call-to-action overlay-bg" style="background-color:gray;">
        <div class="container">
            <div class="row tb">
                <div class="col-md-6 col-sm-6 tb-cell">
                    <div class="contact-left-content">
                        <h3>¿Quieres alquilar tu casa?</h3>
                        <h4>Llamanos y pon tu casa en Renta</h4>
                    </div><!-- /.contact-left-content -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 tb-cell">
                    <div class="contact-right-content">
                        <h4><a href="#">+57 301 2323232<span>company@gmail.com</span></a></h4>
                        <a href="#" class="button">Contacto</a>
                    </div><!-- /.contact-right-content -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.call-to-action -->