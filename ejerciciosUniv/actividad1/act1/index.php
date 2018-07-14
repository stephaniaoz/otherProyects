<!DOCTYPE html>
<html>
<head>
	<title>Alumnos</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Matricula de alumnos</h1>
	<center>
	<div id="contenedor">
		<form action="usuarios.php" method="post">
			<p>Ingrese su nombre:
			<input type="text" name="nombre" required></p>
			<p>Ingrese mail:
			<input type="email" name="mail" required></p>
			<p>Seleccione el curso:
			<select name="codigocurso" required>
				<option value="1">Desarrollo</option>
				<option value="2">Pruebas de software</option>
				<option value="3">Programación interactiva</option>
				<option value="4">Yepes no es más el técnico del cali</option>
			</select></p>
			<p><input type="submit" name="Registrar"></p>
		</form>	
	</div>	
	</center>
</body>
</html>