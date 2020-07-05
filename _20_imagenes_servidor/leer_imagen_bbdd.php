<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		
		img{
			width: 30%;
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

			$consulta ="SELECT FOTO FROM PRODUCTOS WHERE CÓDIGOARTÍCULO = 'AR01' ";

			$resultado = mysqli_query($conexion, $consulta);

			while ($fila = mysqli_fetch_array($resultado) ) {

				$ruta_img = $fila["FOTO"];
			}

	?>

	<div>
		
		<img src="img/<?php echo $ruta_img ?>" alt='foto_bbdd'>

	</div>
	
</body>
</html>