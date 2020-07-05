<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
			img{
				height: 100px;
			}
	</style>
</head>
<body>
	<?php

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

			$consulta ="SELECT * FROM ARCHIVOS WHERE ID ='7' ";

			$resultado = mysqli_query($conexion, $consulta);

			while ($fila = mysqli_fetch_array($resultado) ) {

				$id = $fila["ID"];
				$contenido = $fila["Contenido"];
				$tipo = $fila['Tipo'];
			}

			echo "modificar la consulta para seleccionar un ID distinta, en el WHERE" . '<br>' ;

			echo "Id: " . $id . '<br>';
			echo "Tipo: " . $tipo . '<br>';
			echo "<img src='data:image/jpeg; base64," . base64_encode($contenido) . "'>";

	?>

</body>
</html>