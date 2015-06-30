<?php
	include_once('lectorCSV.php');

	$arrayHerramientas = array(); 
	$arrayHerramientas = loadDataFromCSV("https://docs.google.com/spreadsheets/d/1r_HzzjbG93PYkgZXTz7vwwxR7pCIilCSLb-m3t_rzic/export?format=csv&id=1r_HzzjbG93PYkgZXTz7vwwxR7pCIilCSLb-m3t_rzic");
	$arrayGrupos = array();
	$arrayGrupos = loadDataFromCSV("https://docs.google.com/spreadsheets/d/1wpxEusyVf_MfIX595aI0BIKZnNiW269xii3bLAhNscY/export?format=csv");
//	print_r($arrayHerramientas);
//	print_r($arrayGrupos);
	
	$gruposAñadidos = array();
	$nombreHerramienta;
	$enlaceLogoGrupo;
	$enlaceLogoHerramienta;
	$imagenDeHerramienta;
	$descripcion;
	$enlaceWeb;
	$elemento =  '<div class="container lista-herramientas-totales">';
	for($i=1; $i<sizeof($arrayGrupos); $i++)
	{
		$grupo = $arrayGrupos[$i][0];
		if(!in_array($grupo, $gruposAñadidos)){
			array_push($gruposAñadidos, $grupo);
			$logoGrupo = $arrayGrupos[$i][4];
			$elemento .=  '<div id="cabecera'.$grupo.' class="cabecera-lista-herramientas row">';
			$elemento .=	'<div class="col-md-12">';
			$elemento .=		'<img src="'.$logoGrupo.'"></img>';
			$elemento .=	'</div>';
			$elemento .=  '</div>';
			$elemento .=  '<div id="herramientas'.$grupo.'" class="datos-lista-herramientas">';
		}
		for($j=1; $j < sizeof($arrayHerramientas); $j++) {
			$grupoDeLaHerramienta = $arrayHerramientas[$j][8];
			if(strcmp($grupo,$grupoDeLaHerramienta)==0){
				$nombreHerramienta = $arrayHerramientas[$i][1];
				$enlaceLogoGrupo = $arrayHerramientas[$i][2];
				$enlaceLogoHerramienta = $arrayHerramientas[$i][3];
				$imagenDeHerramienta = $arrayHerramientas[$i][4];
				$descripcion = $arrayHerramientas[$i][5];
				$enlaceWeb = $arrayHerramientas[$i][6];
			//echo $nombreHerramienta.$enlaceLogoHerramienta.$enlaceLogoGrupo.$imagenDeHerramienta.$descripcion.$enlaceWeb;
					$elemento .=  '<div class="row cabecera-de-herramienta-lista">';
					$elemento .=	'<div class="col-md-4 col-xs-6">';
					$elemento .=		'<img src="'.$enlaceLogoHerramienta.'"></img>';
					$elemento .=	'</div>';
					$elemento .= 	'<div class="col-md-8 col-xs-6">';
					$elemento .=		'<p>'.$nombreHerramienta.'</p>';
					$elemento .= 	'</div>';
					$elemento .=  '</div>';
					$elemento .=  '<div class="row datos-de-herramienta-lista">';
					$elemento .=	'<div class="col-md-7">';
					$elemento .=		'<p>'.$descripcion.'</p>';
					$elemento .= 		'<p><a href="'.$enlaceWeb.'" class="btn btn-default">Más información</a></p>';
					$elemento .=	'</div>';
					$elemento .=	'<div class="col-md-5">';
					$elemento .=		'<img src="'.$imagenDeHerramienta.'"class="img-responsive"/>';
					$elemento .=	'</div>';
					$elemento .=  '</div>';
			}
		}
		$elemento .=  '</div>';
	}
	$elemento .= '</div>';
	echo $elemento;
?>

