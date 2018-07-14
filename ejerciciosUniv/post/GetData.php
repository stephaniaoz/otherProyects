 <?php
 
	$host = "localhost";
	$user = "postgres";
	$pass = "stephania";
	$bd = "bd_pruebas";
	$puerto = "5432";
	
	$cadena="host=".$host." port=".$puerto." dbname=".$bd." user=".$user." password=".$pass." ";

	$con = pg_connect($cadena) or die ("Error de conexion.". pg_error());
	
	$sql = "SELECT * FROM tb_persona";
	
	$datos = array();
	
	$rs = pg_query($sql) or die("Error query.". pg_error());
	
	$cont = pg_num_rows($rs);
	//echo $cont;

	while($row = pg_fetch_array($rs, null, PGSQL_ASSOC)){
		//echo $row['nombre']."<br>";
		$datos[] = $row;
	}
	//echo "<pre>";
	//print_r($datos);
	
	echo json_encode($datos);
	
 ?>