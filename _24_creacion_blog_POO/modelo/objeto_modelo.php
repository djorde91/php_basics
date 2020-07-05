<?php 

	class Objeto_blog{

		public $id;
		public $titulo;
		private $fecha;
		private $comentario;
		private $imagen;

		//getter and setter Id
		public function getId(){

			return $this->id;       //$THIS->ID     NO HAY QUE USAR EL PUTO DOLLAR. JODER, ME he tirado 2 horas por no usar bien la sintaxis del $this.
		}

		public function setId($id) {

			$this->id;
		}

		//getter and setter titulo


		public function setTitulo($titulo){

			$this->titulo = $titulo;
		}

		public function getTitulo(){

			return $this->titulo;
		}



		//getter and setter Fecha
		public function getFecha(){

			return $this->fecha;
		}

		public function setFecha($fecha){

			$this->fecha = $fecha;
		}


		//getter and setter Comentario
		public function getComentario(){

			return $this->comentario;
		}

		public function setComentario($comentario){

			$this->comentario = $comentario;
		}


		//getter and setter Imagen
		public function getImagen(){

			return $this->imagen;
		}

		public function setImagen($imagen){

			$this->imagen = $imagen;
		}

	}

 ?>