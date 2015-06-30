<?php
	$to = "aruiz@us.es";
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];
	$mensaje = "De: ".$email." \n". "Para: ".$to."\n"."Asunto: ".$asunto."Mensaje: \n".$mensaje;
	if(mail($to, $asunto, $mensaje))
		header("Location: index.php?error=0");
	else
		header("Location: index.php?error=1");
?>
