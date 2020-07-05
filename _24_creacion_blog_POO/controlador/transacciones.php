<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php 

	include ("../modelo/objeto_modelo.php");
	include ("../modelo/manejo_objetos.php");

	try {
		$miconexion = new PDO('mysql:host=localhost; dbname=bbddblog', 'root', '');
		$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	} catch (Exception $e) {
		
		die("Error: " . $e->getMessage());
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

				$destino_de_ruta="../imagenes/";

				move_uploaded_file($_FILES['imagen'] ['tmp_name'], $destino_de_ruta . $_FILES['imagen'] ['name'] );

				echo "El archivo " . $_FILES['imagen'] ['name'] . " Se ha copiado en el directorio de imágenes <br>";
			}else{

				echo "El archivo no se ha podido copiar al directorio de imágenes";
			}
		}

		$manejo_objetos = new Manejo_objetos($miconexion);

		$blog= new Objeto_blog();

		$blog->setTitulo(htmlentities(addslashes($_POST["campo_titulo"]), ENT_QUOTES));
		$blog->setFecha(Date("Y-m-d H:i:s"));
		$blog->setComentario(htmlentities(addslashes($_POST["area_comentarios"]), ENT_QUOTES));
		$blog->setImagen($_FILES["imagen"] ["name"]);

		$manejo_objetos->insertaContenido($blog);

		echo "<br> Entrada de blog agregada con éxito";
	 ?>
	 <a href="../vista/Formulario.php"> Al formulario de ingreso</a> <br>
	 <a href="../vista/mostrar_blog.php"> Ver entradas del blog</a>
	
</body>
</html>

