<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	include("Concesionario.php");

	Compra_vehiculo::descuento_gobierno(); // para utilizar metodos estaticos se llama a la clase y se usan ::.

	
	$compra_Antonio=new Compra_vehiculo("compacto");
	$compra_Antonio->climatizador();
	$compra_Antonio->tapiceria_cuero("blanco");
	echo $compra_Antonio->precio_final() . "<br>";



	$compra_Ana=new Compra_vehiculo("compacto");
	$compra_Ana->climatizador();
	$compra_Ana->tapiceria_cuero("rojo");
	echo $compra_Ana->precio_final() . "<br>";
	
	
	
	


?>
</body>
</html>