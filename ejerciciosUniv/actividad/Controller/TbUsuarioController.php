<?php
include_once('C:\xampp\htdocs\actividad\Model\TbUsuarioModel.php');
include_once('C:\xampp\htdocs\actividad\Model\TbEmpleadoRolModel.php');
/**
*
*/

if($_REQUEST){

	$modulo = isset($_POST['modulo'])?$_POST['modulo']:'';

	if($modulo == "actualizar"){

		$arrayUsu = array(
							"idUsu" => $_POST['idUsu'],
							"nombre" => $_POST['nombre'],
							"email" => $_POST['email'],
							"tipo_sexo" => $_POST['tipo_sexo'],
							"selecArea" => $_POST['selecArea'],
							"tipo_boletin" => $_POST['tipo_boletin'],
							"descripcion" => $_POST['descripcion']


						);

		$objtController = new TbUsuarioController();
		$objtController->actualizarUsuario($arrayUsu);

	}

	if($modulo == "guardar"){

		$arrayUsu = array(
							"nombre" => $_POST['nombre'],
							"email" => $_POST['email'],
							"tipo_sexo" => $_POST['tipo_sexo'],
							"selecArea" => $_POST['selecArea'],
							"tipo_boletin" => $_POST['tipo_boletin'],
							"descripcion" => $_POST['descripcion'],
							"rol"=>$_POST['rol']
						);

		$objtController = new TbUsuarioController();
		$objtController->crearUsuario($arrayUsu);

	}

	if($modulo == "eliminar"){

		$objtController = new TbUsuarioController();
		$objtController->eliminarUsuario($_POST['idUsu']);

	}
}
class TbUsuarioController{

	private $arrayAllUsu = array();

	public function listAllUsuarios(){

		$objetModel = new TbUsuarioModel();
		$result = $objetModel->getAllUsuario();

		$count = 0;

		while ($arrayUsu = mysql_fetch_assoc($result)) {

			$this->arrayAllUsu[$count]['usuario_id'] = $arrayUsu['usuario_id'];
			$this->arrayAllUsu[$count]['usuario_nombre'] = $arrayUsu['usuario_nombre'];
			$this->arrayAllUsu[$count]['usuario_email'] = $arrayUsu['usuario_email'];
			$this->arrayAllUsu[$count]['usuario_sexo'] = $arrayUsu['usuario_sexo'];
			$this->arrayAllUsu[$count]['usuario_area'] = $arrayUsu['usuario_area'];
			$this->arrayAllUsu[$count]['usuario_boletin'] = $arrayUsu['usuario_boletin'];
			$this->arrayAllUsu[$count]['usuario_descripcion'] = $arrayUsu['usuario_descripcion'];

			$count++;
		}

		return $this->arrayAllUsu;
	}

	public function actualizarUsuario($arrayUsu){

		$objetModel = new TbUsuarioModel();
		$result = $objetModel->updateUsuario($arrayUsu);

		if($result){

			echo "Usuario actualizado!!";

		}else{

			return $result;
		}
	}

	public function crearUsuario($arrayUsu){

		$objetModel = new TbUsuarioModel();
		$result = $objetModel->insertUsu($arrayUsu);

		if($result){

			//echo "Usuario registrado!!";

			$resultUsuI = $objetModel->getIdUsu($arrayUsu['nombre']);
			$usuCreado = mysql_fetch_assoc($resultUsuI);
			$idUsu = $usuCreado['usuario_id'];

			$objetModel = new TbEmpleadoRolModel();
			$resultUsuR = $objetModel->setEmpleadoRol($arrayUsu['rol'],$idUsu);

			if($resultUsuR){

				echo "Usuario creado con rol!!";

			}else{

				return $resultUsuR."El usuario esta creado el rol no!!";
			}

		}else{

			return $result;
		}

	}

	public function eliminarUsuario($idUsu){

		$objetModelE = new TbEmpleadoRolModel();
		$resultUsuR = $objetModelE->eliminarUsuarioRol($idUsu);

		if($resultUsuR){

			$objetModel = new TbUsuarioModel();
			$result = $objetModel->deleteUsu($idUsu);

			if($result){

				echo "Usuario eliminado con rol";


			}else{

				return $result;
			};

		}else{

			return $resultUsuR;
		}


	}

}

?>