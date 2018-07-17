<?php

/**
 *
 */
class DispositivoGpsModel extends BaseModel
{

  private $var;
  private $var;
  private $var;
  private $var;
  private $var;
  private $fechacreacion;
  private $horacreacion;
  private $estado;
  private $usuario;
  private $mensajeCorrecto = "";
  private $mensajeError = "";

  private $table = "dispositivogps";

  /*
  function __construct(){
    parent::__construct($this->table);
  }*/

  function __construct($var="",$var="",$var="",$var="",$var="") {
    parent::__construct($this->table);
    $this->var = $var;
    $this->var = $var;
    $this->var = $var;
    $this->var = $var;
    $this->var = $var;
  }

  public function save(){

    $queryInsert = "  INSERT INTO $this->table (codigo, var, var, var, var, var,
                      fechacreacion, horacreacion, estado, usuario, fechamodificacion, horamodificacion, usuariomodificacion)
                      VALUES (".$this->getId().",
                        '".$this->var."',
                        '".$this->var."',
                        '".$this->var."',
                        '".$this->var."',
                        '".$this->var."',
                        current_date, current_time, 'ACTIVO', 1, current_date, current_time, null
                        )  ";

    $mensaje = $this->getConn()->executeQuery($queryInsert);

    if($mensaje == 'success'){
      $this->mensajeCorrecto = $mensaje;
    }else{
      $this->mensajeError = $mensaje;
    }

  }

  public function buscar(){
    $objetos = $this->getAll();
    return $objetos;
  }

  public function datosEditar($id){
    $objetos = $this->getById($id);
    return $objetos;
  }

  public function editar($id){
    $queryInsert = "  UPDATE $this->table
                      SET
                      var = '".$this->var."', var = '".$this->var."',
                      var = '".$this->var."', var = '".$this->var."',
                      var = '".$this->var."'
                      WHERE codigo = $id;";

    $mensaje = $this->getConn()->executeQuery($queryInsert);

    if($mensaje == 'success'){
      $this->mensajeCorrecto = $mensaje;
    }else{
      $this->mensajeError = $mensaje;
    }

    $objetos = $this->getById($id);
    return $objetos;

  }

  public function getMessageOk(){
    return $this->mensajeCorrecto;
  }

  public function getMessageError(){
    return $this->mensajeError;
  }

}


?>
