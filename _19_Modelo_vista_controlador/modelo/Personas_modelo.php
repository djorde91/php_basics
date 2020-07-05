<?php 
	
	class Personas_modelo{

		private $db;
		private $personas;

		public function __construct(){

			require_once("modelo/Conectar.php");

			$this->db=Conectar::conexion(); //Conectamos de forma estatica con la base de datos.
			$this->personas=array();

		}

		public function get_personas(){

			require("paginacion.php");
			$consulta = $this->db->query("SELECT * FROM datos_usuarios LIMIT $empezar_desde, $consultas_por_pagina ");

			while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {

				$this->personas[]=$filas;
			}

			return $this->personas;

		}

	}


 ?>