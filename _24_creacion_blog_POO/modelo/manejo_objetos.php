<?php 

	include_once("objeto_modelo.php");

	class Manejo_objetos {

		private $conexion;

		public function __construct($conexion){

			$this->setConexion($conexion);

		}

		public function setConexion(PDO $conexion){

			$this->conexion = $conexion;
		}

		public function getContenidoPorFecha(){

			$matriz = array();
			$contador = 0;

			$resultado = $this->conexion->query("SELECT * FROM contenido ORDER BY Fecha");

			while ($registro = $resultado->fetch(PDO::FETCH_ASSOC) ) {
				 $blog = new Objeto_blog();

				 $blog->setId($registro["Id"]);
				 $blog->setTitulo($registro["Titulo"]);
				 $blog->setFecha($registro["Fecha"]);
				 $blog->setComentario($registro["Comentario"]);
				 $blog->setImagen($registro["Imagen"]);

				 $matriz[$contador] = $blog;

				 $contador++;
			}

			return $matriz;
		}

		public function insertaContenido(Objeto_blog $blog){

			$i_titulo = $blog->getTitulo();
			$i_fecha = $blog->getFecha();
			$i_comentario = $blog->getComentario();
			$i_imagen = $blog->getImagen();


			$sql ="INSERT INTO CONTENIDO (Titulo, Fecha, Comentario, Imagen) VALUES ('" . $blog->getTitulo() . "', '" . $blog->getFecha() . "', '" . $blog->getComentario() . "', '" . $blog->getImagen() . "')";

			//$sql ="INSERT INTO CONTENIDO (Titulo, Fecha, Comentario, Imagen) VALUES ('$i_titulo', '$i_fecha', '$i_comentario', '$i_imagen')";
	

			$this->conexion->exec($sql);

		}

	}


 ?>