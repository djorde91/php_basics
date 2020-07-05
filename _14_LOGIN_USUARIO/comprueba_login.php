<?php 

try {

	$base = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");

	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql="SELECT * FROM usuarios_pass where usuarios = :login and password = :password";

	$resultado = $base->prepare($sql);

	$login=htmlentities(addslashes($_POST["login"]));
	$password=htmlentities(addslashes($_POST["password"]));

	$resultado->bindValue(":login", $login);
	$resultado->bindValue(":password", $password);

	$resultado->execute();

	$numero_registro=$resultado->rowCount();

	if ($numero_registro!=0) {

		session_start();
		$_SESSION["usuario"]=$_POST["login"];
		header("location:usuarios_registrados1.php");
			
	}else{

		header("location:login.php?error");
	}


	
} catch (Exception $e) {

	die ('Error:' . $e->getMessage());
	
}



 ?>