<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>

h1{
	text-align:center;
	color:#00F;
	border-bottom:dotted #0000FF;
	width:50%;
	margin:auto;
	
	
}

table{
	border:1px solid #F00;
	padding:20px 50px;
	margin-top:50px;
}

body{
	background-color:#FFC;
}


</style>
</head>

<body>
<h1> Alta de articulos nuevos</h1>
<form name="form1" method="get" action="insertar_registros.php">
  <table border="0" align="center">
    <tr>
      <td>Código Artículo</td>
      <td><label for="c_art"></label>
      <input type="text" name="c_art" id="c_art"></td>
    </tr>
    <tr>
      <td>Sección</td>
      <td><label for="secc"></label>
      <input type="text" name="secc" id="seccion"></td>
    </tr>
    <tr>
      <td>Nombre artículo</td>
      <td><label for="n_art"></label>
      <input type="text" name="n_art" id="n_art"></td>
    </tr>
    <tr>
      <td>Precio</td>
      <td><label for="pre"></label>
      <input type="text" name="pre" id="precio"></td>
    </tr>
    <tr>
      <td>Fecha</td>
      <td><label for="fec"></label>
      <input type="text" name="fec" id="fecha"></td>
    </tr>
    <tr>
      <td>Importado</td>
      <td><label for="imp"></label>
      <input type="text" name="imp" id="importado"></td>
    </tr>
    <tr>
      <td>País de Origen</td>
      <td><label for="p_ori"></label>
      <input type="text" name="p_ori" id="p_orig"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Insert"></td>
      <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
    </tr>
  </table>
</form>
</body>
</html>