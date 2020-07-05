<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h2>blog</h2>

	<?php

		$miconexion = mysqli_connect('localhost', 'root', '', 'bbddblog');

		if (!$miconexion) {
			echo "Error en la conexion.";
			exit(); //forzamos cierre de la aplicación.
		}

		$miconsulta = "SELECT * FROM CONTENIDO ORDER BY fecha desc";

		if ($resultado = mysqli_query($miconexion, $miconsulta)){

			while ($registro = mysqli_fetch_assoc($resultado)) {

				echo "<h3>" . $registro['Titulo'] . "</h3>";
				echo "<h4>" . $registro['Fecha'] . "</h4>";
				echo "<div style='width:400px'>" . $registro['Comentario'] . "</div> <br> <br>" ;

				if ($registro['Imagen'] != "") {
					
					echo "<img src='imagenes/" . $registro['Imagen'] . " ' width='300px' />";
				}

				echo '<hr>';

			}
		}

	 ?>
	
</body>
</html>