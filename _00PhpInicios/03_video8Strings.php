<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>03_video8Strings</title>

	<style>
		
		.resaltar{
			color: #lightgrey;
			font-weight: bold;
			font-size: 2em;

		}
	</style>
</head>
<body>
	<?php 
	$nombre="Juan";

		echo "<p class= \"resaltar\"> Esto es un ejemplo de frase </p>"; 

		echo "Hola $nombre <br>";
		echo 'Hola $nombre <br>';
		//mecanismos de escape en PHP, iguales a otros lenguajes de programación.

		//la comilla simple toma como literal lo que escribamos
		//la comilla doble entiende y lee las variables

	 ?>

	 <?php 

//Ejemplo strcmp. //IDEAL PARA VERIFICAR CONTRASEÑAS.
	 	$variable1="Casa";
	 	$variable2="CasA";

	 	$resultado=strcmp($variable1, $variable2);
	 	/*strcmp compara ambos strings, y devuelve 0 o 1 si son iguales o no.

		0==true
		1== false

		*/
	 	if ($resultado){ //si resultado es true 
	 		echo "No coinciden $resultado <br>";
	 	}
	 	else{
	 		echo "Coinciden  $resultado <br>";
	 	}

//Ejemplo strcasecmp.
	 	//strcasecmp es lo mismo que strcmp pero sin ser case Sensitive.

	 	$variable3="CASA <br>";
	 	$variable4="Casa <br>";

	 	$resultado2=strcasecmp($variable3, $variable4);
	 
	 	if ($resultado2){ //si resultado es true {
	 		echo "No coinciden $resultado2 <br>";
	 	}
	 	else{
	 		echo "Coinciden $resultado2 <br>";
	 	}

	  ?>
</body>
</html>