<?php 
	require_once("devuelveProductos.php");

   $buscar = isset($_GET['pais']) ? $_GET['pais'] : "VALOR POR DEFECTO"; 
   //Operador ternario para asignar un valor por defecto a nuestro $_GET['pais'] así no dara error cuando este sea NULL. Si el isset es FALSE le dará un valor por defecto llamado DEFAULT, si es true funcionara de forma normal recogiendo el valor ingresado en el formulario. 

	/*EL if que vemos a continuación hace exactamente lo mismo.

   if ($buscar = isset($_GET['pais'])) {
   		$buscar= $_GET['pais'];
   }else{
   	$buscar = "VALOR POR DEFECTO";
   } */

	$prod = new DevuelveProductos();

	$array_productos= $prod-> get_productos();
	$array_productos2 = $prod-> get_productos_pais($buscar);

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>

 	<form action="index.php" method = "get" > 
		buscar pais: <input type="text" name="pais">
		<input type="submit" name="buscar" value="buscar">
 	</form>

 	<?php 
 			echo "<table> <tr> <td>";
 		foreach($array_productos as $elemento){

 			echo $elemento['CÓDIGOARTÍCULO'] . '</td> <td>' ;
 			echo $elemento['NOMBREARTÍCULO'] . '</td> <td>' ;
 			echo $elemento['SECCIÓN'] . '</td> <td>' ;
 			echo $elemento['PRECIO'] . '</td> <td>' ;
 			echo $elemento['FECHA'] . '</td> <td>' ;
 			echo $elemento['IMPORTADO'] . '</td> <td>' ;
 			echo $elemento['PAÍSDEORIGEN'] . '</td> </tr> <td>' ;
 		}

 		echo "</table>"; 

 		echo "<br> <br> SEGUNDA TABLA OBTENIDA AL REALIZAR UNA BUSQUEDA FILTRANDO POR PAIS DE ORIGEN";
 		echo "<table> <tr> <td>";
 		foreach($array_productos2 as $elemento2){

 			echo $elemento2['CÓDIGOARTÍCULO'] . '</td> <td>' ;
 			echo $elemento2['NOMBREARTÍCULO'] . '</td> <td>' ;
 			echo $elemento2['SECCIÓN'] . '</td> <td>' ;
 			echo $elemento2['PRECIO'] . '</td> <td>' ;
 			echo $elemento2['FECHA'] . '</td> <td>' ;
 			echo $elemento2['IMPORTADO'] . '</td> <td>' ;
 			echo $elemento2['PAÍSDEORIGEN'] . '</td> </tr> <td>' ;
 		}

 		echo "</table>";

 	 ?>
 	
 </body>
 </html>