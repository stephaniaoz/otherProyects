<!DOCTYPE html>
<html>
<head>
	<title>Problema</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery-3.2.0.min"></script>
	<script  src="funciones.js">
		
	</script>
</head>
<body>
	<p>COMENTARIOS EN ARCHIVO</p>
	<form action="miPrimerTexto.php" method="post">
		<p>Ingrese su nombre:
		<input type="text" name="nombre"></p>
		<p>Comentarios:
		<textarea name="comentarios" rows="10" cols="40">			
		</textarea></p>
		<p><input type="submit" name="Registrar" class="button"></p>
		<p><a href="datos.txt" target='_blank' >Descarga el archivo</a></p>
	</form>
</body>
</html>