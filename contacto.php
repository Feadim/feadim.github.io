<?php
	
// "nombre":nombre.value,
			// "empresa":empresa.value,
			// "email":email.value,
			// "telefono":telefono.value,
			// "consulta":consulta.value
// if ($response != null && $response->success) {
	$nombre    = $_POST['nombre'];
	$empresa     = $_POST['empresa'];
	$mensaje   = $_POST['consulta'];
	$email   = $_POST['email'];
	$telefono   = $_POST['telefono'];
	$para      = 'pablo@primedevelopers.cl';
	$titulo    = 'Mensaje desde www.legalsur.cl';
	$header    = 'From: '.$email.' ';
	$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n telefono: $telefono\n empresa: $empresa\n Mensaje:\n $mensaje";
	if(!empty($mensaje) && !empty($empresa) && !empty($email))
	{
		mail($para, $titulo, $msjCorreo, $header);
	}
	
// } 

// $nombre = $_POST['nombre'];
// $email = $_POST['email'];
// $mensaje = $_POST['mensaje'];
// $para = 'pojeda@primedevelopers.cl';
// $titulo = 'ASUNTO DEL MENSAJE';
// $header = 'From: '.$email.' ';
// $msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
// mail($para, $titulo, $msjCorreo, $header);
?>