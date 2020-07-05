<?php   //video 47-49 pildoras PHP inyeccion.
require("../conexion.php");

			$conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

			$usuario = mysqli_real_escape_string( $conexion, $_GET["usu"] ); 
			$contra = $_GET["con"];
//mysqli::real_escape_string -- mysqli_real_escape_string — Escapa los caracteres especiales de una cadena para usarla en una sentencia SQL, tomando en cuenta el conjunto de caracteres actual de la conexión
// esto evita que se puedan generar inyecciones usando caracteres como '' o "" para crear concatenaciones de sentencias.
			if (mysqli_connect_errno() ) { 
				
				exit();  
			}

			mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
			mysqli_set_charset($conexion, "utf8");      


			$consulta = "DELETE FROM usuarios WHERE nombre = '$usuario' AND contrasenya = '$contra' "; 

			$resultados = mysqli_query($conexion, $consulta);
			echo "$consulta <br>";

			if ($resultados == false) {
				echo "Error al realizar el inset!";
			}else{

				if (mysqli_affected_rows($conexion) == 0) {
					echo "no hay registros que eliminar con ese criterio";
				}else{

					echo "Se han eliminado " . mysqli_affected_rows($conexion). " registros";
				}

			}
			var_dump(mysqli_query($conexion, $consulta));
			mysqli_close($conexion);