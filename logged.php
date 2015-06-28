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
<html lang="es-ES">	
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
    </head>

    <body data-spy="scroll" data-target="#main-navbar">
        <div class="page-loader"></div>
    	<div class="segundo-estilo-body-para-logged">
            <header id="header" class="header-main">
                <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand page-scroll" href="#">RCIS</a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a class="page-scroll" href="#cta-section4">Procedimientos</a></li>                    
                                <li><a class="page-scroll" href="#cta-section2">Recursos</a></li>
                                <li><a href="logout.php" class="link-acceso-restringido">Salir</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>

            <section id="cta-section4">
                <div class="cta">
                    <div class="container">
                        <div class="row">
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
                        </div> 
                    </div>
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
            </section>         
                
            <footer class="text-off-white">
                <div class="footer">
                    <div class="container text-center wow fadeIn" data-wow-delay="0.4s">
                        <p class="copyright">&copy; 2015 RCIS</p>
                    </div>
                </div>
            </footer>
            <a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a>                                         
        </div>
        
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
        <script src="js/cambiaVistaRecursosDrive.js"></script>
    </body> 
</html>
