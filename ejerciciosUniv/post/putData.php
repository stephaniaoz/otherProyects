 <?php
 
	//url: http://localhost/post/PutData?nombre=carlos&apellido=mendoza&edad=24
 
	$nombre = $_REQUEST["nombre"];
	$apellido = $_REQUEST["apellido"];
	$edad = $_REQUEST["edad"];
	
	$host = "localhost";
	$user = "postgres";
	$pass = "stephania";
	$bd = "bd_pruebas";
	$puerto = "5432";
	
	$cadena="host=".$host." port=".$puerto." dbname=".$bd." user=".$user." password=".$pass." ";

	$con = pg_connect($cadena) or die ("Error de conexion.". pg_error());
	
	$sql = "INSERT INTO tb_persona (nombre, apellido, edad) VALUES ('".$nombre."','".$apellido."',".$edad.")";
	
	
	$result = pg_query($sql) or die("Error query.". pg_error());
	$cont = pg_num_rows($result);
	
	echo $result;

 
 ?>