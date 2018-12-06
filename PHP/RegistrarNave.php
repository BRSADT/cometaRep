<?php
include 'Conexion.php';
$nombreNave= $_POST["nombreNave"];
$estadoNave = $_POST["estadoNave"];
$descripcionNave = $_POST["descripcionNave"];
$con=new conexion();
$conexion=$con->getConexion();

$myfile = fopen("file.txt", "w");


if($conexion!=NULL){

$insertar = $conexion->prepare('INSERT INTO nave (naveAlias, naveDescripcion, naveStatus, EnMision, naveFoto) VALUES (:nombreNave, :descripcionNave, :estadoNave, 0, "defecto")');

try {
$insertar->bindValue(':nombreNave', $nombreNave);
$insertar->bindValue(':estadoNave', $estadoNave);
$insertar->bindValue(':descripcionNave', $descripcionNave);
$insertar->execute();


}

catch (\Exception $e) {
  fwrite($myfile,$e);

}


}

header("refresh:0; url=../HTML/RegistroNave.php");
 ?>
