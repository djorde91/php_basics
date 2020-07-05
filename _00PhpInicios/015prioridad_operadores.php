<?php 
//prioridad operadores video 15
//http://php.net/manual/en/language.operators.precedence.php 
//En este enlace se ve la tabla de prioridades de los operadores, los que estan mas arriba tienen mas preferencia que el resto.
//A continuación vamos a ver varios ejemplos que demuestran esto.
//Sobretodo con los operadores AND OR && y ||.

$var1=true;
$var2=false;
$resultado1=$var1 && $var2;//resultado = false;
$resultado2=$var1 and $var2;  //resultado = true;

if ($resultado1==true) {
	echo "Correcto <br>";
}else{
	echo "Incorrecto <br>";
}


if ($resultado2==true) {
	echo "Correcto <br>" ;
}else{
	echo "Incorrecto <br>";
}


//en resultado 1 "&&" tiene más prioridad que el igual "=" entonces nos esta comparando var1 con var2, como una es false y otra es true, resultado tomara false como valor.

//En resultado2 estamos utilizando "and", si observamos la tabla de prioridades and esta por debajo de =, esto que significa? que al igual que pasa con las multiplicaciones y las sumas o restas, primero se tendra en cuenta el = y despues el "and". en este caso sería algo parecido a esto.

// ($resultado2= $var1)  and $var2;   es decir, resultado2 pasa a ser true, y var 2 directamente no se tiene en cuenta, no se esta comparando con nada.
//Esto esta bien explicado en el video 15 de pildoras.


 ?>