<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php
	/*
	if (isset($_POST["enviando"])) {	

		$edad = $_POST["edad_usuario"];

			if ($edad <= 18) {
				echo "Eres menor de edad";
			} 

			else if ($edad <= 40) {
				echo "Eres joven";
			}

			else if ($edad <= 65) {
				echo "Eres maduro";
			}

			else{
				echo "Cuídate";
			}

	}	
	*/

	if (isset ( $_POST["enviando"] ) ){
		$contrasenya = $_POST["contrasenya"];
		$nombre = $_POST["nombre_usuario"];

		$resultado = $nombre =="Juan" &&  $contrasenya == "1234" ? "puedes acceder" : " NO Puedes acceder";   
		//Operador ternario.  Condicion a evaluar ?  código TRUE  : código FALSE. (no se suele utilizar, Normalmente se usan IF ELSE y ya esta. )
	
	echo "$resultado";
	}


?>