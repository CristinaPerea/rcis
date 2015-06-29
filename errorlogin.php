<?php
    session_start();
    session_destroy();
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
		<title>RCIS</title>
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
        
        <!-- Popups -->
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/jquery-confirm.css">

        <!-- Cabecera textos -->
        <!--<link rel="stylesheet" href="css/cabeceraTextosResponsive.css">-->

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
        
        <!-- Scripts Popups -->
        <script src="js/jquery-ui.js"></script>
        <script src="js/jquery-confirm.min.js"></script>
        <!-- CSS Para sliders de Herramientas -->
        <!--<link href="css/bootstrapTheme.css" rel="stylesheet">-->
        <!--<link href="css/custom.css" rel="stylesheet">-->
        <link rel="stylesheet" href="css/estilo-slider-herramientas.css">
        <link href="css/google-code-prettify/prettify.css" rel="stylesheet">
	</head>

    <body data-spy="scroll" data-target="#main-navbar">
        <?php include("cuerpoindex.html"); ?>
        <script>
            $.alert({
                    title: 'Error',
                    content: 'Error en las credenciales, asegurese de escribir su nombre de usuario y contraseña correctamente.',
                });
        </script>     
    </body> 
        
            

<!-- Mirrored from portal-herramientas.appspot.com/template4/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jun 2015 20:24:40 GMT -->
</html>
