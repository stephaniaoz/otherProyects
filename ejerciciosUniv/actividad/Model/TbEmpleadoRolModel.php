<?php


include_once('C:\xampp\htdocs\actividad\db\database_utilidades.php');
/**
*
*/

class TbEmpleadoRolModel{

	public function setEmpleadoRol($rol,$idUsu){

		$SQL = "INSERT INTO tb_empleado_rol( empleado_id, rol_id) VALUES (".$idUsu.", ".$rol.")";

		$result = mysql_query($SQL) or die("Error al inserta tb_empleado_rol:".mysql_error());

		return $result;

	}

	public function eliminarUsuarioRol($idUsu){

		$SQL ="DELETE FROM tb_empleado_rol WHERE empleado_id = ".$idUsu;

		$result = mysql_query($SQL) or die("Error al eliminar tb_empleado_rol:".mysql_error());

		return $result;
	}



}

?>