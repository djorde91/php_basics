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

	<h1>Introduce tus datos</h1>
	<form action="comprueba_login.php" method="post">
		<label for="login">Login: </label>
		<input type="text" name="login"><br>

		<label for="password">Contraseña: </label>
		<input type="password" name="password"> <br>

		<label for="enviar">LOGEAR! </label>
		<input type="submit" name="enviar"> <br>
	</form>

	<?php
			if (isset($_GET['error'])) {
				
				echo "Datos incorrectos";
			}
	 ?>
	
</body>
</html>