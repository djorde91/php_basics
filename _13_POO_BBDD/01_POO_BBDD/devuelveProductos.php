<?php 

	require_once ("../conexion.php");

	class DevuelveProductos extends Conexion
	{
		
		public function __construct(){
			parent::__construct(); //llamamos al constructor de la clase padre conexion de forma implicita dentro de nuestro código.
		}

		public function get_productos(){
					//PDO
				$sql = 'SELECT * FROM PRODUCTOS';
				$sentencia = $this->conexion_db->prepare($sql); //obtenemos un objeto prepared statement.
				$sentencia->execute(array()); //se ejecuta la sentencia almacenandose en un array.
				$resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC); //recorremos el array de forma asociativa.

				$sentencia->closeCursor(); //cerramos el objeto prepared statement.

				return $resultado; //el return va antes del cierre de conexión. si no no podríamos devolver nada.
				$this->conexion_db=null; //cerramos la conexion con la base de datos.


				//MYSQLI.
			/* $resultado = $this->conexion_db->query('SELECT * FROM PRODUCTOS');
			$productos = $resultado->fetch_all(MYSQLI_ASSOC);

			return $productos; */
		}

		public function get_productos_pais($dato){
					//PDO
				$sql = 'SELECT * FROM PRODUCTOS WHERE PAÍSDEORIGEN ="' . $dato . '" ';
				$sentencia = $this->conexion_db->prepare($sql);
				$sentencia->execute(array());
				$resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
				$sentencia->closeCursor();
				return $resultado;

				$this->conexion_db=null;

				//MYSQLI.
			/* $resultado = $this->conexion_db->query('SELECT * FROM PRODUCTOS WHERE PAÍSDEORIGEN ="' . $dato . '" ' );
			$productos = $resultado->fetch_all(MYSQLI_ASSOC);

			return $productos; */
		}


	}



 ?>