<?php 
//MIRAR LA API DE PDO en php.net, es muy muy importante. y esta todo bastante bien explicado.
	$busqueda_sec = $_GET ["seccion"];
	$busqueda_porig = $_GET ["p_origen"];
	$contador_consultas = true;

	try{

	$base= new PDO('mysql:host=localhost; dbname=pruebas', "root", "" );

	$base->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // http://php.net/manual/es/pdo.setattribute.php

	$base -> exec("SET CHARACTER SET UTF8");

	$sql= "SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM PRODUCTOS WHERE SECCIÓN = :SECC AND PAÍSDEORIGEN = :PORIG  "; 
	// :SECC Y :PORIG SON MARCADORES  utilizados en consultas.

	$resultado = $base -> prepare ($sql); //el objeto %base llama al metodo prepare que recibe por parametro una instruccion $sql.
	// la funcion prepare devuelve un objeto stmnt (statement) que almacenamos en $resultado.

	//MIRAR API DE PHP.net

	$resultado ->execute(array(":SECC" => $busqueda_sec, ":PORIG" => $busqueda_porig));  

	while ($registro= $resultado-> fetch(PDO::FETCH_ASSOC) ) {  //http://php.net/manual/en/pdostatement.fetch.php
		
		echo "Nombre Articulo" . $registro['NOMBREARTÍCULO'] . " Sección: " . $registro['SECCIÓN'] . " Precio: " . $registro['PRECIO'] . " País de origen: " . $registro['PAÍSDEORIGEN'] . "<br>";
		$contador_consultas = false;

	}

	if ($contador_consultas) {
		echo "La consulta no ha devuelto nada";
	}

	$resultado -> closeCursor();
	

	}catch(Exception $e){  

		die('Error:' . $e -> GetMessage() ); 

	}finally{        

		$base= null;  
	}


 ?>