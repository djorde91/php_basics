<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>
		
		table{
			margin: auto;
			width: 450px;
			border: 2px solid black;
		}
	</style>
</head>
<body>


<form action="datos_archivos.php" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td> <input type="file" name="archivo" size="20" > </td>
		</tr>

		<tr>
			<td colspan="2" style="text-align:center"> <input type="submit" value="Enviar Archivos">
			</td>
		</tr>
	
	</table>
</form>	
	
</body>
</html>