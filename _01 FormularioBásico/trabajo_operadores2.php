<?php 
		
	if (isset($_POST["enviando"])) {
		//$_POST es una variable super global. las variables super globales son ARRAYS y tienen un ámbito que se salen del propio archivo para acceder y manejar datos. (ideal para almacenar datos de usuarios y moverlos entre bases de datos.)

		$usuario= $_POST["nombre_usuario"];
		$edad= $_POST["edad_usuario"];

				if ($usuario == "Juan" && $edad == 18) {
					echo "<p class='validado'>
					Puedes entrar </p>";
				}
				else{
					echo "<p class=\"no_validado \">" . "No puedes entrar" . "</p>";
				}
	}

?>