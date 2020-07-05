<?php    //video 49, preparaed statements (consultas preparadas)

//Conexion a BBDD
require("../../conexion.php");
			$c_art = $_GET["c_art"]; //el nombre de la variable es indiferente.
			$secc = $_GET["secc"];
			$n_art = $_GET["n_art"];
			$pre = $_GET["pre"];
			$fec = $_GET["fec"];
			$imp = $_GET["imp"];
			$p_ori = $_GET["p_ori"];

			$conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

			if (mysqli_connect_errno() ) { 
				echo "Fallo al conectar con la BBDD";
				exit();  
			}

			mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
			mysqli_set_charset($conexion, "utf8"); 



?>
				<!-- Prepared statement. -->

<?php  
$sql = " INSERT INTO PRODUCTOS (CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO, PRECIO, FECHA, IMPORTADO, PAÍSDEORIGEN) VALUES (?,?,?,?,?,?,?) ";

$resultado = mysqli_prepare($conexion, $sql);

$ok = mysqli_stmt_bind_param($resultado, "sssssss", $c_art,$secc, $n_art, $pre, $fec, $imp, $p_ori);


$ok = mysqli_stmt_execute($resultado);

if ($ok == false) {
	echo "Error al ejecutar la consulta";

}else{
	// $ok= mysqli_stmt_bind_result($resultado, $c_art, $secc, $n_art,  $pre, $fec, $imp, $p_ori );  //La query no devuelve ningun resultado, por que estamos realizando un insert, por lo tanto el bind_result no funciona. (solo sirve con los selects.)

	echo "Agregado nuevo registro: <br> <br>";

				echo "Registro guardado con éxito.";

				echo "<table> <tr> <td> $c_art </td> </tr>";
				echo "<tr> <td> $pre </td> </tr>";
				echo "<tr> <td> $secc </td> </tr>";
				echo "<tr> <td> $n_art </td> </tr>";
				echo "<tr> <td> $fec </td> </tr>";
				echo "<tr> <td> $imp </td> </tr>";
				echo "<tr> <td> $p_ori </td> </tr> </table>";

}
	mysqli_stmt_close($resultado);
?>