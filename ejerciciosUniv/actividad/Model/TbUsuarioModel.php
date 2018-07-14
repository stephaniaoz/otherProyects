<?php

include_once('C:\xampp\htdocs\actividad\db\database_utilidades.php');
/**
*
*/

class TbUsuarioModel{

	public function getAllUsuario(){

		$SQL = "SELECT *
				FROM tb_usuarios";

		$result = mysql_query($SQL) or die("Error al seleccionar:". mysql_error());

		return $result;
	}

	public function updateUsuario($arrayUsu){

		$SQL = "UPDATE tb_usuarios SET usuario_nombre='".$arrayUsu['nombre']."',usuario_email='".$arrayUsu['email']."',usuario_sexo='".$arrayUsu['tipo_sexo']."',usuario_area='".$arrayUsu['selecArea']."',usuario_boletin='".$arrayUsu['tipo_boletin']."', usuario_descripcion = '".$arrayUsu['descripcion']."' WHERE id = ".$arrayUsu['idUsu'];

		$result = mysql_query($SQL) or die("Error al actualizar:".mysql_error());

		return $result;

	}

	public function insertUsu($arrayUsu){

		$SQL = "INSERT INTO tb_usuarios ( usuario_nombre, usuario_email,usuario_sexo, usuario_area, usuario_boletin, usuario_descripcion) VALUES ('".$arrayUsu['nombre']."', '".$arrayUsu['email']."', '".$arrayUsu['tipo_sexo']."', '".$arrayUsu['selecArea']."', '".$arrayUsu['tipo_boletin']."', '".$arrayUsu['descripcion']."');";

		$result = mysql_query($SQL) or die("Error al insertar:".mysql_error());

		return $result;

	}

	public function deleteUsu($idUsu){

		$SQL = "DELETE FROM tb_usuarios WHERE usuario_id = ".$idUsu;

		$result = mysql_query($SQL) or die("Error al eliminar:".mysql_error());

		return $result;
	}

	public function getIdUsu($nombre){

		$SQL = "SELECT * FROM tb_usuarios WHERE usuario_nombre = '".$nombre."'";

		$result = mysql_query($SQL) or die("Error al seleccionar id Usuario".mysql_error());

		return $result;
	}


}

?>