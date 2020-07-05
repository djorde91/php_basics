<?php 
require_once("modelo/Personas_modelo.php");



	$personas= new personas_modelo();

	$matrizpersonas= $personas->get_personas();

require_once("vista/Personas_view.php");


 ?>