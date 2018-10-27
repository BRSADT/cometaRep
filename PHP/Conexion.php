<?php
class conexion {
protected $conexion;


function __construct(){
  $this->VerifyConexion();

}

public function getConexion(){
return $this->conexion;
}


  protected  function VerifyConexion() {
      try {
          $this->conexion = new PDO('mysql:host=localhost;dbname=cometa', "root", "");
          return(true);
        }catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            return(false);
            die();

        }
    }



}
