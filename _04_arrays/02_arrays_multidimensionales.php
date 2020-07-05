<!-- Arrays multidimensionales -->
<?php 
		// Arrays de dos dimensiones.
	$alimentos = array("fruta" => array("tropical" => "kiwi", 
										"cítrico" => "mandarina",
										"otros" => "manzana"),

					   "leche" => array("animal" => "vaca",
										"vegetal" => "coco"),

					   "carne" => array("vacuno" => "lomo",
					   					"porcino" => "pata") );


		echo $alimentos["carne"] ["vacuno"];

foreach ($alimentos as $key_alimentos => $value_tipo_alimento) {
			echo "$key_alimentos: <br>";
			while (list($clave, $valor) = each($value_tipo_alimento)) {

				echo "$clave = $valor <br>";
			}

			echo "<br>";
		}


		echo var_dump($alimentos);




 ?>