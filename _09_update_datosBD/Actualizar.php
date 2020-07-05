<?php  

$cod = $_GET["c_art"];
$sec = $_GET["seccion"];
$nom = $_GET["n_art"];
$pre = $_GET["precio"];
$fec = $_GET["fecha"];
$imp = $_GET["importado"];
$por = $_GET["p_orig"];

require("../conexion.php");

			$conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

			if (mysqli_connect_errno() ) { 
				
				exit();  
			}

			mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
			mysqli_set_charset($conexion, "utf8");      


			$consulta = "UPDATE PRODUCTOS SET CÓDIGOARTÍCULO= '$cod', SECCIÓN='$sec', NOMBREARTÍCULO='$nom', PRECIO='$fec', FECHA='$fec', IMPORTADO='$imp', PAÍSDEORIGEN='$por' WHERE CÓDIGOARTÍCULO='$cod'"; 

			$resultados = mysqli_query($conexion, $consulta);

			if ($resultados == false) {
				echo "Error al realizar el inset!";
			}else{
				echo "Registro guardado con éxito.";

				echo "<table> <tr> <td> $cod </td> </tr>";
				echo "<tr> <td> $sec </td> </tr>";
				echo "<tr> <td> $nom </td> </tr>";
				echo "<tr> <td> $pre </td> </tr>";
				echo "<tr> <td> $fec </td> </tr>";
				echo "<tr> <td> $imp </td> </tr>";
				echo "<tr> <td> $por </td> </tr> </table>";
			}

			mysqli_close($conexion);


?>