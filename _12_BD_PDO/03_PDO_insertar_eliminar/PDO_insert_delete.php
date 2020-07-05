<?php 
//MIRAR LA API DE PDO en php.net, es muy muy importante. y esta todo bastante bien explicado.
	$busqueda_cart = $_GET ["c_art"];
	$busqueda_seccion = $_GET ["seccion"];
	$busqueda_nart = $_GET ["n_art"];
	$busqueda_precio = $_GET ["precio"];
	$busqueda_fecha = $_GET ["fecha"];
	$busqueda_importado = $_GET ["importado"];
	$busqueda_porig = $_GET ["p_orig"];


	try{

	$base= new PDO('mysql:host=localhost; dbname=pruebas', "root", "" );

	$base->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // http://php.net/manual/es/pdo.setattribute.php

	$base -> exec("SET CHARACTER SET UTF8");

	$sql= "INSERT INTO PRODUCTOS (CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO, PRECIO, FECHA, IMPORTADO, PAÍSDEORIGEN) values (:COD_ART, :SECC, :N_ART, :PRECIO, :FECHA, :IMPORT, :PORIG ) "; 

	//EN CASO DE QUERER ELIMINAR.
	// $sql = "DELETE FROM PRODUCTOS WHERE CÓDIGOARTÍCULO = :COD_art ";
	
	$resultado = $base -> prepare ($sql);

	 //el objeto %base llama al metodo prepare que recibe por parametro una instruccion $sql.
	// la funcion prepare devuelve un objeto stmnt (statement) que almacenamos en $resultado.

	//MIRAR API DE PHP.net

	$resultado -> execute(array(":COD_ART"=>$busqueda_cart, ":SECC"=> $busqueda_seccion, ":N_ART"=> $busqueda_nart, ":PRECIO"=> $busqueda_precio, ":FECHA"=> $busqueda_fecha, ":IMPORT"=> $busqueda_importado, ":PORIG"=> $busqueda_porig));

	//EN CASO DE QUERER ELIMINAR.
	//$resultado -> execute(array(":COD_art"=>$busqueda_cart)); 


	$resultado -> closeCursor();
	

	}catch(Exception $e){  

		die('Error:' . $e -> GetMessage(). "<br>" . ~$e -> GetLine() ); 

	}finally{        

		$base= null;  
	}


 ?>