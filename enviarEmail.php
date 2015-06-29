<?php
	print("Hola Mundo");
	$to = "cperea@us.es";
	echo $to;
	$nombre = $_POST['nombre'];
	echo $nombre;
	$email = $_POST['email'];
	echo $email;
	$asunto = $_POST['asunto'];
	echo $asunto;
	$mensaje = $_POST['mensaje'];
	$mensaje = "De ".$email." <br>"."Mensaje: <br>".$mensaje;
	echo $mensaje;
	if(mail($to, $asunto, $mensaje))
		header("Location: errorlogin.php");
	else
		header("Location: www.google.es");
?>
