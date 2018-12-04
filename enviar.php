<?php
	$to = "contacto@ngrcomputacion.cl"
	$name = $_REQUEST['nombre'];
	$subject = $_REQUEST['asunto'];
	$email = $_REQUEST['email'];
	$phone = $_REQUEST['telefono'];
	$message = $_REQUEST['mensaje'];
	$headers = "From: $to"."\r\n".
		"Reply-To: $email";

	$name = isset($name) ? "Nombre: $name"."\r\n" : "";
	$subject = isset($subject) ? "Asunto: $subject"."\r\n" : "";
	$email = isset($email) ? "Email: $email"."\r\n" : "";
	$phone = isset($phone) ? "Telefono: $phone"."\r\n" : "";
	$message = isset($message) ? "Mensaje: $message"."\r\n" : "";

	$content = "$name $email $phone $subject $message";

	mail($to, "Correo enviado por la página web", $content, $headers);
?>