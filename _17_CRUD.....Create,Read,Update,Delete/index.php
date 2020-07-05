<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="hoja.css">


</head>

<body>

  <?php 
    include('conexion.php');

   /*  $conexion=$base->query("SELECT * from datos_usuarios");
    $registros=$conexion->fetchAll(PDO::FETCH_OBJ); 
    Estas dos instrucciones hacen lo mismo que la de abajo.*/



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

    $registros= $base->query("SELECT * from datos_usuarios LIMIT $empezar_desde, $consultas_por_pagina")->fetchAll(PDO::FETCH_OBJ);

    if (isset($_POST["cr"])) {
      
        $nombre = $_POST['nom'];
        $apellido = $_POST['ape'];
        $direccion = $_POST['dir'];

        $sql="INSERT INTO datos_usuarios (nombre, apellido, direccion) VALUES (:nom, :ape, :dir)";
        $resultado = $base->prepare($sql);

        $resultado-> execute(array(":nom"=> $nombre, ":ape"=> $apellido, ":dir"=> $direccion, ));

        header("Location:index.php");

    }

   ?>

<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>
<form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method ="post">
  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 


    <?php  foreach ($registros as $variable_inventada):  ?>   <!-- esto es magic english -->
   
   	<tr>
      <td>  <?php echo $variable_inventada->id; ?> </td>
      <td> <?php echo $variable_inventada->nombre; ?></td>
      <td> <?php echo $variable_inventada->apellido; ?></td>
      <td> <?php echo $variable_inventada->direccion; ?></td>
 
      <td class="bot"> <a href='borrar.php?id= <?php echo $variable_inventada->id ?>'> <input type='button' name='del' id='del' value='Borrar'> </a> </td>
      <td class='bot'> <a href='editar.php?id= <?php echo $variable_inventada->id ?> & nom= <?php echo $variable_inventada->nombre ?> & ape= <?php echo $variable_inventada->apellido ?> & dir= <?php echo $variable_inventada->direccion ?> '>  <input type='button' name='up' id='up' value='Actualizar'> </a> </td>
    </tr>  

  <?php  endforeach; ?>

	<tr>
	<td></td>
      <td><input type='text' name='nom' size='10' class='centrado'></td>
      <td><input type='text' name='ape' size='10' class='centrado'></td>
      <td><input type='text' name='dir' size='10' class='centrado'></td>


      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>    
  </table>
</form>

<p>&nbsp;</p>

<?php 
  for ($i=1; $i< $total_paginas ; $i++) { 
    echo "<a href='?pagina=$i'> $i </a>";
  }
 ?>

</body>
</html>