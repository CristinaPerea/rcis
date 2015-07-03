<?php
	$para = 'pablofm@us.es';
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];
	$cabeceras = 'From: '.$nombre.' ('.$email.')' "\r\n";

	if(mail($para, $nombre, $asunto, $mensaje, $cabeceras))
		header("Location: index.php?error=0");
	else
		header("Location: index.php?error=1");
?>