<?php 
    session_start();
    $formulario = $_SESSION['formLogin'];
    if(!isset($formulario)) {
        $formulario['username'] = $_REQUEST['username'];
        $formulario['password'] = $_REQUEST['password'];
        $_SESSION['formulario'] = $formulario;
        $username = $formulario['username'];
        $password = $formulario['password'];    
        if(!($username == 'rcis') || !($password == 'privado'))
            Header("Location: errorlogin.php");
    }
    else {
        Header("Location: index.php");
    }
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
		<meta name="description" content="Unika - Responsive One Page HTML5 Template">
		<meta name="keywords" content="HTML5, Bootsrtrap, One Page, Responsive, Template, Portfolio" />
		<meta name="author" content="imransdesign.com">

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
        <link rel="stylesheet" href="css/fontsDrive.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/jquery-confirm.css">
       
            <!-- Grid CSS File (only needed for demo page) -->
 
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
            <!-- Grid CSS File (only needed for demo page) -->
<!-- Latest compiled JavaScript -->

	</head>

    <body data-spy="scroll" data-target="#main-navbar">
        <div class="page-loader"></div>  <!-- Display loading image while page loads -->
    	<div class="segundo">
        
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
                      <a class="navbar-brand page-scroll" href="#">RCIS</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <!--<li><a class="page-scroll" href="index.html">Inicio</a></li>-->
                            <!--<li>
                            Quitado a petición de Pablo, Sprint 2
                            <a class="page-scroll" href="#cta-section3">Publicaciones</a></li> -->
                            <!--<li><a class="page-scroll" href="#eventos-section">Eventos</a></li>-->
                            <li><a class="page-scroll" href="#cta-section4">Procedimientos</a></li>                    
                            <li><a class="page-scroll" href="#cta-section2">Recursos</a></li>
                            <li><a href="logout.php" class="link-acceso-restringido">Salir</a>

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
            <!-- Begin about section -->
         
            <!-- End testimonials -->  
                      <!-- Begin partners -->
 
<!--        <section id="cta-section3">
          	<div class="cta">
            	<div class="container">
                	<div class="row">
                    
                    	
                        <div class="page-header-wrapper">
                            <div class="container">
                                <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                                    <h2>Publicaciones Propias</h2>
                                    <div class="devider"></div>
                                    <div>Aquí tiene sus publicaciones</div>
                                </div>
                            </div>
                        </div>
                       
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="">
                                <li class="col-md-6">
                                    <h4 class="col-md-1"><span class="icon-book"></span></h4>
                                    <div class="rotate-box-info">
                                        <h4>Publicación 1</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                    </div>
                                    </a>
                                </li>
                                <li class="col-md-6">
                                    <h4 class="col-md-1"><span class="icon-book"></span></h4>
                                    <div class="rotate-box-info">
                                        <h4>Publicación 2</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                    </div>
                                    </a>
                                </li>
                                <li class="col-md-6">
                                    <h4 class="col-md-1"><span class="icon-book"></span></h4>
                                    <div class="rotate-box-info">
                                        <h4>Publicación 3</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                    </div>
                                    </a>
                                </li>
                              </ul>
                        </div>
                    </div>

                </div>
            </div>
          </section> -->
          <!-- End cta -->
<!--         <section id="testimonial-section">
                <div id="testimonial-trigger" class="testimonial text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/engranajes.jpg);">
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
                                      <h2>Descubre más publicaciones</h2>
                                      <p><a class="btn btn-blank" href="#" target="_blank" role="button">Ver más</a></p>
                                    </div>

                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>              -->
              
            <!-- Begin Services -->
   <!--         <section id="eventos-section" class="page text-center">

                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Calendario de eventos</h2>
                                    <div class="devider"></div>
                                     <div class="responsive-iframe-container"><img src="img/eventCalendar.png"></img>
                                  <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;height=600&amp;wkst=2&amp;hl=es&amp;bgcolor=%23ffffff&amp;src=hsk0lgahq4u8t5kblltvijn1m4%40group.calendar.google.com&amp;color=%230F4B38&amp;ctz=Europe%2FAmsterdam" style=" border-width:0 "frameborder="0" scrolling="no"></iframe>
                                    </div>
                        </div>
                    </div>
                </div>
            </section>-->
            <!-- End Services -->
            <section id="cta-section4">
            <div class="cta">
                <div class="container">
                    <div class="row">
                    
                        <!-- Begin page header-->
                        <div class="page-header-wrapper first-section">
                            <div class="container">
                                <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                                    <h2>Procedimientos</h2>
                                    <div class="devider"></div>
                                    <p class="subtitle"></p>
                                    <div class="responsive-iframe-container-procedimientos">
                                    <iframe src="https://docs.google.com/document/d/1rszg-eygEH579VyP4d3_KE_8HMXn_wwdUq3AMjRWB1c/pub?embedded=true" frameborder="1"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End page header-->
                        
                    </div> <!-- /.row -->

                   

                </div> <!-- /.container -->
            </div>
          </section>
          <section id="cta-section2">
                <div class="page-header-wrapper">
                            <div class="container">
                                
                                    <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                                        <h2>Recursos</h2>
                                        <div class="devider"></div>
                                        <div id="row">
                                            <button id="boton-vista-drive" class="btn btn-default"><span class="icon-file-text2"></span></button>
                                        </div>
                                        <div id="row">
                                            <div class="responsive-iframe-container"><iframe id="iframe-recursos" src="https://drive.google.com/embeddedfolderview?id=0B777mNcRbpXNflFhSm96RzlJOTQ2c2hZUHNPSm5veVNiSFNDTEg0a1pEODNjTHNxdUFTX0k#grid" width="800" height="500" frameborder="1"></iframe></div>
                                        </div>
                                    </div>
                            </div>
                        </div>
         <!--       <div id="accordion">
                  <h3>Recurso 1</h3>
                  <div>
                    <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</p>
                  </div>
                  <h3>Recurso 2</h3>
                  <div>
                    <p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In suscipit faucibus urna. </p>
                  </div>
                  <h3>Recurso 3</h3>
                  <div>
                    <p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui. </p>
                    <ul>
                      <li>List item one</li>
                      <li>List item two</li>
                      <li>List item three</li>
                    </ul>
                  </div>
                  <h3>Recurso 4</h3>
                  <div>
                    <p>Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia mauris vel est. </p><p>Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                  </div>
                </div>
          </section>   -->         
            <!-- Begin contact section -->
                
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
        <script src="js/jquery-ui.js"></script>
        <script src="js/jquery-confirm.min.js"></script>
        <!-- Theme JS -->
        <script src="js/theme.js"></script>
<!--        <script>
            $.alert({
                    title: 'Confirmación',
                    content: 'Bienvenido!',
                });
        </script>-->
        <!-- Plugins JS -->
        <script src="js/cambiaVistaRecursosDrive.js"></script>

    </body> 
        
            

<!-- Mirrored from portal-herramientas.appspot.com/template4/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jun 2015 20:24:40 GMT -->
</html>
