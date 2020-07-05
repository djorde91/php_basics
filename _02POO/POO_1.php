<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>POO01</title>
</head>
<body>

	<?php 

	include("vehiculo.php");

	$mazda = new Coche();
	$pegaso = new Camion();
	echo "El Mazda tiene " . $mazda->get_ruedas() . " ruedas <br>";
	echo "El pegaso tiene " . $pegaso ->get_ruedas() . " ruedas <br>";
	echo "El Mazda tiene un motor de " . $mazda->get_motor() . "<br>";
	echo "El pegaso tiene un motor de " . $pegaso->get_motor() . "<br>";

	$mazda->set_color("rojo","ERCARRO");

	$pegaso -> frenar();
	$pegaso -> set_color("verde", "CAMIONASO");
	$pegaso -> arrancar();




	 ?>
	
</body>
</html>









<?php 
	

		//creación de objetos de coche.
		/*$renault =new Coche();//Estado inicial del objeto o instancia.
		$mazda = new Coche();
		$seat = new Coche();

		$mazda->girar();
		echo $mazda->ruedas;

		echo "<br>";
		$renault->set_color("verde", "Renault"); */


 ?>