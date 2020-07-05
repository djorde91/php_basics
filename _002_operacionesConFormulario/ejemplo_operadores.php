<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejemplo operadores php Calculadora.</title>
</head>

<body>

<p>&nbsp;</p>
<form name="form1" method="post" action=""> <!-- en Action definimos el destino cuando hagamos submit en el formulario -->
  <p>
    <label for="num1"></label>
    <input type="text" name="num1" id="num1">
    <label for="num2"></label>
    <input type="text" name="num2" id="num2">
    <label for="operacion"></label>
    <select name="operacion" id="operacion">
      <option>Suma</option>
      <option>Resta</option>
      <option>Multiplicación</option>
      <option>División</option>
      <option>Módulo</option>
       <option>Incremento</option>
        <option>Decremento</option>
    </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
  </p>
</form>
<p>&nbsp;</p>

<?php 
  include("Calculadora.php");
//utilizamos una combinación de includes y llamadas a la función calcular pasando valores por parametros.
  if(isset($_POST["button"])){ //si el usuario ha pulsado el tag con NAME button....
      $numero1 = $_POST["num1"];
      $numero2 = $_POST["num2"];
      $operacion = $_POST["operacion"];

      calcular($operacion, $numero1);

          //las variables SUPERGLOBALES son arrays.
    
    //para llamar a la función, necesitamos crear variables globales, o bien pasarlas por parametro a la función, ambas opciones son totalmente válidas. las tres por parametro sería más limpio
    }
 ?>



</body>
</html>