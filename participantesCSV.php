<?php
	include_once('lectorCSV.php');
	$arrayGrupos = array();
	// CSV de Grupos
	$arrayGrupos = loadDataFromCSV("https://docs.google.com/spreadsheets/d/1wpxEusyVf_MfIX595aI0BIKZnNiW269xii3bLAhNscY/export?format=csv");
	//print_r($arrayGrupos);

	
	$siglasInstitucion;
	$nombreInstitucion;
	$nombreCoordinador;
	$enlaceInstitucion;
	$logoPequeñoInstitucion;
	$logoGrandeInstitucion;
	$siglasUniversidad;
	$nombreUniversidad;
	$enlaceUniversidad;
	$logoUniversidad;

	$siglasInstitucion2;
	$nombreInstitucion2;
	$nombreCoordinador2;
	$enlaceInstitucion2;
	$logoPequeñoInstitucion2;
	$logoGrandeInstitucion2;
	$siglasUniversidad2;
	$nombreUniversidad2;
	$enlaceUniversidad2;
	$logoUniversidad2;

	for ($i = 1; $i < sizeof($arrayGrupos) ; $i+=2) { 

			$siglasInstitucion = $arrayGrupos[$i][0];
			$nombreInstitucion = $arrayGrupos[$i][1];
			$nombreCoordinador = $arrayGrupos[$i][2];
			$enlaceInstitucion = $arrayGrupos[$i][3];
			$logoPequeñoInstitucion = $arrayGrupos[$i][4];
			$logoGrandeInstitucion = $arrayGrupos[$i][5];
			$siglasUniversidad = $arrayGrupos[$i][6];
			$nombreUniversidad = $arrayGrupos[$i][7];
			$enlaceUniversidad = $arrayGrupos[$i][9];
			$logoUniversidad= $arrayGrupos[$i][8];
		
		if($i+1 != sizeof($arrayGrupos)){

			$siglasInstitucion2 = $arrayGrupos[$i+1][0];
			$nombreInstitucion2 = $arrayGrupos[$i+1][1];
			$nombreCoordinador2 = $arrayGrupos[$i+1][2];
			$enlaceInstitucion2= $arrayGrupos[$i+1][3];
			$logoPequeñoInstitucion2 = $arrayGrupos[$i+1][4];
			$logoGrandeInstitucion2 = $arrayGrupos[$i+1][5];
			$siglasUniversidad2 = $arrayGrupos[$i+1][6];
			$nombreUniversidad2 = $arrayGrupos[$i+1][7];
			$enlaceUniversidad2 = $arrayGrupos[$i+1][9];
			$logoUniversidad2= $arrayGrupos[$i+1][8];

			//echo $siglasInstitucion.$nombreInstitucion.$nombreCoordinador.$enlaceInstitucion.$logoPequeñoInstitucion.$logoGrandeInstitucion.$siglasUniversidad.$nombreUniversidad.$enlaceUniversidad.$logoUniversidad;
					$elemento = 		'<div class="row vcenter text-center">';
		            $elemento .=			 '<div class="col-md-6 col-xs-12">';
		            $elemento .=                 '<div class="col-md-10 col-sm-10 col-xs-10"><h5>'.$nombreInstitucion.'</h5><h6>'.$nombreCoordinador.'</h6></div>';
		            $elemento .=                 '<div class="col-md-2 col-sm-2 col-xs-2"><img class="imagenes-logo" src="'.$logoUniversidad.'" alt=""></div>';
		            $elemento .=             '</div>';
		            $elemento .=			 '<div class="col-md-6 col-xs-12">';
                    $elemento .=				 '<div class="col-md-2 col-sm-2 col-xs-2"><img class="imagenes-logo" src="'.$logoUniversidad2.'" alt=""></div>';
                    $elemento .=				 '<div class="col-md-10 col-sm-10 col-xs-10"><h5>'.$nombreInstitucion2.'</h5><h6>'.$nombreCoordinador2.'</h6></div>';
                    $elemento .= 			 '</div>';
					$elemento .= 		'</div>';
		}
		            echo $elemento;
	}


?>