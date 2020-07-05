<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>


<?php

try{
	
	$login=htmlentities(addslashes($_POST["login"]));
	
	$password=htmlentities(addslashes($_POST["password"]));

	$contador = 0;
	
	
	$base=new PDO("mysql:host=localhost; dbname=pruebas" , "root", "");
	
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
	$sql="SELECT * FROM USUARIOS WHERE nombre= :login";
	
	$resultado=$base->prepare($sql);	
		
	$resultado->execute(array(":login"=>$login));
		
		while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){			
			
				echo "Usuario: " . $registro['nombre'] . " Contraseña: " . $registro['contrasenya'] . "<br>";

			if (password_verify($password, $registro['contrasenya']) ) { //con password_verify conseguimos comprobar si la contraseña ingresada coincide con la guardada en nuestra BBDD.
						
				$contador++; //el contador sirve para comprobar si existe el usuario que ha intentado hacer login, si esto es asi contador valdra 1. lo que nos permitira redirigir al usuario a cualquier otra página, mostrar mensajes etc...

				}				
		}

		if ($contador>0) {
			echo "Usuario registrado";
			//header("location:perfil_usuario.php");

		}else{
			echo "Usuario no registrado";
			//header("location:index.php");
		}
		
							
		
		
		$resultado->closeCursor();

	
	
}catch(Exception $e){
	
	die("Error: " . $e->getMessage());
	
	
	
}




?>
</body>
</html>