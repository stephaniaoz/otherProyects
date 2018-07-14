<!DOCTYPE html>
<html>
<head>
	<title>Alumnos</title>
</head>
<body>
	<?php
		$conexion = mysqli_connect("localhost","root","","univalle") or die("No es posible la conexion");
		$query = "INSERT INTO alumnos (nombre,  mail,  codigocurso) VALUES ('".$_REQUEST['nombre']."','".$_REQUEST['mail']."','".$_REQUEST['codigocurso']."');";
		
		mysqli_query($conexion,  $query) or die("problemas en el select ".mysqli_error($conexion));

		mysqli_close($conexion);

		echo "<script>alert('El alumno fue ingresado con exito');</script>";
		print("<script>window.location.replace('index.php');</script>");
	?>
</body>
</html>