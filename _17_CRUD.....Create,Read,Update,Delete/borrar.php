<?php

	include ("conexion.php");

	$id=$_GET["id"];

	$base-> query("DELETE FROM datos_usuarios WHERE id='$id' ");

	header("Location:index.php");  // enviamos al usuario otra vez a la pagina principal, para que no se quede en una hoja en blanco.

 ?>