<?php
include 'Conexion.php';

$codigos=json_decode($_POST['codigosE']);
$myfile=fopen("file.txt","w");
$con=new conexion();
$conexion=$con->getConexion();
if($conexion!=NULL){
    fwrite($myfile, "prueba");
  fwrite($myfile, sizeof($codigos));
fwrite($myfile, "---");
fwrite($myfile, $codigos[0]);
for ($i=0; $i < sizeof($codigos) ; $i++) {
    fwrite($myfile, "**");
try {
  fwrite($myfile, $codigos[$i]);



  $eliminar = $conexion->prepare('DELETE from  usuario  where usuarioCodigo = :Codigo');
  //se tuvo que usar bind value por la referencia
  $eliminar->bindValue(":Codigo",  $codigos[$i], PDO::PARAM_STR);
    $eliminar->execute();

} catch (\Exception $e) {
    fwrite($myfile, $e);
}


}

header("Refresh:0");
}


 ?>
