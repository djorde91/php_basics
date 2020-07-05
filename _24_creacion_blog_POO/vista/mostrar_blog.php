<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php 
		include("../modelo/manejo_objetos.php");

		try {

			$miconexion = new PDO('mysql:host=localhost; dbname=bbddblog', 'root', '');
			$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$manejo_objetos= new Manejo_objetos($miconexion);

			$tabla_blog = $manejo_objetos->getContenidoPorFecha();

			if (empty($tabla_blog)) {

				echo "No hay entradas de blog.";
			}else{
				foreach ($tabla_blog as $key) {
					echo "<h3>" . $key->getTitulo() . "</h3>";
					echo "<h4>" . $key->getFecha() . "</h4>";
					echo "<div style='width:400px'>";
					echo $key->getComentario() . "</div>";

					if ($key->getImagen() !="") {
						echo "<img src='../imagenes/";
						echo $key->getImagen() . "'width='300px' height='200px' />";
					}

					echo "<hr>";

				}
			}

		
		}catch (Exception $e) {
		
			die("Error: " . $e->getMessage());
			}

	 ?>

	 <br>

	 <a href="Formulario.php">Volver a la página de inserción</a>
	
</body>
</html>