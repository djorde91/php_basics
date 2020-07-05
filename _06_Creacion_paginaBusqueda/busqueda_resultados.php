<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php 
 //creamos la función.
function ejecuta_consulta($labusqueda){

	require("../conexion.php");

	$conexion=mysqli_connect($db_host, $db_usuario, $db_contra);

	if (mysqli_connect_errno()) {

		echo "Fallo al conectar con la BBDD";
		exit();
	}

	mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
	mysqli_set_charset ($conexion, "utf8");

	$consulta = "SELECT * FROM PRODUCTOS WHERE NOMBREARTÍCULO LIKE '%$labusqueda'% "; //buscamos todos los productos que tengan caracteres similares a lo que queremos buscar, (DETRAS Y DELANTE).
	$resultados = mysqli_query($conexion, $consulta);

			echo "<table>";
		while ($fila=mysqli_fetch_array ($resultados, MYSQLI_ASSOC) ) {
			echo  "<tr> <td>" . $fila['CÓDIGOARTÍCULO'] . "</td> <td> ";
			echo $fila['NOMBREARTÍCULO'] . "</td> <td> ";
			echo $fila['SECCIÓN'] . "</td> <td> ";
			echo $fila['IMPORTADO'] . "</td> <td> ";
			echo $fila['PRECIO'] . "</td> <td> ";
			echo $fila['PAÍSDEORIGEN'] . "</td> </tr>";

		}
			echo "</table>";
				
				mysql_close($conexion);
		}

 ?>

<?php  
	$mibusqueda = $_GET ["buscar"]; //EN REAL este error no se mostrará. Por defecto mibusqueda no puede obtener un valor del formulario, entonces nos mostrará un error en localhost, error que no afecta en absoluto a la ejecución de nuestro programa. 

	$mipag=$_SERVER["PHP_SELF"];

	if ($mibusqueda!= NULL) {
		
			ejecuta_consulta($mibusqueda);
	}
	else{
		echo '
		<form action=' . "$mipag" . 'method="get">      
	
		<label for="buscar"> Buscar</label>
		<input type="text" name="buscar">
		<input type="submit" name="Enviar" value="Buscar"> 
		</form>';
	}
		

	?>
</body>
</html>