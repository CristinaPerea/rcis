<?php
	include_once('lectorCSV.php');

	$arrayHerramientas = array(); 
	$arrayHerramientas = loadDataFromCSV("https://docs.google.com/spreadsheets/d/1r_HzzjbG93PYkgZXTz7vwwxR7pCIilCSLb-m3t_rzic/export?format=csv&id=1r_HzzjbG93PYkgZXTz7vwwxR7pCIilCSLb-m3t_rzic");

	$nombreHerramienta;
	$enlaceLogoGrupo;
	$enlaceLogoHerramienta;
	$imagenDeHerramienta;
	$descripcion;
	$enlaceWeb;
	$elemento =  '<div class="container">';
	for ($i = 1; $i < sizeof($arrayHerramientas) ; $i++) { 
			$nombreHerramienta = $arrayHerramientas[$i][1];
			$enlaceLogoGrupo = $arrayHerramientas[$i][2];
			$enlaceLogoHerramienta = $arrayHerramientas[$i][3];
			$imagenDeHerramienta = $arrayHerramientas[$i][4];
			$descripcion = $arrayHerramientas[$i][5];
			$enlaceWeb = $arrayHerramientas[$i][6];
			//echo $nombreHerramienta.$enlaceLogoHerramienta.$enlaceLogoGrupo.$imagenDeHerramienta.$descripcion.$enlaceWeb;
					$elemento .=  '<div class="row">';
					$elemento .=	'<div class="col-md-1">';
					$elemento .=		'<img src="'.$enlaceLogoHerramienta.'"></img>';
					$elemento .=	'</div>';
					$elemento .=  '</div>';
					$elemento .=  '<div class="row">';
					$elemento .=	'<div class="col-md-7">';
					$elemento .=		'<p>'.$nombreHerramienta.'</p>';
					$elemento .=		'<p>'.$descripcion.'</p>';
					$elemento .= 		'<p><a href="'.$enlaceWeb.'" class="btn btn-default">Más información</a></p>';
					$elemento .=	'</div>';
					$elemento .=	'<div class="col-md-5">';
					$elemento .=		'<img src="'.$imagenDeHerramienta.'"class="img-responsive"/>';
					$elemento .=	'</div>';
					$elemento .=  '</div>';



	}
	$elemento .= '</div>';
	echo $elemento;

?>

