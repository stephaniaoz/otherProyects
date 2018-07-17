<?php

/**
 *
 */
class LoginModel extends BaseModel
{

  private $login;
  private $password;
  private $mensajeCorrecto = "";
  private $mensajeError = "";

  private $table = "tercero1";

  /*
  function __construct(){
    parent::__construct($this->table);
  }*/

  function __construct($login="",$password="") {
    parent::__construct($this->table);
    $this->login = $login;
    $this->password = $password;

  }

  public function buscar(){
    //$objetos = $this->getAll();
    $where = " login = '".$this->login."' AND passwd = '".$this->password."';";
    $objetos = $this->where($where);
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
