<?php
include 'Conexion.php';
$myfile=fopen("file.txt","w");
  fwrite($myfile, "descripcion");
$descripcion=$_POST['descripcion'];
$fecha=$_POST['fecha'];
$codigoIng=$_POST['codigoIng'];
$codigoNave=$_POST['codigoNave'];
$mysqlfecha = date("Y-m-d",strtotime($fecha));

  fwrite($myfile, $descripcion);
  fwrite($myfile, $mysqlfecha);
  fwrite($myfile, $codigoIng);
  fwrite($myfile, $codigoNave);



  $con=new conexion();
  $conexion=$con->getConexion();
  if($conexion!=NULL){



    $insertar = $conexion->prepare('INSERT INTO  reportes (reportesFechaInicio,reportesDescripcion,reportes_usuarioCodigo,reportes_codigoNave)  VALUES (:fecha,:descripcion,:usuarioCodigo,:naveCodigo)');

    $insertar->bindValue(':fecha', $mysqlfecha);
  $insertar->bindValue(':descripcion', $descripcion);
  $insertar->bindValue(':usuarioCodigo', $codigoIng);
  $insertar->bindValue(':naveCodigo', $codigoNave);
  $insertar->execute();


    $modNav = $conexion->prepare('UPDATE nave SET NaveStatus="No Habilitada" where naveCodigo=:naveCodigo');


  $modNav->bindValue(':naveCodigo', $codigoNave);
  $modNav->execute();

}


?>
