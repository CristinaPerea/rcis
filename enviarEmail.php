<?php
	$to = "aruiz@us.es";
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];
	$mensaje = "De ".$email." \n"."Mensaje: \n".$mensaje;
	if(mail($to, $asunto, $mensaje))
		header("Location: errorlogin.php");
	else
		header("Location: www.google.es");
?>
