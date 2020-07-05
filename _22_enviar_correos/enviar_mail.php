<?php 

	//El mail solo funciona en vivo, en localhost no podremos enviar el mail.

if ($_POST["nombre"] == "" || $_POST["apellido"] == "" || $_POST["email"] == "" || $_POST["comentarios"] == "" ||) {

	echo "rellena todos los campos!";
	die(); //el programa muere aquí, no hará lo de abajo.
	
}
	$texto_mail = $_POST['comentarios'];
	$destinatario = $_POST['email'];
	$asunto = $_POST['asunto'];

	$headers = "MIME-version: 1.0\r\n";
	$headers.= "Content-type: text/html; charset = iso-8659-1\r\n";
	$headers.= "From: Prueba Juan < curso@pildorasinformaticas.es >\r\n";

	$exito = mail($destinatario, $asunto, $texto_mail,$headers);

	if ($exito) {
		echo "Mensaje enviado con éxito";
	} else {
		echo "Ha habido un error";
	}



 ?>