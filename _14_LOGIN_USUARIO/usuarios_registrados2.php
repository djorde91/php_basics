<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php session_start(); 
		if (!isset($_SESSION["usuario"])) {
			header("Location:login.php");
			

		}
		echo" <h1>Bienvenido/a ". $_SESSION['usuario'] . "</h1>";
?>

	<p>PAGINA 22222</p>
<a href="cerrar_sesion.php">cerrar sesion</a>
	<div>
		<a href="usuarios_registrados1.php">PÁGINA1</a>
		<a href="usuarios_registrados3.php">PÁGINA3</a>
		<a href="usuarios_registrados4.php">PÁGINA4</a>
	</div>
	
</body>
</html>