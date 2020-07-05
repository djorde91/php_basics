<?php

	class Compra_vehiculo{
		
		 private $precio_base;
		 private static $ayuda;
		
		
				
		function Compra_vehiculo($gama){
			
			if($gama=="urbano"){
				
					$this->precio_base=10000;
				
			}else if($gama=="compacto"){
				
				
					$this->precio_base=20000;	
				
			}
			
			else if($gama=="berlina"){
				
					$this->precio_base=30000;	
				
			}		
			
			
		}// fin constructor
		
		
		
		
		function climatizador(){		
			
			
				$this->precio_base+=2000;					
			
			
		}// fin climatizador
		
		
		function navegador_gps(){
			
			$this->precio_base+=2500;	
			
		}//fin navegador gps
		
		
		
		function tapiceria_cuero($color){  
			
			if($color=="blanco"){
			
				$this->precio_base+=3000;
			}
			
			else if($color=="beige"){
				
				$this->precio_base+=3500;
				
			}
			
			else{
				
				$this->precio_base+=5000;
				
			}
			
		}// fin tapicería
		
		
		function precio_final(){   
			$valor_final = $this->precio_base-self::$ayuda;
			//$this referencia al objeto actual que esta utilizando al metodo.
			//self:: sirve para referenciar a la PROPIA CLASE. en este caso a $ayuda, que es una variable estatica que solo pertenece a la clase.
			//Para que las instancias de esta clase puedan utilizar la variable ayuda y los metodos que utilizan esa variable utilizamos la palabra self:: para dar permisos.

			return $valor_final;	
			
		}// fin precio final

		static function descuento_gobierno(){  //creamos un metodo estatico que nos permita aplicar o no un descuento en la compra del vehiculo según la fecha que especifiquemos.

			if (date("m-d-y") > "05-01-15") { //modificar > por < para ver el efecto.
				self::$ayuda=4000;
			}
			else{
				self::$ayuda = 1;
			}
			
		}
		
		
		
	}// fin clase


?>