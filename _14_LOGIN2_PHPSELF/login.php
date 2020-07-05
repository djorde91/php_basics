<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<style>
		label{
			padding: 20px;
		}
	</style>
</head>
<body>

<?php
if (isset($_POST["enviar"])) {
 	


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
	
		}else{

			echo "Error. Usuario o contraseña incorrectos";

		}


		
	} catch (Exception $e) {

		die ('Error:' . $e->getMessage());
		
	}

}
 ?>

 <?php 
 if (!isset($_SESSION["usuario"])) {

 	include("formulario_login.php");

 }else{

 	echo "Usuario: " . $_SESSION["usuario"];
 }
 		

  ?>
	

	<?php
			if (isset($_GET['error'])) {
				
				echo "Datos incorrectos";
			}
	 ?>

	 <p>ESTE CONTENIDO SE MUESTRA AL INICIAR SESION Y ELIMINA EL FORMULARIO DE REGISTRO O LOGIN Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente similique vero voluptas ea iste corrupti ipsam, voluptatibus cum nam blanditiis adipisci velit ab cumque voluptatum fugiat veniam, cupiditate voluptates aliquam.</p>
	
</body>
</html>