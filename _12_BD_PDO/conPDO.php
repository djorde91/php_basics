<?php 

	
	try{

	$base= new PDO('mysql:host=localhost; dbname=pruebas', "root", "" );
	echo "Conexion OK";

	}catch(Exception $e){        //UItilizamos un bloque tryCatch para comprobar los errores.

		die('Error:' . $e -> GetMessage() ); //Gett message es una funcion de la clase Exception (showtacktrace() de java.) 

	}finally{         // el bloque finnally se ejecutara siempre, tanto si el try tiene exito como si el catcch captura un error. Aquí se suelen añadir cosas que queremos que se ejecutten si o si independienetemene de lo que ocurra en nuestro try-catch.

		$base= null;  // forma para desconectar la bd? (ALGO RARA)
	}


 ?>