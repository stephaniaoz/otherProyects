<?php

/**
 *
 */
class BaseModel {

  private $table;
  //private $conn;
  private $conexion;

  function __construct($table) {
    include_once 'db/Conexion.php';
    $this->conexion = new Conexion();
    $this->conexion->conectar();
    //$this->conn = $this->conexion->getConexion();
    $this->table = $table;
  }
  /*
  public function getConn(){
    return $this->conn;
  }*/

  public function getConn(){
    return $this->conexion;
  }

  public function getAll(){
    $query = "select * from $this->table  ORDER BY codigo ASC ";
    $mensaje = $this->conexion->executeQuery($query);

    $rows = $this->conexion->countRows();
    $objetos = $this->conexion->getObjects();

    return $objetos;
  }

  public function getById($id){
    $query = "SELECT * FROM $this->table WHERE codigo = $id";
    $mensaje = $this->conexion->executeQuery($query);
    $rows = $this->conexion->countRows();
    $objetos = $this->conexion->getObjects();

    return $objetos;
  }

  public function getBy($column,$value){
      $this->conn->executeQuery("SELECT * FROM $this->table WHERE $column='$value'");
      $rows = $this->conn->countRows();
      $objetos = $this->conn->getObjects();
  }

  public function deleteById($id){
      $query = $this->conn->executeQuery("SELECT * FROM $this->table WHERE $column='$value'");
  }

  public function deleteBy($column,$value){
      $query = $this->conn->executeQuery("DELETE FROM $this->table WHERE $column='$value'");
  }

  public function getId(){
    $queryId = "  SELECT case when max(codigo) = 0 then 1 else (max(codigo) + 1) end as id
                  FROM $this->table ";
    $this->conexion->executeQuery($queryId);
    $rows = $this->conexion->countRows();
    $objetos = $this->conexion->getObjects();

    return $objetos[0]->id;
  }

	public function where($where){

    $queryId = "  SELECT *
                  FROM $this->table
                  WHERE $where";
    $this->conexion->executeQuery($queryId);
    $rows = $this->conexion->countRows();
    $objetos = $this->conexion->getObjects();

    return $objetos;
  }

  public function getAllRutas(){
    $query = "select * from tabla ORDER BY ordenrutarecogida asc ";
    $mensaje = $this->conexion->executeQuery($query);

    $rows = $this->conexion->countRows();
    $objetos = $this->conexion->getObjects();

    return $objetos;
  }

}


?>
