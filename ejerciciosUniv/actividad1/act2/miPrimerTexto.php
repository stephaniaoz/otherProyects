<!DOCTYPE html>
<html>
<head>
	<title>Problema</title>
</head>
<body>
	<?php
		$ar = fopen("datos.txt",  "a") or die("hay problemas en la creación del texto");
		fputs($ar,  $_REQUEST['nombre']);
		fputs($ar,  "\n");
		fputs($ar,  $_REQUEST['comentarios']);
		fputs($ar,  "\n");
		fputs($ar,  "------------------------------------------------------------");
		fputs($ar,  "\n");
		fclose($ar);

		$arr = fopen("datos.txt",  "r") or die("hay problemas en la creación del texto");
		print_r($arr);

		echo "<script>alert('Los datos se cargaron correctamente');</script>";
		print("<script>window.location.replace('index3.php');</script>");

	?>
	

</body>
</html>