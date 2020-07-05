<?php 

	class Conectar{


		public static function conexion(){

			try {

				$conexion= new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
				$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$conexion->exec("SET CHARACTER SET UTF8");
				
			} catch (Exception $e) {
				echo "Error en la línea: " . $e->getLine();
				echo "Mensaje de error: " . $e->getMessage();
			}

			return $conexion;

		}
	}



 ?>