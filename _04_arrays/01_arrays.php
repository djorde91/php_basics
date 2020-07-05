<!-- Arrays indexados -->
<?php 
	  // EN PHP no hace falta indicar el indice, php da por supuesto la posición de cada elemento según el orden de declaración.
	$semana[0]= "Lunes";
	$semana[]= "Martes";
	$semana[2]= "Miércoles";
	$semana[3]= "Jueves";

	echo $semana[1]. "<br>";

	$dias = array(true,"Martes", 3);   //true== 1  false == 0;

	echo $dias[2] . "<br>";

 // como podemos ver, a diferencia de otros lenguajes de programación, en PHP no es necesario especificar el dato que almacenara el array, puede almacenar cualquier tipo.
 ?>


<!-- Arrays asociativos -->
<?php 
		
	$datos= array("Nombre" =>"Juan", "Apellido" =>"Gomez", "Edad" => 21);
	echo $datos["Apellido"]. "<br>";
	$datos["País"] = "España"; // agregar mas elementos a un array asociativo.

	// Este tipo de arrays esta pensado para gestionar información con bases de datos. En un array de este tipo, podríamos almacenar información personal de un usuario de una forma muy sencilla.
?>



<!-- is_array -->
<?php 
	
	if (is_array($datos) == true) { //is_array sirve para comprobar si la variable introducida es un array.
		echo "Es un array <br>";
	}
	else{
		echo "No es un array <br>";
	}

 ?>


<!-- Recorrer array asociativo. -->
 <?php 
 		// Normalmente se utiliza un for para recorrer un array. El problema es que las posiciones de los arrays asociativos no tienen una longitud que podamos definir, ya que las posiciones tienen nombres definidos.
 		// Para recorrerlos se utiliza el bucle foreach pero también podemos utilzizar un for,


//ARRAY ASOCIATIVO CON BUCLE FOR.
 $array = array('key1' => 'value1', 'key2' => 'value2'); 

$keys = array_keys($array);

for($i=0; $i < count($keys); ++$i) {
    echo $keys[$i] . ' ' . $array[$keys[$i]] . "<br>";
}

//array asociativo con bucle foreach. (bastante más sencillo)
	foreach ($datos as $key_inventada => $value_inventado) {
		echo "a $key_inventada le corresponda $value_inventado <br>";
	}
		echo "<br>";
  ?>


<!-- Recorrer array indexado -->
 <?php 

 for ($i=0; $i < count($semana) ; $i++) { 
 	echo "$semana[$i] <br>";
 }
echo "<br>";

  ?>



<!-- Ordenar Arrays -->
  <?php 
  			sort($semana);  //ordena el array por orden alfabetico.
  		for ($i=0; $i <count($semana) ; $i++) { 
  			echo "$semana[$i] <br>";
  		}

   ?>