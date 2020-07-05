<?php    //video 49, preparaed statements (consultas preparadas)

//Conexion a BBDD
require("../conexion.php");
			$pais = $_GET["buscar"];

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
$sql = "SELECT CÓDIGOARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM PRODUCTOS WHERE PAÍSDEORIGEN= ?";

$resultado = mysqli_prepare($conexion, $sql);
$ok = mysqli_stmt_bind_param($resultado, "s", $pais); //el segundo parametro indica el tipo de dato del signo "?" de la consulta vinculada al objeto stmt.


$ok = mysqli_stmt_execute($resultado);

if ($ok == false) {
	echo "Error al ejecutar la consulta";

}else{
	$ok= mysqli_stmt_bind_result($resultado, $codigo, $seccion, $precio, $pais);  //SOLO FUNCIONA CON UN SELECT. HAY QUE VINCULAR LOS DATOS DEVUELTOS POR NUESTRA QUERY A VARIABLES. 
	var_dump($ok);
	echo "Articulos encontrados: <br> <br>";

		while (mysqli_stmt_fetch($resultado) == true ) {
			echo $codigo . " " . $seccion . " " . $precio . " " . $pais . "<br>";
		}

		mysqli_stmt_close($resultado);

}
?>