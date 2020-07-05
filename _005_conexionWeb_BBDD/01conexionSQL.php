<!DOCTYPE html>    <!-- VIDEOS 36-37-38 MUY UTILES -->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

<style>
	table {
		width: 80%;
		background-color: lightgreen;
		border: 1px solid black;
		margin: auto;
	}
	td{
		border: 1px solid black;
		padding: 5px;
	}
</style>
</head>
<body>
<?php  
	echo "mysqli_fetch_array() es MUY util, y sus parametros permiten mostrar la informacion extraida de una tabla en forma de array asociativo o array numerico.  <a href= 'http://php.net/manual/en/function.mysql-fetch-array.php'> INFO MYSQL_FETCH_ARRAY()</a> <br> ";
	?>





	<?php 
			require("conexion.php");

			$conexion = mysqli_connect($db_host, $db_usuario, $db_contra);//,/$d_nombre );



			if (mysqli_connect_errno() ) { //mysqli_connect_errno() saltará si hay fallo al conectarnos con la base de datos.
				echo "Fallo al conectar con la BBDD";
				
				exit();  // Forzamos cierre del programa.	
			}
			mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
			mysqli_set_charset($conexion, "utf8");      // hacemos que los datos motrados sigan este charset. (para evitar problemas con acentos por ejemplo)


			$consulta = "SELECT * FROM productos where paísdeorigen = 'España' "; //Esto es igual que SQL, aqui podemos filtrar lo que queremos mostrar./seleccionar.
			$resultados = mysqli_query($conexion, $consulta);
			// $fila = mysqli_fetch_row($resultados); //mysql_fetch_row crea un array con los datos de la PRIMERA fila (registro) de las tablas buscadas en la query de $resultados. Si la llamamos otra vez leera el segundo registro(fila).

			echo "<br>";
			echo "<table>";
			$contadorB = 1;
			while ( ($fila = mysqli_fetch_row($resultados)) == true) { 
			//De esta forma recorremos todas las filas y las mostramos por pantalla, 
				if ($contadorB ==1) { //ignoramos esto, unicamente queremos ver el valor de fetch_row.
					var_dump($fila = mysqli_fetch_row($resultados));
					$contadorB++;
				}
				echo "<tr>";
				for ($i=0; $i < count($fila); $i++) { 

						if ($i == (count($fila) -1) ) {  //la ultima columna de la fila es NULL (mirar la BBDD en phpadmin, para que no se dibuje hacemos este IF.)

							break;
						}
					echo "<td>". $fila[$i] . "</td>";
				}
				echo "</tr>";	
				 //mostramos los resultados en una tabla creada con html, echos y bucles.		
			} 
			echo " </table>"; 



// USO DE ARRAY ASOCIATIVO utilizando mysql_fetch_array() PARA EXTRAER INFORMACION DE LA TABLA.
			echo "<br> <br> <br>";
$resultados = mysqli_query($conexion, $consulta); //HAY QUE REALIXAR OTRA QUERY PARA MOSTRAR DATOS OTRA VEZ.
			echo "<table>";
			$contador =1;
			while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC) )
			{ 

				//la parte del contador es simplemente para ver el var_dump una vez. 
				if ($contador == 1) {
					var_dump(mysqli_fetch_array($resultados, MYSQLI_ASSOC));
					$contador++;
				}
				
				
				echo "<tr>";
						
					echo "<td>". $fila['CÓDIGOARTÍCULO'] . "</td>";
					echo "<td>". $fila['NOMBREARTÍCULO'] . "</td>";
					echo "<td>". $fila['PAÍSDEORIGEN'] . "</td>";
				
				echo "</tr>";	
				 //mostramos los resultados en una tabla creada con html, echos y bucles.		
		}

			echo " </table>";
	 ?>
	
</body>
</html>