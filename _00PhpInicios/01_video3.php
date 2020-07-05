<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>01_Vídeo3</title>
</head>
<body>

	<?php 
		print "Bienvenidos al curso de PHP <br>";
		print "Hola alumnos";
		print "Hasta el próximo video";

		$nombre = "Juan";
		/* en php no es necesario indicar el tipo de dato que va a almacenar una variable */

		$edad = 18;
		print "El nombre del usuario es $nombre <br>"  ;
		print $nombre.$edad."<br>";

		echo "el nombre es " . $nombre . " y tiene " .$edad . "años". "<br>";

		echo $nombre, $edad; //Echo permite utilizar comas para ir mostrando variables NO ESTAMOS CONCATENANDO.
		//print es una función
		//Echo es una expresión
		//Generalmente se utiliza echo. (es más eficiente)
	

		include("02_video5Include.php"); //llamamos al contenido de video5Include.php;

		// require("asfaksfhahfa.php") 
		//Require es parecido a include, la diferencia principal es que si el archivo de require no se encuentra todo el código que haya a continuación no se ejecuará.
		
	funcion1();
	 ?>
	
</body>
</html>