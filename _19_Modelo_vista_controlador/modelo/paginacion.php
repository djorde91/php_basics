<?php  

require_once "conectar.php";

$base= Conectar::conexion();
// PAGINACION ---------------------------------------------------------
        $consultas_por_pagina= 3;
      //si el usuario es la primera vez que entra en la pagina, pagina valdra 1, con lo cual mostramos las n primeras consultas.
    if (isset($_GET["pagina"])) {
      
    
      if ($_GET["pagina"]==1) {
        header("Location:index.php");
      }else{
        $pagina=$_GET["pagina"];
      }

    }else{
      $pagina = 1;
    }

      //calculo sencillo para cambiar dinamicamente las consultas que se van a ir mostrando, ajustadas a cada pagina.
    $empezar_desde = ($pagina -1 ) * $consultas_por_pagina; 

    // hacemos una consulta para obtener el número total de filas (esto no se va a mostrar por pantalla)
    $sql_total = "SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM PRODUCTOS WHERE SECCIÓN= 'DEPORTES' ";
    //Con LIMIT solo mostramos los 3 primeros.

    $resultado = $base->prepare($sql_total);
    $resultado->execute(array());

    $num_filas = $resultado->rowCount(); //contamos las filas de la consulta.

    $total_paginas = ceil($num_filas/$consultas_por_pagina); //la función ceil redondea el resultado.
// ----------------------------------------------------------------------------------------

    ?>