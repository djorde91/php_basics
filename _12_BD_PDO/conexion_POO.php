<?php 

	$conexion = new mysqli("localhost", "root", "", "pruebas");  //creamos un objeto llamado conexion de tipo mysqli, heredando todas las funciones de la clase mysqli.

	if ($conexion-> connect_errno) { //objeto conexion llama a la propiedad connect_errno perteneciente a la clase mysqli. en java sería  conexion.connect_errno();
		
		echo "Fallo la conexión " . $conexion-> connect_errno;

	}

	//mysqli_set_charset($conexion, "utf8"); //forma procedimental
	$conexion ->set_charset("utf8");
	$sql= "SELECT * FROM PRODUCTOS";

	// $resultados = mysqli_query($conexion, $sql); //forma procedimental

	$resultados = $conexion -> query($sql);

	if ($conexion -> errno) {
		die($conexion->error);
	}

	// while ($fila = mysqli_fecth_array($resultados, MYSQLI_ASSOC)) { } //forma procedimental
echo "<table>";
	while ($fila= $resultados->fetch_assoc() ) {
			
		    echo  "<tr> <td>" . $fila['CÓDIGOARTÍCULO'] . "</td> <td> ";
			echo $fila['NOMBREARTÍCULO'] . "</td> <td> ";
			echo $fila['SECCIÓN'] . "</td> <td> ";
			echo $fila['IMPORTADO'] . "</td> <td> ";
			echo $fila['PRECIO'] . "</td> <td> ";
			echo $fila['PAÍSDEORIGEN'] . "</td> </tr>";
	}
echo "</table>";
	//mysqli_close($conexion);//forma procedimental

	$conexion ->close();
		
	




 ?>