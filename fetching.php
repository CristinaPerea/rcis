<?php
		// Generación de participantes
		$miJsonURL = "https://docs.google.com/spreadsheets/d/1wpxEusyVf_MfIX595aI0BIKZnNiW269xii3bLAhNscY/export?format=csv";
		$miJson = file_get_contents($miJsonURL);
		$participantes = 'csvCache/participantes.csv';
		$bytes_escritos_participantes = file_put_contents($participantes, $miJson);
		// Generación de tablaResumen
		$miJsonURL = "https://docs.google.com/uc?authuser=0&id=0B777mNcRbpXNWnhacXBrRjlIU0E&export?format=download";
		$miJson = file_get_contents($miJsonURL);
		$tablaResumen = 'csvCache/tablaResumen.csv';
		$bytes_escritos_tablaResumen = file_put_contents($tablaResumen, $miJson);
		// Generación de tablaTotal
		$miurl="https://docs.google.com/uc?authuser=0&id=0B777mNcRbpXNSGlhdGlYbGpYZTg&export?format=download";
		$miJson = file_get_contents($miurl);
		$tablaTotal = 'csvCache/tablaTotal.csv';
		$bytes_escritos_tablaTotal = file_put_contents($tablaTotal, $miJson);
		// Generación de tools
		$miurl="https://docs.google.com/spreadsheets/d/1r_HzzjbG93PYkgZXTz7vwwxR7pCIilCSLb-m3t_rzic/export?format=csv&id=1r_HzzjbG93PYkgZXTz7vwwxR7pCIilCSLb-m3t_rzic";
		$miJson = file_get_contents($miurl);
		$tools = 'csvCache/tools.csv';
		$bytes_escritos_tools = file_put_contents($tools, $miJson);

		// Generación de grupos
		$miurl="https://docs.google.com/spreadsheets/d/1wpxEusyVf_MfIX595aI0BIKZnNiW269xii3bLAhNscY/export?format=csv";
		$miJson = file_get_contents($miurl);
		$grupos = 'csvCache/grupos.csv';
		$bytes_escritos_grupos = file_put_contents($grupos, $miJson);
		
		$mensaje = "";
		$mensaje .= "Escritos 4 ficheros:<br/>";
		$mensaje .= '<a href="participantes.csv">participantes.csv</a> con '.$bytes_escritos_participantes.' bytes escritos<br/>';
		$mensaje .= '<a href="tablaResumen.csv">tablaResumen.csv</a> con '.$bytes_escritos_tablaResumen.' bytes escritos<br/>';
		$mensaje .= '<a href="tablaTotal.csv">tablaTotal.csv</a> con '.$bytes_escritos_tablaTotal.' bytes escritos<br/>';
		$mensaje .= '<a href="tools.csv">tools.csv</a> con '.$bytes_escritos_tools.' bytes escritos<br/>';
		$mensaje .= '<a href="grupos.csv">grupos.csv</a> con '.$bytes_escritos_grupos.' bytes escritos<br/>';
		$mensaje .= '<a href="index.php">Vuelta a la web</a><br/>';
		if($miJson)
			echo $mensaje;
		else
			echo "Error al leer los CSV";
?>