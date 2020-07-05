<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

</head>
<body>
<?php 
	require("modelo/paginacion.php"); //SI USO REQUIRE_ONCE DA ERROR.
 ?>

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


    <?php  foreach ($matrizpersonas as $variable_inventada):  ?>   <!-- esto es magic english -->
   
   	<tr>
      <td>  <?php echo $variable_inventada["id"]; ?> </td>
      <td> <?php echo $variable_inventada["nombre"]; ?></td>
      <td> <?php echo $variable_inventada["apellido"]; ?></td>
      <td> <?php echo $variable_inventada["direccion"]; ?></td>
 
      <td class="bot"> <a href='borrar.php?["id"]= <?php echo $variable_inventada["id"] ?>'> <input type='button' name='del' id='del' value='Borrar'> </a> </td>
      <td class='bot'> <a href='editar.php?["id"]= <?php echo $variable_inventada["id"] ?> & nom= <?php echo $variable_inventada["nombre"] ?> & ape= <?php echo $variable_inventada["apellido"] ?> & dir= <?php echo $variable_inventada["direccion"] ?> '>  <input type='button' name='up' id='up' value='Actualizar'> </a> </td>
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
    	   <?php 
		  for ($i=1; $i<$total_paginas; $i++) { 
		    echo "<a href='?pagina=$i'> $i </a>";
		  }
	 ?> 

	
</body>
</html>