<?php
include_once('database_credenciales.php');

$conexion = mysql_connect(DB_HOST,DB_USU,DB_PASSWORD) or die("Error de conexion: ". mysql_error());

mysql_select_db('bd_crud') or die("No se ecuentra la bd". mysql_error());



?>