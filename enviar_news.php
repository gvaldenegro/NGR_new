<?php
	$to = "contacto@ngrcomputacion.cl";
	$email = $_REQUEST['email'];
	$headers = "From: $to"."\r\n".
		"Reply-To: $email";

	$content = "El correo $email quiere suscribirse al newsletter";

	mail($to, "Suscripción al newsletter", $content, $headers);
?>