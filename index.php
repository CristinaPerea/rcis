<?php
    session_start();
?>
<!doctype html>
<!--
	Template:	 Unika - Responsive One Page HTML5 Template
	Author:		 imransdesign.com
	URL:		 http://imransdesign.com/
    Designed By: https://www.behance.net/poljakova
	Version:	1.0	
-->
<html lang="en-US">
	
<!-- Mirrored from portal-herramientas.appspot.com/template4/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jun 2015 20:23:44 GMT -->
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>R.C.I.S.</title>
		<meta name="description" content="RSCI - Red de Ciencia e Ingeniería de Servicios">
		<meta name="keywords" content="HTML5, Bootsrtrap, Parallax, One Page, Responsive" />
		<meta name="author" content="Cristina Perea - Marcos Ginel">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Google Fonts  -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->

		<!-- Libs and Plugins CSS -->
		<link rel="stylesheet" href="inc/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="inc/animations/css/animate.min.css">
		<link rel="stylesheet" href="inc/font-awesome/css/font-awesome.min.css"> <!-- Font Icons -->
		<link rel="stylesheet" href="inc/owl-carousel/css/owl.carousel.css">
		<link rel="stylesheet" href="inc/owl-carousel/css/owl.theme.css">

		<!-- Theme CSS -->
        <link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/mobile.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skin/cool-gray.css">
        <link rel="stylesheet" type="text/css" href="css/fonts.css">
        <!-- <link rel="stylesheet" href="css/skin/ice-blue.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/summer-orange.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/fresh-lime.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/night-purple.css"> -->

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

<!-- Latest compiled JavaScript -->

	</head>

    <body data-spy="scroll" data-target="#main-navbar">
        <div class="page-loader"></div>  <!-- Display loading image while page loads -->
    	<div class="body">
        
            <!--========== BEGIN HEADER ==========-->
            <header id="header" class="header-main">

                <!-- Begin Navbar -->
                <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation"> <!-- Classes: navbar-default, navbar-inverse, navbar-fixed-top, navbar-fixed-bottom, navbar-transparent. Note: If you use non-transparent navbar, set "height: 98px;" to #header -->

                  <div class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand page-scroll " href="#text-carousel-intro-section">RCIS</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <!--<li><a class="page-scroll" href="#text-carousel-intro-section">Inicio</a></li>-->
                            <li><a class="page-scroll" href="#about-section">Objetivos</a></li>
                            <li><a class="page-scroll" href="#prices-section">Participantes</a></li>
                            
                            <li><a class="page-scroll" href="#cta-section">Publicaciones</a></li>
                            <li><a class="page-scroll" href="#services-section">Herramientas</a></li>
                            <!--<li><a class="page-scroll" href="#cta-section2">Paquetes de aprendizaje</a></li>-->                 
                            <li><a class="page-scroll" href="#contact-section">Contacto</a></li>
                            <li class="dropdown">

                            <a class="dropdown-toggle link-acceso-restringido" data-toggle="dropdown" id="navLogin" href="#">Acceso Restringido</a>
                            <div class="dropdown-menu" style="padding:17px; border:1px solid black;">
                                <form class="contact-form" id="formLogin" name="formLogin" action="logged.php" method="POST"> 
                                    <div class="form-group">
                                        <input class="form-control" name="username" id="username" type="text" placeholder="Username" required pattern="[a-zA-Z ]+"> </div>
                                    <div class="form-group">
                                    <input class="form-control" name="password" id="password" type="password" placeholder="Password" required pattern="[a-zA-Z ]+"> </div>
                                    <div class="form-group">
                                    <button id="btnLogin" class="btn btn-default">Login</button></div>
                                </form>
                            </div>


                            </li>
                                
                        </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container -->
                </nav>
                <!-- End Navbar -->

            </header>
            <!-- ========= END HEADER =========-->
            
            
            
            
        	<!-- Begin text carousel intro section -->
			<section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="  ">
				
				<div class="container">
					<div class="caption text-center text-white" data-stellar-ratio="0.7">

						<div id="" class="">
							<div class="">
								<h1>Red de Ciencia e Ingeniería de Servicios</h1>
                                <h3>TIN2014-53986-REDT</h3>
							</div>
						</div>

					</div> <!-- /.caption -->
				</div> <!-- /.container -->

			</section>
			<!-- End text carousel intro section -->
                
                
                
                
            <!-- Begin about section -->
			<section id="about-section" class="page bg-style1">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h2>Objetivos</h2>
                            <div class="devider"></div>
                            <p class="subtitle">La Red Temática pretende aprovechar el impulso derivado de la previa Red Científico-Tecnológica en Ciencias de los Servicios para terminar de completar muchas actividades que están aún en proceso de realización y consolidación, así como explorar las nuevas sinergias derivadas de las oportunidades y retos identificos. En concreto, los objetivos de la Red se vertebran en torno a tres direcciones.</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->

                <!-- Begin roatet box-2 -->
                <div class="rotate-box-2-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-10">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <span class="rotate-box-icon"><i class="fa fa-flask"></i></span>
                                    <div class="rotate-box-info">
                                        <p>Optimizar los resultados y recursos de los grupos que componen la red a través de la identificación, compartición y reutilización del conocimiento y los recursos de investigación (experimentos, casos de uso, herramientas software, etc.) desarrollados. Así, se pretende ir hacia la formación de un grupo cohesionado, cuya visión común permita alcanzar objetivos más ambiciosos y mejor organizados que los realizados individualmente.</p>
                                    </div>
                                </a>
                            </div>
            
                            <div class="col-md-4 col-sm-10">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <span class="rotate-box-icon"><i class="fa fa-cogs"></i></span>
                                    <div class="rotate-box-info">
                                        <p>Explorar de forma conjunta los nuevos retos que abren los avances en Cloud Computing, dispositivos inteligentes y computación social sobre los que ya están trabajando los grupos que integran la red.</p>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-md-4 col-sm-10">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                    <span class="rotate-box-icon"><i class="fa fa-desktop"></i></span>
                                    <div class="rotate-box-info">
                                        <p>Convertir a la red en una plataforma que permita difundir sus resultados tanto de cara a la industria, fomentando especialmente la relación con otras redes profesionales de temáticas similares, como de cara a la comunidad internacional, buscando el tener identidad propia de cara al Espacio Europeo de Investigación y la creación de grupos consolidados que puedan liderar consorcios para la solicitud de proyectos.</p>
                                    </div>
                                </a>
                            </div>
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->                
                </div>
                <!-- End rotate-box-2 -->
                
                <div class="extra-space-l"></div>
                
          </section>
          <!-- End about section -->             
          <!-- <section id="testimonial-section">
                <div id="testimonial-trigger" class="testimonial text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/testimonial-bg.jpg);">
                    <div class="cover"></div>
                    <div class="page-header-wrapper">
                        <div class="container">
                            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                <div class="container">
                                  <div class="row">
                                    <div class="col-sm-4 vcentered">
                                      <i class="fa fa-book"></i>
                                    </div>

                                    <div class="col-sm-8 vcentered">
                                      <h2>Conoce más sobre nuestra propuesta científica</h2>
                                      <p><a class="btn btn-blank" href="#" target="_blank" role="button">Leer más</a></p>
                                    </div>

                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div> 
            </section>-->
            <!-- End testimonials -->  
                      <!-- Begin partners -->
            <section id="prices-section" class="page">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Participantes</h2>
                            <div class="devider"></div>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                <div class="container">
                    <div class="row vcenter text-center">
                        <div class="col-md-6">
                            <div class="col-md-offset-6 col-md-5 col-sm-3 col-xs-3"><h5>Ernesto Pimentel Sánchez</h5></div>
                            <div class="col-md-1 col-sm-3 col-xs-3"><img class="imagenes-logo" src="img/logoUMA.png" alt=""></div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-1 col-sm-3 col-xs-3"><img class="imagenes-logo" src="img/logoUCLM.gif" alt=""></div>
                            <div class="col-md-5 col-sm-3 col-xs-3"><h5>Esperanza Marcos Martínez</h5></div>
                        </div>
                    </div>
                    <div class="row vcenter text-center">
                        <div class="col-md-6">
                            <div class="col-md-offset-6 col-md-5 col-sm-3 col-xs-3"><h5>Xavier Franch Gutiérrez</h5></div>
                            <div class="col-md-1 col-sm-3 col-xs-3"><img class="imagenes-logo" src="img/logoUPC.gif" alt=""></div>
                        </div>
                         <div class="col-md-6">
                            <div class="col-md-1 col-sm-3 col-xs-3"><img class="imagenes-logo" src="img/logoUPV.png" alt=""></div>
                            <div class="col-md-5 col-sm-3 col-xs-3"><h5>Vicente Pelechano Ferragud</h5></div>
                        </div>
                    </div>
                    <div class="row vcenter text-center">
                        <div class="col-md-6">
                            <div class="col-md-offset-6 col-md-5 col-sm-3 col-xs-3"><h5>Juan Manuel Murillo Rodríguez</h5></div>
                            <div class="col-md-1 col-sm-3 col-xs-3"><img class="imagenes-logo" src="img/logoEX.png" alt=""></div>
                        </div>
                        <div class="col-md-6">
                           <div class="col-md-1 col-sm-3 col-xs-3"> <img class="imagenes-logo" src="img/logoUCLM.gif" alt=""></div>
                            <div class="col-md-5 col-sm-3 col-xs-3"><h5>Felix Óscar García Rubio</h5></div>
                        </div>
                    </div>
                    <div class="row vcenter text-center">
                        <div class="col-md-6">
                            <div class="col-md-offset-6 col-md-5 col-sm-3 col-xs-3"><h5>Manuel Lama Penín</h5></div>
                            <div class="col-md-1 col-sm-3 col-xs-3"><img class="imagenes-logo"  src="img/logoUSC.png" alt=""></div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-1 col-sm-3 col-xs-3"><img class="imagenes-logo" src="img/logoUCA.png" alt=""></div>
                            <div class="col-md-5 col-sm-3 col-xs-3"><h5>Guadalupe Ortiz Bellot</h5></div>
                        </div>
                    </div>
                    <div class="row vcenter text-center">
                        <div class="col-md-6">
                            <div class="col-md-offset-6 col-md-5 col-sm-3 col-xs-3"><h5>Pedro Álvarez Pérez-Aradros</h5></div>
                            <div class="col-md-1 col-sm-3 col-xs-3"><img class="imagenes-logo" src="img/logoZA.png" alt=""></div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-1 col-sm-3 col-xs-3"><img class="imagenes-logo" src="img/logoUS.png" alt=""></div>
                            <div class="col-md-5 col-sm-3 col-xs-3"><h5>Antonio Ruiz Cortés</h5></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End partners -->   
              
            <section id="cta-section" class="page text-center">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Publicaciones</h2>
                                    <div class="devider"></div>
                                     <div class="container">
                                         <iframe class="container responsive-iframe-container-publicaciones" src="test-table-pro.html" srcolling="no"></iframe>
                                    </div>
                        </div>
                    </div>
                </div>
              </section>

         <section id="testimonial-section">
                <div id="testimonial-trigger" class="testimonial text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/testimonial-bg.jpg);">
                    <div class="cover"></div>
                    <!-- Begin page header-->
                    <div class="page-header-wrapper">
                        <div class="container">
                            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                <div class="container">
                                  <div class="row">
                                    <div class="col-sm-4 vcentered">
                                      <i class="fa fa-book"></i>
                                    </div>

                                    <div class="col-sm-8 vcentered">
                                      <h2>Descubre más publicaciones</h2>
                                      <p><a class="btn btn-blank" href="#" target="_blank" role="button">Ver más</a></p>
                                    </div>

                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End page header-->
                </div>
            </section>
              
              
              
            <!-- Begin Services -->
            <section id="services-section" class="page text-center">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Herramientas</h2>
                            <div class="devider"></div>
                            <p class="subtitle"></p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->

                <div class="container">
                    <div class="row">
                      <div class="col-md-5 col-md-offset-1 introduction">
                        <img class="img-intro img-rounded img-resp padbot" title="AnalysisOperationsCatalogue2" src="img/herramienta.png" alt="Analysis Operations Catalogue">
                      </div>
                      
                      <div class="col-md-5 ">
                        <div class="introduction">
                          <h4>Herramienta 1</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit eligendi temporibus ipsum distinctio veritatis tempore, autem corrupti accusamus nisi itaque atque, impedit vitae incidunt sint asperiores id quisquam deserunt eos.</p>
                          <p><a href="#" class="btn btn-default">Más información</a></p>
                                </div>             
                      </div>
                    </div>

                    <hr class="soften">

                    <div class="row">
                      <div class="col-md-5 col-md-offset-1">
                        <div class="introduction">
                          <h4>Herramienta 2</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui sed fugiat, esse, quo at minima corporis tempore iure ullam eius eveniet amet impedit iste, culpa sequi, maiores numquam. Animi, facere.</p>
                          <p><a href="#" class="btn btn-default">Más información</a></p>
                                </div>                  
                      </div>

                      <div class="col-md-5 introduction">
                        <img class="img-intro img-rounded" title="AnalysisOperationsCatalogue2" src="img/herramienta2.png" alt="Poster Visual">
                      </div>
                    </div>

                    <hr class="soften">
                    
                    <div class="row">
                      <div class="col-md-5 col-md-offset-1 introduction">
                        <img class="img-intro img-rounded" title="AnalysisOperationsCatalogue2" src="img/herramienta3.jpg" alt="Activiti">
                      </div>
                      
                      <div class="col-md-5 ">
                        <div class="introduction">
                          <h4>Herramienta 3</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur asperiores aliquid laboriosam, quaerat molestias amet magni commodi nemo officiis quidem ab facere consectetur eveniet, id. Unde autem repellat, fugit eligendi!</a>.</p>
                          <p><a href="#" class="btn btn-default">Más información</a></p>
                        </div>                  
                      </div>
                    </div>
                </div>           

            </section>
            <!-- End Services -->
          <!--  <section id="cta-section2">
            <div class="cta">
                <div class="container">
                    <div class="row">
                        <div class="page-header-wrapper">
                            <div class="container">
                                <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                                    <h2>Paquetes de aprendizaje</h2>
                                    <div class="devider"></div>
                                    <p class="subtitle"></p>
                                </div>
                            </div>
                        </div>
               
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <ul class="">
                                <li>
                                    <div class="col-md-7 col-md-offset-1">
                                        <h4>Paquete 1</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                    </div>
                                    <p><a href="#" class="btn btn-default col-md-2">Dercargar</a></p>
                                </li>
    
                                <li>
                                    <div class="col-md-7 col-md-offset-1">
                                        <h4>Paquete 2</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                    </div>
                                    <p><a href="#" class="btn btn-default col-md-2">Dercargar</a></p>
                                    
                                </li>
                                <li>
                                    <div class="col-md-7 col-md-offset-1">
                                        <h4>Paquete 3</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                    </div>
                                   <p><a href="#" class="btn btn-default col-md-2">Dercargar</a></p>
                                </li>
                              </ul>
                        </div>
                    </div>

                </div>
            </div>
          </section>-->
                            
            <!-- Begin contact section -->
			<section id="contact-section" class="page text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/reina.png);">
            <div class="cover"></div>
            
                 <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Contacto</h2>
                            <div class="devider"></div>
                            <p class="subtitle">Contacta con nosotros</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                
                <div class="contact wow bounceInRight" data-wow-delay="0.4s">
                    <div class="container">
                    	<div class="row">
                        
                            <div class="col-sm-6">
                                <div class="contact-info">
                                    <h4>Dirección</h4>
                                    <ul class="contact-address">
			                            <li><i class="fa fa-map-marker fa-lg"></i>&nbsp; Dpto. Lenguajes y Sistemas Informáticos.<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad de Sevilla. ETSII.<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avda. Reina Mercedes, s/n 41012 Sevilla. Spain </li>
                                        <li><i class="fa fa-envelope"></i>aruiz [at] us [dot] es</li>
			                        </ul>
                                </div>
                            </div>
                        
                        	<div class="col-sm-6">
                                <div class="contact-form">
                                	<h4>Escríbenos</h4>
                                    <form role="form">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" placeholder="Nombre" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control input-lg" placeholder="E-mail" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" placeholder="Asunto" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control input-lg" rows="5" placeholder="Mensaje" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-blank wow bounceInRight" data-wow-delay="0.8s">Enviar</button>
                                    </form>
                                </div>	
                            </div>
                                                                                
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
            </section>
            <!-- End contact section -->
                
                

                
            <!-- Begin footer -->
            <footer class="text-off-white">
                
                <div class="footer">
                    <div class="container text-center wow fadeIn" data-wow-delay="0.4s">
                        <p class="copyright">&copy; 2015 RCIS</p>
                        <!--<p><a href="http://www.isa.us.es/" target="_blank"><img class="img-responsive isa" src="img/isa.png" alt="ISA"></a></p>-->
                    </div>
                </div>

            </footer>
            <!-- End footer -->

            <a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a> <!-- Scroll to top button -->
                                              
        </div><!-- body ends -->
        
        
        
        
        <!-- Plugins JS -->
		<script src="inc/jquery/jquery-1.11.1.min.js"></script>
		<script src="inc/bootstrap/js/bootstrap.min.js"></script>
		<script src="inc/owl-carousel/js/owl.carousel.min.js"></script>
		<script src="inc/stellar/js/jquery.stellar.min.js"></script>
		<script src="inc/animations/js/wow.min.js"></script>
        <script src="inc/waypoints.min.js"></script>
		<script src="inc/isotope.pkgd.min.js"></script>
		<script src="inc/classie.js"></script>
		<script src="inc/jquery.easing.min.js"></script>
		<script src="inc/jquery.counterup.min.js"></script>
		<script src="inc/smoothscroll.js"></script>

		<!-- Theme JS -->
		<script src="js/theme.js"></script>

    </body> 
        
            

<!-- Mirrored from portal-herramientas.appspot.com/template4/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jun 2015 20:24:40 GMT -->
</html>
