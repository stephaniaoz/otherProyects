<?php
/**
 *
 */
class EjemploController extends BaseController {

  function __construct() {
    parent::__construct();
  }

  public function index(){
    $this->view("nombrecontroller");
  }

  public function crear(){
    if(isset($_REQUEST)){
      $var = $_REQUEST['var'];
      $var = $_REQUEST['var'];
      $var = $_REQUEST['var'];
      $var = $_REQUEST['var'];
      $var = $_REQUEST['var'];

      $obj = new nombrecontrollerModel($var,$var,$var,$var,$var);
      $obj->save();
      $mensajeCorrecto = $obj->getMessageOk();
      $mensajeError = $obj->getMessageError();

      include_once 'view/errorView.php';
      $this->view("nombrecontroller");

    }
  }

  public function buscar(){
    $obj = new nombrecontrollerModel();
    $objs = $obj->buscar();

    $this->view("nombrecontroller","buscar", $objs);
  }

  public function formEditar(){
    if(isset($_REQUEST)){
      $objid = new nombrecontrollerModel();
      $obj = $objid->datosEditar($_REQUEST['id']);
      $this->view("nombrecontroller","editar", $obj);
    }
  }

  public function editar(){
    if(isset($_REQUEST)){
      $var = $_REQUEST['var'];
      $var = $_REQUEST['var'];
      $var = $_REQUEST['var'];
      $var = $_REQUEST['var'];
      $var = $_REQUEST['var'];

      $objid = new nombrecontrollerModel($var,$var,$var,$var,$var);
      $obj = $objid->editar($_REQUEST['id']);
      $mensajeCorrecto = $objid->getMessageOk();
      $mensajeError = $objid->getMessageError();

      include_once 'view/errorView.php';
      $this->view("nombrecontroller","editar", $obj);
    }
  }

}


?>
