<?php
	include_once('lectorCSV.php');

	$arrayHerramientas = array(); 
	$arrayHerramientas = loadDataFromCSV("https://docs.google.com/spreadsheets/d/1r_HzzjbG93PYkgZXTz7vwwxR7pCIilCSLb-m3t_rzic/export?format=csv&id=1r_HzzjbG93PYkgZXTz7vwwxR7pCIilCSLb-m3t_rzic");
	$arrayGrupos = loadDataFromCSV("https://docs.google.com/spreadsheets/d/1wpxEusyVf_MfIX595aI0BIKZnNiW269xii3bLAhNscY/export?format=csv");
	//print_r($arrayHerramientas);

	$nombreHerramienta;
	$enlaceLogoGrupo = "";
	$enlaceLogoHerramienta;
	$imagenDeHerramienta;
	$descripcion;
	$enlaceWeb;
	$siglasGrupo;
	$enlaceLogoUniversidad = "";

	/* Randomizar el slider */
	$numeroTotalDeHerramientas = sizeof($arrayHerramientas)-1;
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
	
	// Si el número de herramientas a mostrar es mayor que las posibles a mostrar, se pone por defecto
	// a numeroTotalDeHerramientas (las mostraría todas)
	if($numeroDeHerramientasAMostrarEnSlider > $numeroTotalDeHerramientas)
		$numeroDeHerramientasAMostrarEnSlider = $numeroTotalDeHerramientas;
	
	for ($i = 0; $i < $numeroDeHerramientasAMostrarEnSlider; $i++) { 
		$nombreHerramienta = $arrayHerramientas[$arrayDeIndices[$i]][1];
		//$enlaceLogoGrupo = $arrayHerramientas[$arrayDeIndices[$i]][2];
		$enlaceLogoHerramienta = $arrayHerramientas[$arrayDeIndices[$i]][9];
		$imagenDeHerramienta = $arrayHerramientas[$arrayDeIndices[$i]][3];
		$descripcion = $arrayHerramientas[$arrayDeIndices[$i]][4];
		$enlaceWeb = $arrayHerramientas[$arrayDeIndices[$i]][5];
		$siglasGrupo = $arrayHerramientas[$arrayDeIndices[$i]][7];

		for($iteGrupo = 1; $iteGrupo < sizeof($arrayGrupos); $iteGrupo++){
			if($siglasGrupo == $arrayGrupos[$iteGrupo][0]){
				$enlaceLogoGrupo = $arrayGrupos[$iteGrupo][5];
				$enlaceLogoUniversidad = $arrayGrupos[$iteGrupo][8];
			}
		}

		if($enlaceLogoGrupo == "")
			$enlaceLogoGrupo = $enlaceLogoUniversidad;

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