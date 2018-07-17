<?php

/**
 *
 */
class BaseController {

  function __construct(){
    //Incluir todos los modelos
    foreach(glob("model/*.php") as $file){
        require_once $file;
    }

  }

  public function view($controller, $view='index', $data=null){

      include_once 'controller/Helpers.php';
      $helper = new Helpers();
      if($controller == 'login'){
        session_destroy();
      }
      include_once 'view/'.$controller.'/'.$view.'.php';

  }

  public function redirect($controller=CONTROLLER_DEFAULT,$action=ACTION_DEFAULT){
      header("Location:index.php?pageController=".$controller."&action=".$action);
  }

  public function goIndex(){
    $this->view("login");
  }

}


?>
