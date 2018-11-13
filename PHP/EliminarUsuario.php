<?php
include 'Conexion.php';

$codigos=$_POST['codigos'];
$myfile=fopen("file.txt","w");
$con=new conexion();
$conexion=$con->getConexion();
if($conexion!=NULL){



for ($i=0; $i < sizeof($codigos) ; $i++) {
    fwrite($myfile, "");
try {
  fwrite($myfile, $codigos[$i]);
  $eliminar = $conexion->prepare('DELETE from  usuario  where usuarioCodigo = '.$codigos[$i].'');

  //$eliminar->bindParam(':Codigo', '4');
    $eliminar->execute();

} catch (\Exception $e) {
    fwrite($myfile, $e);
}


}


}


 ?>
