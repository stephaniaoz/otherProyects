<?php

/**
 *
 */
class LoginController extends BaseController
{

  function __construct() {
    parent::__construct();
  }

  public function index(){
    $this->goIndex("login");
  }

  public function validaLogin(){

  	if(isset($_REQUEST)){
  	  $identificacion	= $_REQUEST['identificacion'];	
      $login	 		= $_REQUEST['login'];
      $password 		= $_REQUEST['password'];

	  //$login  = new LoginModel($identificacion,$login,$password);
	  $login  = new LoginModel($login,$password);
	  $logins = $login->buscar();
	  
      if(is_object($logins[0])){
        	$_SESSION['usuario']   = $logins[0]->login;
    		$_SESSION['codusuario']= $logins[0]->codigo;
    		$_SESSION['nombre1']   = $logins[0]->nombre1;
    		$_SESSION['nombre2']   = $logins[0]->nombre2;
    		$_SESSION['apellido1'] = $logins[0]->apellido1;
    		$_SESSION['apellido2'] = $logins[0]->apellido2;

        $this->redirect("inicio");
      }else{
        $this->redirect();
      }

      $mensajeCorrecto = $login->getMessageOk();
      $mensajeError = $login->getMessageError();

      include_once 'view/errorView.php';
   
    }

  }

}


?>
