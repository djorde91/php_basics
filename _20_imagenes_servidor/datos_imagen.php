<?php 
	//Cuando descargamos o subimos una imagen de/a internet, primeramente se crea una descarga temporal de esta imagen (tmp); seguidamente dependiendo de sí queremos guardar la imagen o no, se mueve la imagen de la carpeta temporal a nuestra carpeta destino.  en PHP y la manipulación de imagenes este proceso se hace de la siguiente forma.

	$nombre_imagen = $_FILES['imagen'] ['name'];
	$tipo_imagen = $_FILES['imagen'] ['type'];
	$tamagno_imagen = $_FILES['imagen'] ['size'];

	echo "Nombre de la imagen: " . $nombre_imagen . '<br>';
	echo "Tipo de la imagen: " . $tipo_imagen . '<br>';
	echo "Tamanyo de la imagen: " . $tamagno_imagen . '<br>';

	if ($tamagno_imagen <= 1000000) { // 1 000 000 de bytes es igual a 1MB.
		if ($tipo_imagen=="image/jpeg" || $tipo_imagen=="image/jpg" || $tipo_imagen=="image/gif" || $tipo_imagen=="image/png") {
			
	$carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/php_curso_pildoras/_20_imagenes_servidor/img/';

	//desplazamos la imagen de la carpeta temporal a la carpeta destino.
	move_uploaded_file($_FILES['imagen'] ['tmp_name'] , $carpeta_destino.$nombre_imagen);
	}else {
		echo "Solo se pueden subir imágenes en formato jpg/jpeg/png/gif";
	}

}else{
	echo "El tamanyo de la imagen es demasiado grande";
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

			$sql = "UPDATE PRODUCTOS SET FOTO = '$nombre_imagen' WHERE CÓDIGOARTÍCULO = 'AR01' ";

			$resultados = mysqli_query($conexion, $sql);

			if ($resultados) {
				echo "Insert correcto";
			}else{
				echo "nope";
			}

 ?>