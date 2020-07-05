<style>
  
.resultado {
  color: steelblue;
  font-weight: bold;
  font-size: 2em;
}



</style>


<?php 
 
     function calcular($p_operacion, $p_numero1){
      global $numero2;
        //strcmp (comparamos un string con otro.)
      if (!strcmp("Suma", $p_operacion)) {

       
        echo "<p class = 'resultado' > El resultado es "  . ($p_numero1+$numero2) . "</p>";

      }


      if (!strcmp("Resta", $p_operacion)) {
       
        echo "El resultado es "  . ($p_numero1-$numero2);
       
      }


      if (!strcmp("Multiplicación", $p_operacion)) {
      
        echo "El resultado es "  . ($p_numero1*$numero2);
      
      }


      if (!strcmp("División", $p_operacion)) {
        
        echo "El resultado es "  . ($p_numero1/$numero2);
        
      }

      if (!strcmp("Módulo", $p_operacion)) {
              
        echo "El resultado es "  . ($p_numero1%$numero2);
      
      }

      if (!strcmp("Incremento", $p_operacion)) {
        $p_numero1++;
              
        echo "El resultado es "  . ($p_numero1);
      
      }

      if (!strcmp("Decremento", $p_operacion)) {
        $p_numero1--;
              
        echo "El resultado es "  . ($p_numero1);
      
      }

    }


 ?>