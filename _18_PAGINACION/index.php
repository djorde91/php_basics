<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php
	try {

		$base = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$base->exec("SET CHARACTER SET utf8");


		//consultas_por_pagina es el numero total de filas a mostrar en cada página, pondremos el que queramos, las paginas creceran dinamicamente.
		$consultas_por_pagina= 3;
			//si el usuario es la primera vez que entra en la pagina, pagina valdra 1, con lo cual mostramos las n primeras consultas.
		if (isset($_GET["pagina"])) {
			
		
			if ($_GET["pagina"]==1) {
				header("Location:index.php");
			}else{
				$pagina=$_GET["pagina"];
			}

		}else{
			$pagina = 1;
		}

			//calculo sencillo para cambiar dinamicamente las consultas que se van a ir mostrando, ajustadas a cada pagina.
		$empezar_desde = ($pagina -1 ) * $consultas_por_pagina;	



		// hacemos una consulta para obtener el número total de filas (esto no se va a mostrar por pantalla)
		$sql_total = "SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM PRODUCTOS WHERE SECCIÓN= 'DEPORTES' ";
		//Con LIMIT solo mostramos los 3 primeros.

		$resultado = $base->prepare($sql_total);
		$resultado->execute(array());

		$num_filas = $resultado->rowCount(); //contamos las filas de la consulta.

		$total_paginas = ceil($num_filas/$consultas_por_pagina); //la función ceil redondea el resultado.

		echo "Número de registros de la consulta: " . $num_filas . "<br>";

		echo "Mostramos " . $consultas_por_pagina . " registros por página <br>";

		echo "Mostrando la página" . $pagina . " de " . $total_paginas . "<br> <br>"; 

		$resultado->closeCursor();




		// Creamos, recorremos y mostramos la consulta, mostrando unicamente unas pocas filas, Esto se decide en el LIMIT, utilizando las variables $empezar_desde y $consultas_por_pagina como delimitadores.
		$sql_limite = "SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM PRODUCTOS WHERE SECCIÓN= 'DEPORTES' LIMIT $empezar_desde,$consultas_por_pagina ";

		$resultado2 = $base->prepare($sql_limite);
		$resultado2->execute(array());

		while($registro2 = $resultado2->fetch(PDO::FETCH_ASSOC)){
			echo "Nombre Artículo: " . $registro2["NOMBREARTÍCULO"] . " Sección: " . $registro2["SECCIÓN"] . " Precio: " . $registro2["PRECIO"] . " País de origen: " . $registro2["PAÍSDEORIGEN"];
			echo "<br>";
		}
		
	} catch (Exception $e) {
		echo "Línea de error: " . $e->getLine(). "<br>";
		echo "Mensaje de error: " . $e->getMessage();
	}

// PAGINACIÓN --------------------------------------------------
	for ($i=1; $i <=$total_paginas ; $i++) { 
		echo "<a href='?pagina=$i'> $i </a> ";
	}

  ?>
</body>
</html>