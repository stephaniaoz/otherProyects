<?php

include_once('C:\xampp\htdocs\actividad\db\database_utilidades.php');
/**
*
*/

class TbRolesModel{

	public function getAllRoles(){

		$SQL = "SELECT * FROM tb_roles ";

		$result = mysql_query($SQL) or die("Error al seleccionar:". mysql_error());

		return $result;
	}



}

?>