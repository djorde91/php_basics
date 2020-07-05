<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>014FuncionesMatematicas_Casting</title>
</head>
<body>
	<?php 
			//algunas funciones matematicas.
	$num1= rand(10,50);
	echo "El número es: " . $num1 . "<br>";

	$num2 = pow(5, 3);
	echo $num2 . "<br>";

	$num3 = 5.25;
	echo "El numero es: " . round($num3) . "<br>";

	$num4 = 5.25;
	echo "El numero es: " . round($num4, 2) . "<br>";


	//en PHP el casting es implicito, y el manejo de tipos como ya estamos viendo, es muchisimo más sencillo. A diferencia de java que es mucho mas complejo. 

	$num5 = "5";
	$num5 = $num5 +2; 
	echo "El número con casting es: " . $num5 . "<br>";//estamos sumando 5 (STRING) con un 2 INT. y esto es totalmente válido.    Esto se llama casting implicito y es una gran ventaja que ofrece PHP.


	$num6 = "6";
	$resultado = (int)$num6;  //Casting explicito $resultado == 6 INT
	echo "El número es $resultado <br>";


	$resultado2 = $num6 + $num5; //estamos sumando dos strings, el casting es implicito y nos da un valor correcto 13. (no es necesario realizar parseINT (o eso creo) )
	echo "El número es $resultado2";




 ?>

</body>
</html>