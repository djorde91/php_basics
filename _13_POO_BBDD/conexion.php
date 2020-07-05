<?php  
	
	require_once ('config.php');

	class Conexion{ 

		//protected pueden utilizarlas las clases que heredan tambien.

		protected $conexion_db;

		public function __construct(){       //EN PHP LOS CONSTRUCTORES TIENEN QUE TENER la siguiente sintaxis, en versiones modernas de php el uso del nombre de la clase como constructor es "deprecated."
				try {

					$this->conexion_db= new PDO(DB_HOST ,DB_USUARIO,DB_CONTRA);
					$this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$this->conexion_db->exec("SET CHARACTER SET utf8");
					
				} catch (Exception $e) {
					echo "la linea de error es" . $e->getLine();;
				}




			}
	}




/*---------------------------------------------MYSQLI----------------------------------------------------
			$this ->conexion_db = new mysqli(DB_HOST,DB_USUARIO,DB_CONTRA,DB_NOMBRE);
			if ($this->conexion_db->connect_errno) {
				echo "Fallo al conectar a MySql: " . $this->conexion_db->connect_error;

				return;
			}

			$this->conexion_db->set_charset(DB_CHARSET);
			*/
	

?>
