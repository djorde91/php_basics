<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php 
	
	require("../conexion.php");
$busqueda =$_GET["buscar"];
	$conexion=mysqli_connect($db_host, $db_usuario, $db_contra);

	if (mysqli_connect_errno()) {

		echo "Fallo al conectar con la BBDD";
		exit();
	}

	mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
	mysqli_set_charset ($conexion, "utf8");

	$consulta = "SELECT * FROM PRODUCTOS WHERE NOMBREARTÍCULO LIKE '%$busqueda%' "; //buscamos todos los productos que tengan caracteres similares a lo que queremos buscar, (DETRAS Y DELANTE).
	$resultados = mysqli_query($conexion, $consulta);

		while ($fila=mysqli_fetch_array ($resultados, MYSQLI_ASSOC) ) {

			echo ' <form action="Actualizar.php" method="get"> ';
			echo " <input type='text' name='c_art' readonly value='" .  $fila['CÓDIGOARTÍCULO'] . " '> <br> ";
			echo " <input type='text' name='n_art' value='" .  $fila['NOMBREARTÍCULO'] . " '> <br> ";
			echo " <input type='text' name='seccion' value='" .  $fila['SECCIÓN'] . " '> <br> ";
			echo " <input type='text' name='importado' value='" .  $fila['IMPORTADO'] . " '> <br> ";			
			echo " <input type='text' name='precio' value='" .  $fila['PRECIO'] . " '>  <br> ";
			echo " <input type='text' name='fecha' value='" .  $fila['FECHA'] . " '> <br> ";
			echo " <input type='text' name='p_orig' value='" .  $fila['PAÍSDEORIGEN'] . " '> <br> ";
									
			echo ' <input type="submit" name="enviando" value="Actualizar!" >';

			echo '<form>';

		}		
				
				mysqli_close($conexion);

 ?>

</body>
</html>