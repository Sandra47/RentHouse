<!doctype html>
<html class="no-js" lang="en">

<head>
	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Specific Meta
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="glimmer is a modern presentation HTML5 Blog template.">
	<meta name="keywords" content="HTML5, Template, Design, Development, Blog" />
	<meta name="author" content="">

	<!-- Titles
	================================================== -->
	<title>Apartmento- Individual</title>

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="assets/images/house-logo.png">
	<link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

	<!-- Custom Font
	================================================== -->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i%7cPoppins:300,400,500,600,700" rel="stylesheet">    
	
	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/colors.css">
	<link rel="stylesheet" href="style.css">
	<!-- Modernizr
	================================================== -->
	<script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- ====== Header Mobile area ====== -->
    <header class="mobile-header-area bg-nero hidden-md hidden-lg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 tb">
                    <div class="mobile-header-block">
                        <div class="menu-area tb-cell">
                            <!--Mobile Main Menu-->
                            <div class="mobile-menu-main hidden-md hidden-lg">
                                <div class="menucontent overlaybg"></div>
                                <div class="menuexpandermain slideRight">
                                    <a id="navtoggole-main" class="animated-arrow slideLeft menuclose">
                                        <span></span>
                                    </a>
                                    <span id="menu-marker"></span>
                                </div><!--/.menuexpandermain-->
                                <div id="mobile-main-nav" class="main-navigation slideLeft">
                                    <div class="menu-wrapper">
                                        <div id="main-mobile-container" class="menu-content clearfix"></div>
                                        <div class="left-content">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="fa fa-phone-square"></i>Call Us - 01623 030020</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="cd-signin"><i class="fa fa-address-book"></i>Login / Register</a>
                                                </li>
                                            </ul>
                                        </div><!-- /.left-content -->
                                    </div>
                                </div><!--/#mobile-main-nav-->
                            </div><!--/.mobile-menu-main-->
                        </div><!-- /.menu-area -->
                        <div class="logo-area tb-cell">
                            <div class="site-logo">
                                <a href="index.html">
                                    <img src="assets/images/logo.png" alt="site-logo" />
                                </a>
                            </div><!-- /.site-logo -->
                        </div><!-- /.logo-area -->
                        <div class="search-block tb-cell">
                            <a href="#" class="main-search"><i class="fa fa-search"></i></a>
                        </div><!-- /.search-block -->
                        <div class="additional-content tb-cell">
                            <a href="#" class="trigger-overlay"><i class="fa fa-sliders"></i></a>
                        </div><!-- /.additional-content -->
                    </div><!-- /.mobile-header-block -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </header><!-- /.mobile-header-area --> 

   <!-- ====== Header Top Area ====== -->
   <header class="header-area bg-nero hidden-xs hidden-sm">
       <?php include 'modules/menu.php'?>
    </header><!-- /.head-area -->

<!-- ====== Header Bottom Content ====== -->
<header class="header-bottom-content bg-nero hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-10">
                <nav id="main-nav" class="site-navigation top-navigation">
                    <div class="menu-wrapper">
                        <div class="menu-content">
                            <ul class="menu-list">
                                <li>
                                    <a href="#">Inicio</a>
                                    <!-- <ul class="sub-menu">
                                        <li>
                                            <a href="index.html">Home Layout </a>
                                        </li>
                                        <li>

                                    </ul> -->
                                </li>

                                <li>
                                    <a href="#">Inmuebles</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="apartmente-family.html">Casas</a>
                                        </li>
                                        <li>
                                            <a href="apartment-single.html">Apartamentos</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Galeria</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="#galeria">Galeria</a>
                                        </li>
                                        <!-- <li>
                                            <a href="404.html">404</a>
                                        </li> -->
                                    </ul>
                                </li>
                                <li>
                                    <a href="#about">Sobre Nosotros</a>
                                </li>
                                <li>

                                <li>
                                    <a href="#contact">Contacto</a>
                                </li>
                            </ul> <!-- /.menu-list -->
                        </div> <!-- /.menu-content-->
                    </div> <!-- /.menu-wrapper -->
                </nav><!-- /.site-navigation -->
            </div><!-- /.col-md-10 -->

            <!-- <div class="col-md-2 col-sm-2">
                <div class="booking">
                    <span><a href="booking.html">Booking</a></span>
                </div><!-- /.Booking -->
        </div><!-- /.col-md-2 -->
    </div><!-- /.row -->
    </div><!-- /.container -->
    <!-- </header>/.header-bottom-content -->

    <!-- ====== Header Overlay Content ====== -->
    <div class="header-overlay-content">
        <!-- overlay-menu-item -->
        <div class="overlay overlay-hugeinc gradient-transparent overlay-menu-item">
            <button type="button" class="overlay-close">Cerrar</button>
            <nav>
                <ul class="overlay-menu">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="#">Sobre Nosotros</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Inicio</a></li>
                            <li><a href="#">Sobre Nosotros</a></li>
                            <li><a href="#">...</a></li>
                        </ul>
                    </li>

            </nav>
        </div> <!-- /.overlay-menu-item -->

        <!-- header-search-content -->
        <div class="gradient-transparent overlay-search">
            <button type="button" class="overlay-close">Close</button>
            <div class="header-search-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="#" method="get" class="searchform">
                                <div class="input-group" id="adv-search">
                                    <input type="text" class="form-controller" placeholder="Search for snippets" />
                                    <div class="input-group-btn">
                                        <div class="btn-group" role="group">
                                            <div class="dropdown dropdown-lg">
                                                <button type="button" class="btn btn-default dropdown-toggle"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    <span class="fa fa-caret-down"></span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                    <div class="form-horizontal">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox"> From Blog</label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox">Encuentra tu lugar de
                                                                vacaciones</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">
                                                <span class="fa fa-search" aria-hidden="true"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.header-search-content -->

        <!-- Registrar Or Sign In-content -->
        <div class="cd-user-modal">
            <div class="cd-user-modal-container">
                <ul class="cd-switcher">
                    <li><a href="#0">Ingresar</a></li>
                    <li><a href="#0">Registro</a></li>
                </ul>

                <!-- log in form -->
                <div id="cd-login">
                    <form class="cd-form">
                        <p class="fieldset">
                            <label class="image-replace cd-email" for="signin-email">Correo Electronico</label>
                            <input class="full-width has-padding has-border" id="signin-email" type="email"
                                placeholder="E-mail">
                            <span class="cd-error-message">Error message here!</span>
                        </p>

                        <p class="fieldset">
                            <label class="image-replace cd-password" for="signin-password">Contrasena</label>
                            <input class="full-width has-padding has-border" id="signin-password" type="text"
                                placeholder="Password">
                            <a href="#0" class="hide-password">Hide</a>
                            <span class="cd-error-message">Error message here!</span>
                        </p>

                        <p class="fieldset">
                            <input type="checkbox" id="remember-me" checked>
                            <label for="remember-me">Recordar mi cuenta</label>
                        </p>

                        <p class="fieldset">
                            <input class="full-width" type="submit" value="Login">
                        </p>
                    </form>

                    <p class="cd-form-bottom-message">
                        <a href="#0">Olvidé mi cotraseña?</a>
                    </p>
                    <a href="#0" class="cd-close-form">Close</a>
                </div> <!-- cd-login -->

                <!-- sign up form -->
                <div id="cd-signup">
                    <form class="cd-form">
                        <p class="fieldset">
                            <label class="image-replace cd-username" for="signup-username">Usuario</label>
                            <input class="full-width has-padding has-border" id="signup-username" type="text"
                                placeholder="Username">
                            <span class="cd-error-message">Error message here!</span>
                        </p>

                        <p class="fieldset">
                            <label class="image-replace cd-email" for="signup-email">Correo Electronico</label>
                            <input class="full-width has-padding has-border" id="signup-email" type="email"
                                placeholder="E-mail">
                            <span class="cd-error-message">Error message here!</span>
                        </p>

                        <p class="fieldset">
                            <label class="image-replace cd-password" for="signup-password">Contraseña</label>
                            <input class="full-width has-padding has-border" id="signup-password" type="text"
                                placeholder="Password">
                            <a href="#0" class="hide-password">Hide</a>
                            <span class="cd-error-message">Error message here!</span>
                        </p>

                        <p class="fieldset">
                            <input type="checkbox" id="accept-terms">
                            <label for="accept-terms">De acuerdo <a href="#0">Terminos</a></label>
                        </p>

                        <p class="fieldset">
                            <input class="full-width has-padding" type="submit" value="Create account">
                        </p>
                    </form>

                    <a href="#0" class="cd-close-form">Close</a>
                </div> <!-- cd-signup -->

                <!-- reset password form -->
                <div id="cd-reset-password">
                    <p class="cd-form-message">¿No recuerdas tu contraseña? Ingresa tu correo Electronico. a
                        recibirás un enlace con instrucciones para el cambio de contraseña.</p>

                    <form class="cd-form">
                        <p class="fieldset">
                            <label class="image-replace cd-email" for="reset-email">E-mail</label>
                            <input class="full-width has-padding has-border" id="reset-email" type="email"
                                placeholder="E-mail">
                            <span class="cd-error-message">Error message here!</span>
                        </p>
                        <p class="fieldset">
                            <input class="full-width has-padding" type="submit" value="Reset password">
                        </p>
                    </form>

                    <p class="cd-form-bottom-message"><a href="#0">Regresar</a></p>
                </div> <!-- cd-reset-password -->
                <a href="#0" class="cd-close-form">Close</a>
            </div> <!-- cd-user-modal-container -->
        </div> <!-- cd-user-modal -->
    </div><!-- /.header-overlay-content -->


    <!-- ====== Page Header ====== --> 
    <div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">                
                    <h2 class="page-title">House</h2>
                    <p class="page-description">More Details About Apartment</p>        
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
                        <a href="index01.html">Home</a></span>
                       <span class="separator">&gt;</span>
                       <span class="last-item">Apartment Single Page</span>
                   </div>
               </div><!-- /.col-md-12 -->
           </div><!-- /.row -->
       </div><!-- /.container -->
   </div><!-- /.breadcrumbs-area -->

	<!-- ====== Apartments-Single-Area ======= --> 
	<div class="apartment-single-area">
	  	<div class="container">
		  	<div class="row">
			    <div class="col-md-8">
    				<div class="corousel-gallery-content">
    					  <div class="gallery">
    					       <div class="full-view owl-carousel">
    					     	  <a class="item image-pop-up" href="assets/images/apartment/apartament-family/1house-family.jpg">
    					     		  <img src="assets/images/apartment/apartament-family/1house-family.jpg" alt="corousel">
    					     	  </a>
    					     	  <a class="item image-pop-up" href="assets/images/apartment/apartament-family/1house-family1.jpg">
    					     		  <img src="assets/images/apartment/apartament-family/1house-family1.jpg" alt="corousel">
    					     	  </a>
    					     	  <a class="item image-pop-up" href="assets/images/apartment/apartament-family/1house-family2.jpg">
    					     		  <img src="assets/images/apartment/apartament-family/1house-family2.jpg" alt="corousel">
    					     	  </a>
    					     	  <a class="item image-pop-up" href="assets/images/apartment/apartament-family/1house-family3.jpg">
    					     		  <img src="assets/images/apartment/apartament-family/1house-family3.jpg" alt="corousel">
    					     	  </a>
    					     	  <a class="item image-pop-up" href="assets/images/apartment/apartament-family/1house-family4.jpg">
    					     		  <img src="assets/images/apartment/apartament-family/1house-family4.jpg" alt="corousel">
    					     	  </a>
                                  <a class="item image-pop-up" href="assets/images/apartment/apartament-family/1house-family5.jpg">
    					     		  <img src="assets/images/apartment/apartament-family/1house-family5.jpg" alt="corousel">
    					     	  </a>
                                   <a class="item image-pop-up" href="assets/images/apartment/apartament-family/1house-family6.jpg">
                                    <img src="assets/images/apartment/apartament-family/1house-family6.jpg" alt="corousel">
                                  </a>
                                  <a class="item image-pop-up" href="assets/images/apartment/apartament-family/1house-family7.jpg">
                                    <img src="assets/images/apartment/apartament-family/1house-family7.jpg" alt="corousel">
                                  </a>
                                  <a class="item image-pop-up" href="assets/images/apartment/apartament-family/1house-family8.jpg">
                                    <img src="assets/images/apartment/apartament-family/1house-family8.jpg" alt="corousel">
                                  </a>
                                  <a class="item image-pop-up" href="assets/images/apartment/apartament-family/1house-family9.jpg">
                                    <img src="assets/images/apartment/apartament-family/1house-family9.jpg" alt="corousel">
                                  </a>

    					       </div>

    					      <div class="list-view owl-carousel">
    					          <div class="item">
    					        	  <img src="assets/images/apartment/apartament-family/1house-family.jpg" alt="corousel-image">
    					          </div>
    					          <div class="item">
    					        	  <img src="assets/images/apartment/apartament-family/1house-family1.jpg" alt="corousel-image">
    					          </div>
    					          <div class="item">
    					        	  <img src="assets/images/apartment/apartament-family/1house-family2.jpg" alt="corousel-image">
    					          </div>
    					          <div class="item">
    					        	  <img src="assets/images/apartment/apartament-family/1house-family3.jpg" alt="corousel-image">
    					          </div>
    					          <div class="item">
    					        	  <img src="assets/images/apartment/apartament-family/1house-family4.jpg" alt="corousel-image">
    					          </div>
    					          <div class="item">
    					        	  <img src="assets/images/apartment/apartament-family/1house-family5.jpg" alt="corousel-image">
    					          </div>
                                  <div class="item">
                                    <img src="assets/images/apartment/apartament-family/1house-family6.jpg" alt="corousel-image">
                                 </div>
                                 <div class="item">
                                    <img src="assets/images/apartment/apartament-family/1house-family7.jpg" alt="corousel-image">
                                  </div>
                                 <div class="item">
                                    <img src="assets/images/apartment/apartament-family/1house-family8.jpg" alt="corousel-image">
                                  </div>
                                  <div class="item">
                                    <img src="assets/images/apartment/apartament-family/1house-family9.jpg" alt="corousel-image">
                                  </div>
                                </div>  
    					  </div> <!-- /.gallery-two -->
    				</div> <!-- /.corousel-gallery-content -->

    				<div class="family-apartment-content mobile-extend">
                        <div class="tb">
                            <div class="tb-cell">
        					   <h3 class="apartment-title">Apartmento Familiar</h3>
                            </div><!-- /.tb-cell -->
                            <div class="tb-cell">
        					   <p class="pull-right rent">Valor de la Renta: $430.000.000</p>
                            </div><!-- /.tb-cell -->
                        </div><!-- /.tb -->
    					<div class="clearfix"></div><!-- /.clearfix -->
    					<p class="apartment-description default-gradient-before">Casa de dos niveles ubicada en la Avenida Bolívar de la ciudad de Armenia, dispone de parqueadero con capacidad para tres vehículos, el conjunto cuenta en sus áreas sociales con: piscina, salón social, cancha de baloncesto, zonas verdes, portería y vigilancia las 24 horas.</p>
    					<div class="price-details">
    						<h3>Detalles del Precio</h3>
    						<ul>
    							<li><span>Valor de la Renta:</span> $220.000.000(negociable)</li>
    							<li><span>Servio de internet:</span> 8,000 </li>
                                <li><span>Servios Adicionales:</span> TV Cable, Telefono, wiffi </li>
    							
    						</ul>
    					</div><!-- /.price -->

    					<div class="property-details">
    						<h3>Detalles de la propiedad</h3>
    						<ul>
    							<li><span>Dirrecion:</span> Barrio la Victoria Kr 69B</li>
    							<li><span>Descripcion:</span> cuartos grandes y aires condioales piso de madera, patio grande y pisina</li>
    							<li><span>Numero de cuarto:</span> 4 </li>
                                <li><span>Numero de baño:</span> 3 </li>
                                <li><span>Parqueadero:</span> Para 3 Utomovil</li>
    							<li><span>Capacidad:</span> capacidad para 8 personas</li>
    							<li><span>Fecha Inicial de Disponibilidad:</span> Abril 4 de 2021</li>
                                <li><span>Fecha Final de Disponibilidad:</span> Abril 15 de 2021 </li>
    						</ul>
    					</div><!-- /.Property -->
    					
    				</div><!--/.family-apartment-content -->
                    <div class="hidden-md hidden-lg text-center extend-btn">
                        <span class="extend-icon">
                            <i class="fa fa-angle-down"></i>
                        </span>
                    </div>
			    </div> <!-- /.col-md-8 -->

    			<div class="col-md-4">
                    <div class="apartment-sidebar">                    
        				<div class="widget_rental_search clerafix">					
                          <?php include 'modules/formulario.php'?>
        				</div><!-- /.widget_rental_search -->

        				<div class="apartments-content seven post clerafix">
        					<div class="image-content">
        						<a href="#"><img class="overlay-image" src="assets/images/apartment/apartament-family/1house-family.jpg" alt="about" /></a>
        					</div><!-- /.image-content -->
        				</div><!-- /.partments-content -->
                    </div><!-- /.apartment-sidebar -->
    			</div> <!-- .col-md-4 -->
		  	</div> <!-- /.row -->
	  	</div> <!-- /.container -->
  	</div> <!-- /.appartment-single-area -->
	
	<!-- ====== Apartments-Related-area ====== --> 
	<div class="apartments-related-area bg-gray-color">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="heading-content-one">
					    <h2 class="title default-text-gradient">Apartamentos Relacionados</h2>
					</div><!-- /.Apartments-heading-content -->
				</div><!-- /.col-md-12 -->
			</div><!-- /.row -->
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="apartments-content">
                        <div class="image-content">
                            <a href="apartment-family2.html"><img src="assets/images/apartment/apartament-family/2house-family.jpg" alt="apartment" /></a>
                        </div><!-- /.image-content -->
                    
                        <div class="text-content">
                            <div class="top-content">
                                <h3><a href="apartment-family2.html">Apartamento Familiar</a></h3>
                                <span><a href="apartment-family2.html"><i class="fa fa-map-marker"></i></a> <a href="#">Dhanmondi, Dhaka</a>  </span> 
                            </div><!-- /.top-content -->
                            <div class="bottom-content clearfix">
                                <div class="meta-bed-room">
                                    <i class="fa fa-bed"></i> 3 Cuartos
                                </div>
                                
                                <div class="meta-bath-room">                                
                                    <i class="fa fa-bath"></i>2 Baños
                                </div>
                                <div class="meta-garage-room">                              
                                    <img src="assets/images/apartment/garaje.svg" class ="garage"alt="garage" /> 1 garaje
                                </div>
                               
                                
                                <span class="clearfix"></span>
                                <div class="rent-price pull-left">
                                    $2000000
                                </div>
                                <div class="share-meta dropup pull-right">
                                    <ul>
                                        <li class="dropup">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /.bottom-content -->
                        </div><!-- /.text-content -->
                    </div><!-- /.partments-content -->
                </div><!-- /.col-md-4 -->

				<div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="apartments-content">
                        <div class="image-content">
                            <a href="apartment-family3.html"><img src="assets/images/apartment/apartament-family/3house-family.jpg" alt="apartment" /></a>
                        </div><!-- /.image-content -->
                    
                        <div class="text-content">
                            <div class="top-content">
                                <h3><a href="apartment-family3.html">Apartamento familiar</a></h3>
                                <span><a href="apartment-family3.html"><i class="fa fa-map-marker"></i></a> <a href="#">Dhanmondi, Dhaka</a>  </span> 
                            </div><!-- /.top-content -->
                            <div class="bottom-content clearfix">
                                <div class="meta-bed-room">
                                    <i class="fa fa-bed"></i> 3 cuartos
                                </div>
                                <div class="meta-bath-room">                                
                                    <i class="fa fa-bath"></i>2 Baños
                                </div>

                                <div class="meta-garage-room">                              
                                    <img src="assets/images/apartment/garaje.svg" class ="garage"alt="garage" /> 1 garaje
                                </div>
                                <span class="clearfix"></span>
                                <div class="rent-price pull-left">
                                    $1200000
                                </div>
                                <div class="share-meta dropup pull-right">
                                    <ul>
                                        <li class="dropup">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /.bottom-content -->
                        </div><!-- /.text-content -->
                    </div><!-- /.partments-content -->
                </div><!-- /.col-md-4 -->

				<div class="clearfix hidden-md hidden-lg"></div>

				<div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="apartments-content">
                        <div class="image-content">
                            <a href="apartment-family4.html"><img src="assets/images/apartment/apartament-family/4house-family.jpg" alt="apartment" /></a>
                        </div><!-- /.image-content -->
                    
                        <div class="text-content">
                            <div class="top-content">
                                <h3><a href="apartment-family4.html">Apartamento familiar</a></h3>
                                <span><a href="apartment-family4.html"><i class="fa fa-map-marker"></i></a> <a href="#">Dhanmondi, Dhaka</a>  </span> 
                            </div><!-- /.top-content -->
                            <div class="bottom-content clearfix">
                                <div class="meta-bed-room">
                                    <i class="fa fa-bed"></i> 3 Cuartos
                                </div>
                                <div class="meta-bath-room">                                
                                    <i class="fa fa-bath"></i>2 Baños
                                </div>
                                <div class="meta-garage-room">                              
                                    <img src="assets/images/apartment/garaje.svg" class ="garage"alt="garage" /> 1 garaje
                                </div>
                                <span class="clearfix"></span>
                                <div class="rent-price pull-left">
                                    $1200000
                                </div>
                                <div class="share-meta dropup pull-right">
                                    <ul>
                                        <li class="dropup">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /.bottom-content -->
                        </div><!-- /.text-content -->
                    </div><!-- /.partments-content -->
                </div><!-- /.col-md-4 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.Apartments-Related-area-->

    <!-- ====== Call To Action ======== --> 
    <div class="call-to-action default-template-gradient">
        <div class="container">
            <div class="row tb">
                <div class="col-md-6 col-sm-6 tb-cell">
                    <div class="contact-left-content">
                        <h3>Quieres alquilar tu casa</h3>
                        <h4>Llámanos y lista tu propiedad aquí</h4>
                    </div><!-- /.contact-left-content -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 tb-cell">
                    <div class="contact-right-content">
                        <h4><a href="#">+880123654987<span>AlquilarCasa@gmail.com</span></a></h4>
                        <a href="#" class="button">Contacta con nosotros</a>
                    </div><!-- /.contact-right-content -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.call-to-action -->

    <!-- ====== Contact Area ====== --> 
    <div class="contact-area">
        <div class="container-large-device">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-content-two available">
                            <h2 class="title">Estamos disponibles<br/> Para ti 24 horas al día, 7 días a la semana</h2>
                            <h5 class="sub-title">NUESTRO SERVICIO DE SOPORTE ONLINE ES SIEMPRE LAS 24 HORAS</h5>
                        </div><!-- /.testimonial-heading-content -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-md-7">
                        <div class="map-left-content">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.3473581642306!2d-75.6766886856766!3d4.5313148443657765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38f5ae1fc5b765%3A0x9eded8eab2bbdba1!2zQXYuIEJvbMOtdmFyICMjMjMtMjcsIEFybWVuaWEsIFF1aW5kw61vLCBDb2xvbWJpYQ!5e0!3m2!1ses!2sus!4v1617054580027!5m2!1ses!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div><!-- /.mapl-left-content -->
                    </div><!-- /.col-md-7 -->
                    <div class="col-md-5">
                        <div class="map-right-content">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="contact">
                                        <h4><i class="fa fa-address-book"></i>Direccion</h4>
                                        <p>Av. Bolívar ##23-27, Armenia, Quindío, Colombia</p>
                                    </div><!-- /.contact -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="contact">
                                        <h4><i class="fa fa-envelope"></i>Mail</h4>
                                        <p>yourmail@domain.com houserent@domain.com</p>
                                    </div><!-- /.contact -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="contact">
                                        <h4><i class="fa fa-phone-square"></i>Call</h4>
                                        <p>+99 0215469875 <br/>666 35874692050</p>
                                    </div><!-- /.contact -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="contact">
                                        <h4><i class="fa fa-user-circle"></i>Social account</h4>
                                        <div class="social-icon">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div><!-- /.Social-icon -->
                                    </div><!-- /.contact -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.map-right-content -->
                    </div><!-- /.col-md-5 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div><!-- /.contact-area -->

    <!-- ====== Footer Area ====== --> 
    <footer class="footer-area bg-gray-color" style="background-image:url(assets/images/footer-bg.png)">
        <div class="container">
            <!-- <div class="row">
                <div class="col-md-4">
                    <div class="widget widget_about nevy-color">    
                        <div class="widget-title-area">
                            <h3 class="widget-title">
                                About House Rent
                            </h3>/.widget-title -->
                       <!--  </div> /.widget-title-area -->
                        <!-- <div class="widget-about-content">
                            <img src="assets/images/footer-logo.png" alt="house" />
                            <p>We Provide Premium Word Press, Ghost and HTML template. Our Perm tritium Templates is, develop gaped in a way so that the clients find  Support. Themes are developed in a way so that the clients find.</p>
                            <a href="#" class="button">More</a> --> -->
                      <!--   </div>/.widget-content
                    </div>/.widget widget_about -->
               <!--  </div>/.col-md-4 -->
                <!-- <div class="col-md-4"> -->
                    <!-- <div class="widget widget_place_category nevy-color">
                        <div class="widget-title-area">
                            <h3 class="widget-title">Place Category</h3>/.widget-title -->
                        <!-- </div> /.widget-title-area -->
                        <!-- <ul>
                            <li>Flat for Rent <a href="#">Francis</a></li>
                            <li>Flat for Rent <a href="#">Collins St</a></li>
                            <li>Flat for Rent <a href="#">Rose Ln</a></li>
                            <li>Flat for Rent <a href="#">Cosgrave Ln</a></li>
                            <li>Flat for Rent <a href="#">Bourke St</a></li>
                            <li>Flat for Rent <a href="#">Flienders Ln</a></li> -->
                       <!--  </ul> 
                   </div> /.widget -->
               <!--  </div>< /.col-md-4 -->
                <!-- <div class="col-md-4">
                    <div class="widget widget_instagram nevy-color">
                        <div class="widget-title-area"> -->
                            <!-- <h3 class="widget-title">Instagram Image</h3> /.widget-title -->
                       <!--  </div>/.widget-title-area -->
                        <!-- <div class="instagram-image-content">
                            <a href="#"><img src="assets/images/instagram/instagram-one.png" alt="" /></a>
                            <a href="#"><img src="assets/images/instagram/instagram-two.png" alt="" /></a>
                            <a href="#"><img src="assets/images/instagram/instagram-three.png" alt="" /></a>
                            <a href="#"><img src="assets/images/instagram/instagram-four.png" alt="" /></a>
                            <a href="#"><img src="assets/images/instagram/instagram-five.png" alt="" /></a>
                            <a href="#"><img src="assets/images/instagram/instagram-six.png" alt="" /></a> -->

                        <!-- </div>/.instagram-image-content -->
                 <!--    </div> /.widget -->
              <!--   </div> /.col-md-4 -->
           <!--  </div> /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="bottom-content">
                        <p>Copyright  &copy;2017 <a href="#">HTMLguru</a></p>
                    </div><!-- /.bottom-top-content -->
                </div><!-- /.col-md-12 -->
           </div><!--/.row -->
        </div><!-- /.container -->
     </footer><!--/.footer-area -->

	<!-- All The JS Files
	================================================== --> 
	<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/main.js"></script> <!-- main-js -->
</body>
</html>

