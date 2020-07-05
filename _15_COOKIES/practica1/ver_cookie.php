
<?php  

	if (!isset($_COOKIE["idioma_seleccionado"])) {

		header("Location:pag1.php");
		
	}else if ($_COOKIE["idioma_seleccionado"] == "es") {

		header("Location:spanish.php");
		
	}else if ($_COOKIE["idioma_seleccionado"] == "en") {

		header("Location:english.php");
		
	}



?>