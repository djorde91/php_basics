<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>
</head>

<body>
<h1>USANDO OPERADORES COMPARACIÓN</h1>
	<!-- Si el form action esta vacio el formulario no se enviara a ningun sitio, (esto nos permite imprimir datos y mostrar datos en el mismo documento.) -->

	<!-- En trabajo_operadores2.php tenemos el código php del formulario, cuando el usuario envie el formulario, este lo redirijira a esa página donde se verá el resultado.  (si el login es correcto.... redireccionamos a la página con la interfaz de usuario correspondiente.) -->
<form action="trabajo_operadores2.php" method="post" name="datos_usuario" id="datos_usuario"> 
  <table width="15%" align="center">
    <tr>
      <td>Nombre:</td>
      <td><label for="nombre_usuario"></label>
      <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td>Edad:</td>
      <td><label for="edad_usuario"></label>
      <input type="text" name="edad_usuario" id="edad_usuario"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
    </tr>
  </table>
</form>





</body>
</html>