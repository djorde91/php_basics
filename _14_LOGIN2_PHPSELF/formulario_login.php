<h1>Introduce tus datos</h1>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<label for="login">Login: </label>
		<input type="text" name="login"><br>

		<label for="password">Contraseña: </label>
		<input type="password" name="password"> <br>

		<label for="enviar">LOGEAR! </label>
		<input type="submit" name="enviar"> <br>
	</form>