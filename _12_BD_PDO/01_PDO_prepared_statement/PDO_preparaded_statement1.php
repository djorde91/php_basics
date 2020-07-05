<?php 
//MIRAR LA API DE PDO en php.net, es muy muy importante. y esta todo bastante bien explicado.
	$busqueda = $_GET ["buscar"];
	$busqueda2 = $_GET ["buscar2"];
	$contador_consultas = false;

	try{

	$base= new PDO('mysql:host=localhost; dbname=pruebas', "root", "" );

	$base->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // http://php.net/manual/es/pdo.setattribute.php

	$base -> exec("SET CHARACTER SET UTF8");

	$sql= "SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM PRODUCTOS WHERE NOMBREARTÍCULO = ? AND SECCIÓN = ?";

	$resultado = $base -> prepare ($sql); //el objeto %base llama al metodo prepare que recibe por parametro una instruccion $sql.
	// la funcion prepare devuelve un objeto stmnt (statement) que almacenamos en $resultado.

	//MIRAR API DE PHP.net

	$resultado ->execute(array($busqueda, $busqueda2)); //PASARLE a la instruccion SQL por parametro los 2 ingresos del formulario.

	while ($registro= $resultado-> fetch(PDO::FETCH_ASSOC) ) {  //http://php.net/manual/en/pdostatement.fetch.php
		echo "Nombre Articulo" . $registro['NOMBREARTÍCULO'] . " Sección: " . $registro['SECCIÓN'] . " Precio: " . $registro['PRECIO'] . " País de origen: " . $registro['PAÍSDEORIGEN'] . "<br>";
		$contador_consultas= true;
	}

	if ($contador_consultas == false) {
		echo "La busqueda no ha devuelto resultados ";
	}

	$resultado -> closeCursor();
	

	}catch(Exception $e){  

		die('Error:' . $e -> GetMessage() ); 

	}finally{        

		$base= null;  
	}


 ?>