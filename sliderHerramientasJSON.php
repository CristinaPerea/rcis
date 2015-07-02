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

	/* Randomizar el slider */
	$numeroTotalDeHerramientas = sizeof($miarray)-1;
	$arrayDeIndices = array();
	for($i = 1; $i <= $numeroTotalDeHerramientas; $i++) {
		$numeroAleatorio = rand(1, $numeroTotalDeHerramientas);
		while(in_array($numeroAleatorio, $arrayDeIndices))
			$numeroAleatorio = rand(1, $numeroTotalDeHerramientas);
		array_push($arrayDeIndices, $numeroAleatorio);
	}
	//print_r($arrayDeIncides);
	//
	$numeroDeHerramientasAMostrarEnSlider = $numeroTotalDeHerramientas;
	//$numeroDeHerramientasAMostrarEnSlider = 2;
	for ($i = 0; $i < $numeroDeHerramientasAMostrarEnSlider; $i++) { 
			$nombreHerramienta = $miarray[$arrayDeIndices[$i]][1];
			$enlaceLogoGrupo = $miarray[$arrayDeIndices[$i]][2];
			$enlaceLogoHerramienta = $miarray[$arrayDeIndices[$i]][3];
			$imagenDeHerramienta = $miarray[$arrayDeIndices[$i]][4];
			$descripcion = $miarray[$arrayDeIndices[$i]][5];
			$enlaceWeb = $miarray[$arrayDeIndices[$i]][6];
			//echo $nombreHerramienta.$enlaceLogoHerramienta.$enlaceLogoGrupo.$imagenDeHerramienta.$descripcion.$enlaceWeb;

					$elemento = '<div class="container item"><div class="slider-fila-1"><div class="slider-logo-1 col-md-6 col-xs-6"><img src="';
					$elemento .= $enlaceLogoHerramienta;
					$elemento .= '" class="img-responsive logos-de-slider"/></div><div class="slider-logo-2 col-md-6 col-xs-6 "><img src="';
					$elemento .= $enlaceLogoGrupo;
					$elemento .= '" class="img-responsive logos-de-slider logo-derecha-slider"/></div></div>';
					$elemento .= '<div class="slider-fila-2"><div class="col-md-6"><img src="';
					$elemento .= $imagenDeHerramienta;
					$elemento .= '"class="img-responsive img-responsive-capturas"/></div><div class="col-md-6"><p 	class="texto-slider-herramientas">';
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