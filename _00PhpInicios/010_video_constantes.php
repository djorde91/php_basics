<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>video10. Constantes</title>
</head>
<body>
	
</body>
</html>

<?php 

// el nombre de las constantes (por convenio) se ponen en mayusculas. 
// no llevan el simbolo $.
//se definen utilizando la función define().
//el ámbito de las constantes es global por defecto.
// las constantes no se pueden redifinir.// es como una variable final.
//solo pueden almacenar valores escalares. valores que no se puede dividir en partes más pequeñas. (un string, un int, un boolean....)
//UN ARRAY NO se puede almacenar en en una constante


define("AUTOR", "Juan", true);  // constante AUTOR con valor "juan"
define("AUTOR", "María"); 

echo AUTOR . "<br>";
echo "El autor es AUTOR <br>"; //esto no funciona, con las variables sí. aquí deberiamos concatenar 
echo "El autor es:" . AUTOR . "<br>";
echo "El autor es:" . autor . "<br>";


 ?>

 <?php 
//Existen constantes predefinidas "mágicas" de varios usos.

 echo "La línea de esta instruccion es: " . __LINE__ . "<br>";

  echo "Nombre del fichero: " . __FILE__ . "<br>";



  ?>