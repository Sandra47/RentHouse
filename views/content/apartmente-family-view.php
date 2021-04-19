<?php

$casa = casaController::MostrarcasaControler();
// echo'<pre>',print_r($casa); echo'</pre>';

?>
<!-- ====== Page Header ====== -->
<div class="page-header default-template-gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">casa</h2>
                <p class="page-description">Mas Detalles sobre la Casa</p>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row-->
    </div><!-- /.container-fluid -->
</div><!-- /.page-header -->

<!-- ====== Breadcrumbs Area====== -->
<div class="breadcrumbs-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <span class="first-item">
                        <a href="homepage">Home</a></span>
                    <span class="separator">&gt;</span>
                    <span class="last-item">Casa</span>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.breadcrumbs-area -->

<!-- ====== Apartments-Single-Area ======= -->
<div class="apartment-single-area">
    <div class="container">



        <div class="row">
            <?php foreach ($casa as $key => $value) : ?>


                <div class="col-md-8">
                    <div class="corousel-gallery-content">
                        <div class="gallery">
                            <div class="full-view owl-carousel">
                                <a class="item image-pop-up" href="views/assets/images/apartment/apartament-family/2house-family.jpg">
                                    <img src="views/assets/images/apartment/apartament-family/2house-family.jpg" alt="corousel">
                                </a>


                            </div>
                        </div> <!-- /.gallery-two -->
                    </div> <!-- /.corousel-gallery-content -->



                    <div class="family-apartment-content mobile-extend">
                        <div class="tb">

                            <div class="tb-cell">
                                <h3 class="apartment-title"><?php echo $value["title"] ?></h3>
                            </div>
                            <!-- /.tb-cell 
                         <div class="tb-cell">
                            <p class="pull-right rent">Valor de la Renta: $2.000.000</p> -->
                        </div>
                    </div><!-- /.tb -->
                    <div class="price-details">
                        <h3>Detalles del Precio</h3>
                        <ul>
                            <li><span>Valor de la Renta:</span> $ <?php echo $value["priceAlquiler"] ?> </li>
                            <li><span>Servio de internet:</span> <?php echo $value["serviceInternet"] ?> </li>
                            <li><span>Servios Adicionales:</span> <?php echo $value["aditionalService"] ?></li>

                        </ul>
                    </div><!-- /.price -->

                    <div class="property-details">
                        <h3>Detalles de la propiedad</h3>
                        <ul>
                            <li><span>Dirrecion:</span> <?php echo $value["location"] ?> </li>
                            <li><span>Descripcion :</span><?php echo $value["descripcion"] ?></li>
                            <li><span>Numero de cuarto:</span><?php echo $value["numRooms"] ?></li>
                            <li><span>Numero de baño:</span> <?php echo $value["numBath"] ?> </li>
                            <li><span>Parqueadero:</span> <?php echo $value["parking"] ?></li>
                            <li><span>Capacidad:</span> <?php echo $value["capacity"] ?></li>
                            <li><span>Fecha Inicial de Disponibilidad:</span> <?php echo $value["starDateAvail"] ?></li>
                            <li><span>Fecha Final de Disponibilidad:</span> <?php echo $value["endDateAvail"] ?> </li>
                        </ul>
                    </div>

                
                    <!--/.family-apartment-content -->
                    <div class="hidden-md hidden-lg text-center extend-btn">
                            <span class="extend-icon">
                                <i class="fa fa-angle-down"></i>
                            </span>         
                            <div class="col-md-4">
                                <div class="apartment-sidebar">
                                    <div class="widget_rental_search clerafix">
                                        <div class="form-border gradient-border">

                                        </div><!-- /.form-border -->
                                    </div><!-- /.widget_rental_search -->

                                    <div class="apartments-content seven post clerafix">
                                        <div class="image-content">

                                        </div><!-- /.image-content -->
                                    </div><!-- /.partments-content -->
                                </div><!-- /.apartment-sidebar -->
                            </div> <!-- .col-md-4 -->
                        </div>
                </div> <!-- /.col-md-8 -->
            <?php endforeach ?>
            <div class="col-md-4">
                <div class="apartment-sidebar">
                    <div class="widget_rental_search clerafix">
                        <div class="form-border gradient-border">
                            <?PHP include "formularioalquilar.php"?>
                        </div><!-- /.form-border -->
                    </div><!-- /.widget_rental_search -->                               
                </div><!-- /.apartment-sidebar -->
            </div> <!-- .col-md-4 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.appartment-single-area -->