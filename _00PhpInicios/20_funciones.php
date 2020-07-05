<?php 

	function frase_mayus ($frase, $conversion=true){  //Conversion es un argumento por defecto, solo se usa en PHP.

		$frase = strtolower($frase);

		if ($conversion==true) {
			
			$resultado = ucwords ($frase);
		}
		else {
			$resultado = strtoupper($frase);
		}

		return $resultado;
	}

	echo frase_mayus("esto es una prueba <br>");//,false or true.); 
	//no le estamos pasando el segundo argumento, entonces se coje por defecto el que esta en los parametros de la declaración de la función. Es decir true.


 ?>


<!-- Parametros por referencia.  Por defecto siempre son por  valor. -->
<?php 
	//el simbolo & indica que es un parametro por referencia. VIDEO 21 MIN 09:00-11:00 explicación.
	function incrementa (&$valor1){ //eliminar el & para ver que ocurre.

		$valor1++;
		return $valor1;
	}

	$numero = 5;
	echo incrementa($numero). "<br>";
	echo "$numero <br>";// numero es 6 por que el parametro de valor1 esta pasado por referencia. si no, sería 5


 ?>



 <?php 
function cambia_mayus (&$param){ //eliminar & para ver que ocurre. (eliminamos el parametro por referencia.)

	$param = strtolower($param);
	$param = ucwords($param);

	return $param;

}

$cadena = "HOlA mUndO";

echo cambia_mayus($cadena) . "<br>";
echo $cadena;



  ?>