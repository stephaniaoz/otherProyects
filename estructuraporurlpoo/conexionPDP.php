<?php
/**
 *
 */
class Conexion {

  private $driver, $host, $user, $pass, $database, $port;
  private $conne, $result;

  function __construct() {
    include_once("config/db.php");
    $this->driver = DRIVER;
    $this->host = SRV;
    $this->user = USR;
    $this->pass = PAS;
    $this->database = BDA;
    $this->port = PRT;
  }
  
  public function conectar(){

    $dsn = $this->driver.":host=".$this->host.";port=".$this->port.";dbname=".$this->database.";user=".$this->user.";password=".$this->pass."";

    try {
      $this->conne = new PDO($dsn);
      $this->conne->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      if($this->conne){
        //echo 'Conectado a '.$this->conne->getAttribute(PDO::ATTR_CONNECTION_STATUS);
      }

    }catch(PDOException $e ) {
        echo 'Error conectando a la BBDD. '.$ex->getMessage();
        echo $e->getTraceAsString();
    }

  }

  public function getConexion(){
    return $this->conne;
  }

  public function executeQuery($query){
    try {
         $this->result = $this->conne->query($query);
         $mensaje = "success";
    } catch (PDOException $e) {
        if ($e->getCode() == 1062) {
            // Take some action if there is a key constraint violation, i.e. duplicate name
            $mensaje = "is a key constraint violation";
        } else {
            $mensaje = "Se ha generado un error: <br>".$e;
            //throw $e;
        }
    }
    return $mensaje;
    //echo "num::".$result->rowCount()."<br>";
  }

  public function countRows(){
    return $this->result->rowCount();
  }

  public function getObjects(){
    $objetos = array();

    while ($obj = $this->result->fetchObject()) {
        $objetos[] = $obj;
    }
    //echo "<pre>";
    //print_r($objetos);
    return $objetos;
  }

}

/*
$ob = new Conexion();
$ob->executeQuery("select * from pais");
$rows = $ob->countRows();
$objetos = $ob->getObjects();

echo "<pre>";
print_r($objetos);
*/
?>
