<?php
	include_once('lectorCSV.php');

	$miarray = array(); 
	$miarray = loadDataFromCSV("https://docs.google.com/spreadsheets/d/1r_HzzjbG93PYkgZXTz7vwwxR7pCIilCSLb-m3t_rzic/export?format=csv&id=1r_HzzjbG93PYkgZXTz7vwwxR7pCIilCSLb-m3t_rzic");
	//print_r($miarray);

	$nombreHerramienta;
	$enlaceLogoGrupo;
	$enlaceLogoHerramienta;
	$imagenDeHerramienta;
	$descripcion;
	$enlaceWeb;

	for ($i = 1; $i < sizeof($miarray) ; $i++) { 
			$nombreHerramienta = $miarray[$i][1];
			$enlaceLogoGrupo = $miarray[$i][2];
			$enlaceLogoHerramienta = $miarray[$i][3];
			$imagenDeHerramienta = $miarray[$i][4];
			$descripcion = $miarray[$i][5];
			$enlaceWeb = $miarray[$i][6];
			//echo $nombreHerramienta.$enlaceLogoHerramienta.$enlaceLogoGrupo.$imagenDeHerramienta.$descripcion.$enlaceWeb;

					$elemento = '<div class="container item"><div class="slider-fila-1"><div class="slider-logo-1 col-md-6"><img src="';
					$elemento .= $enlaceLogoHerramienta;
					$elemento .= '" class="img-responsive"/></div><div class="slider-logo-2 col-md-6"><img src="';
					$elemento .= $enlaceLogoGrupo;
					$elemento .= '" class="img-responsive"/></div></div>';
					$elemento .= '<div class="slider-fila-2"><div class="col-md-6"><img src="';
					$elemento .= $imagenDeHerramienta;
					$elemento .= '"class="img-responsive"/></div><div class="col-md-6"><p 	class="texto-slider-herramientas">';
					$temp = $nombreHerramienta.'</p>';
					$elemento .= $temp;
					$elemento .= '<p class="texto-slider-herramientas-descripcion">';
					$elemento .= $descripcion.'</p>'	;
					$elemento .= '<br><br><br><a href="';
					$elemento .= $enlaceWeb;
					$elemento .= '" class="btn btn-default">Más información</a></div></div></div>';
					echo $elemento;

	}

?>