<?php

include 'Conexion.php';
$myfile=fopen("file.txt","w");


$codigos=json_decode($_POST['codigosRep']);



$con=new conexion();
$conexion=$con->getConexion();
if($conexion!=NULL){


for ($i=0; $i < sizeof($codigos) ; $i++) {



$nave= $conexion->prepare('Select reportes_codigoNave from  reportes  where reportesCodigo = :Codigo');
$nave->bindValue(":Codigo",  $codigos[$i]);
$nave->execute();
$resultNave = $nave->fetch(PDO::FETCH_ASSOC);

$naveR=$resultNave['reportes_codigoNave'];






  $eliminar = $conexion->prepare('DELETE from  reportes  where reportesCodigo = :Codigo');
  //se tuvo que usar bind value por la referencia
  $eliminar->bindValue(":Codigo",  $codigos[$i]);
    $eliminar->execute();






    $nave1= $conexion->prepare('Select reportes_codigoNave from  reportes  where reportes_codigoNave = :Codigo');
    $nave1->bindValue(":Codigo", $naveR);
    $nave1->execute();
    $resultNave1 = $nave1->fetch(PDO::FETCH_ASSOC);
    $Lanave= $resultNave1['reportes_codigoNave'];

 fwrite($myfile, $Lanave);

if(sizeof($resultNave1['reportes_codigoNave'])==0)
{  fwrite($myfile, "Sin REPORTES");
 fwrite($myfile, "Sin REPORTES");
      $modNav = $conexion->prepare('UPDATE nave SET NaveStatus="Habilitada" where naveCodigo=:naveCodigo');


    $modNav->bindValue(':naveCodigo', $naveR);
    $modNav->execute();



}else{

  fwrite($myfile, "Con REPORTES");
}





}

}
















 ?>
