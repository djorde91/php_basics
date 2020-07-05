<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php 

		$miconexion = mysqli_connect("localhost", "root", "", "bbddblog");

		// Comprobar conexion

		if (!$miconexion) {
			echo "La conexion ha fallado" . mysqli_error();

			exit();
		}

		if ($_FILES['imagen'] ['error']) {	//Mrar la API de $_FILES en la imagen, el campo 'error' muestra diferentes error segun a mostrar segun el valor numerico que adquiera este campo.
			
			switch ($_FILES['imagen'] ['error']) {
				case 1:	//Error exceso de tamaño de archivo en php.ini
					echo "El tamño del archivo excede lo permitido por el servidor.";
					break;

				case 2: //error tamaño archivo marcado desde formulario
					echo "El tamaño del archivo excede 2 MB";
					break;

				case 3: // Archivo corrupto, subido con errores.
					echo "El envío del archivo se interrumpió";
					break;

				case 4: //No hay fichero.
					echo "No se ha enviado ningún archivo.";
					break;

				default:
					# code...
					break;
			}
		}else{
			echo "Entrada subida correctamente.";

			if ( (isset($_FILES['imagen'] ['name']) && ($_FILES['imagen'] ['error'] == UPLOAD_ERR_OK) ) ) {  // UPLOAD_ERR_OK MIRAR LA API de $_FILES, esta constante es igual a 0. Siguiendo la logica de los switch de arriba. error == 0 significa que no hay errores y la imagen se ha subido correctamente.

				$destino_de_ruta="imagenes/";

				move_uploaded_file($_FILES['imagen'] ['tmp_name'], $destino_de_ruta . $_FILES['imagen'] ['name'] );

				echo "El archivo " . $_FILES['imagen'] ['name'] . " Se ha copiado en el directorio de imágenes <br>";
			}else{

				echo "El archivo no se ha podido copiar al directorio de imágenes";
			}
		}

		$eltitulo = $_POST['campo_titulo'];
		$lafecha = date("Y-m-d H:i:s"); // date() detecta la fecha actual.
		$elcomentario = $_POST['area_comentarios'];
		$laimagen= $_FILES['imagen'] ['name'];

		$miconsulta = "INSERT INTO CONTENIDO (Titulo, Fecha, Comentario, Imagen) VALUES ('" . $eltitulo . "','" . $lafecha . "','" . $elcomentario . "','" . $laimagen . "')";

		$resultado = mysqli_query($miconexion, $miconsulta);

		// cerramos la conexion.

		mysqli_close ($miconexion);

		echo "<br> Se ha agregado el comentario con éxito. <br> <br>";


	 ?>
	 <a href="Formulario.php"> Al formulario de ingreso</a> <br>
	 <a href="mostrar_blog.php"> Ver entradas del blog</a>
	
</body>
</html>

