<?php 

function funcion1(){
			echo "Mensaje desde funcion1 con Include";
		}

 ?>




<?php 


 //ámbito de variables. Vídeo 6.

 //las variables creadas dentro de una función no pueden ser accedidas desde otro punto del programa. 

//Este comportamiento es ligeramente diferente a otros lenguajes de programación y eso es debido a herramientas como los Include o los Require, para evitar sobreescribir variables o declaraciones con nombres comunes.

 $nombre= "Juan";

 function DameNombre(){

 	global $nombre;  //Si borramos l variable global, el programa no funcionaría. ya que la función no puede acceder a la variable nombre declarada justo arriba, fuera de la función   (global no suele utilizarse mucho, hay otras formas de evitar esto, sobretodo pasando con parametros.)
 	$nombre= "El nombre es ". $nombre. "<br>";

 }

 DameNombre();

 echo $nombre;


 function incrementaVariable(){
 	static $contador= 0; //eliminar static  para ver que ocurre
 	$contador++;
 	echo $contador . "<br>";
 }

 incrementaVariable();         
 incrementaVariable();
 incrementaVariable();
 incrementaVariable();
//observemos que el valor de contador es 1 en todos los casos. Es posible conservar el valor de las variables, para que este no sea volatil cuando finalice la función. 

 //Para hacer esto se utilizan variables estaticas. esto nos permite conservar el valor de la variable cuando la función finalice. 

  ?>