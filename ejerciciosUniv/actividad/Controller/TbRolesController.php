<?php
include_once('C:\xampp\htdocs\actividad\Model\TbRolesModel.php');
/**
*
*/

if($_REQUEST){

	$modulo = isset($_POST['modulo'])?$_POST['modulo']:'';


}
class TbRolesController{

	private $arrayAllRol = array();

	public function listAllRoles(){

		$objetModel = new TbRolesModel();
		$result = $objetModel->getAllRoles();

		$count = 0;

		while ($arrayRol = mysql_fetch_assoc($result)) {

			$this->arrayAllRol[$count]['id'] = $arrayRol['id'];
			$this->arrayAllRol[$count]['rol_nombre'] = $arrayRol['rol_nombre'];

			$count++;
		}

		return $this->arrayAllRol;
	}


}

?>