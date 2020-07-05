<?php  
		class Coche {

			protected $ruedas; //encapsulamos $ruedas con protected, para poder acceder al metodo get_ruedas desde clase camión (PROBAR PRIVATE PARA VER QUE)
			var $color;
			protected $motor;

			function Coche(){ //Constructor en PHP
				$this-> ruedas = 4;
				$this->color="";
				$this->motor=1600;
			}

			function arrancar(){

				echo "Estoy arrancando <br>";

			}

			function girar() {

				echo "Estoy girando <br>";

			}

			function frenar(){

				echo "Estoy frenando <br>";

			}

			function set_color ($color_coche, $nombre_coche){ //setter
				$this->color=$color_coche;
				echo "El color de ". $nombre_coche ." es: ". $this->color. "<br>";

			}

			function get_ruedas(){ //getter

				return $this-> ruedas;
			}

			function get_motor(){ //getter
				return $this-> motor;
			}

		}

?>
<!-- ----------------------------------------------------- -->

<?php  
		class Camion extends Coche { //Camion hereda de coche.

			var $ruedas; //variables de la clase.
			var $color;
			var $motor;

			function Camion(){ //Constructor en PHP
				$this-> ruedas = 8;
				$this->color="gris";
				$this->motor=2600;
			}

			function set_color ($color_camion, $nombre_camion){ //sobreescribimos el metodo set_color de Coche.
				$this->color=$color_camion;
				echo "El color de ". $nombre_camion ." es: ". $this->color. "<br>";

			}

			function arrancar(){ //sobreescribimos arrancar y ademas añadimos algo más
				parent::arrancar(); //con parent:: llamamos al metodo/variable del padre, (ejecuta el metodo de la clase padre.)
				echo "Camión arrancado";
			}

		}

?>