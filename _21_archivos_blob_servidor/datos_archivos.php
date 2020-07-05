<?php 
	//BLOB: Binary Large objects.  sirve para almacenar archivos en nuestras bases de datos, desde pdfs hasta vídeos.

	$nombre_archivo = $_FILES['archivo'] ['name'];
	$tipo_archivo = $_FILES['archivo'] ['type'];
	$tamagno_archivo = $_FILES['archivo'] ['size'];

	echo "Nombre del archivo: " . $nombre_archivo . '<br>';
	echo "Tipo del archivo: " . $tipo_archivo . '<br>';
	echo "Tamanyo del archivo: " . $tamagno_archivo . '<br>';

	if ($tamagno_archivo <= 1000000) { // 1 000 000 de bytes es igual a 1MB.

	$carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/php_curso_pildoras/_21_archivos_blob_servidor/archivos/';

	move_uploaded_file($_FILES['archivo'] ['tmp_name'] , $carpeta_destino.$nombre_archivo);

	}else{
		echo "El tamanyo de la archivo es demasiado grande";
	}



	$db_host = "localhost";
	$db_usuario = "root";
	$db_contra = '';
	$db_nombre = "pruebas";

	$conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

			if (mysqli_connect_errno() ) {

				echo "Fallo al conectar con la BBDD";
				exit();  // Forzamos cierre del programa.	
			}

			mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
			mysqli_set_charset($conexion, "utf8");



			$archivo_objetivo = fopen($carpeta_destino . $nombre_archivo, "r");
			$contenido = fread($archivo_objetivo, $tamagno_archivo);

			$contenido = addslashes($contenido);


			fclose($archivo_objetivo);


			$sql = "INSERT INTO ARCHIVOS (ID, Nombre, Tipo, Contenido) VALUES (0,'$nombre_archivo', '$tipo_archivo', '$contenido') ";

			$resultados = mysqli_query($conexion, $sql);

			if (mysqli_affected_rows($conexion) > 0) {
				echo "Insert correcto";
			}else{
				echo "nope";
			}


 ?>
 <br>
 <a href="leer_archivo_bbdd.php"> leer_archivo_bbdd.php</a>

