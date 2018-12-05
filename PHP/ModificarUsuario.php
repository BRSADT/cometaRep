<?php
include 'Conexion.php';
$codigo=$_POST["codigo"];
$nombreUsuario= $_POST["nombre"];
$apellidoUsuario= $_POST["apellido"];
$puestoUsuario= $_POST["puesto"];
$Fcontratacion= $_POST["Fcontratacion"];
$FNac= $_POST["FNac"];


$mysqlDateCONTRATACION = date("Y-m-d",strtotime($Fcontratacion));
$mysqlDateNac = date("Y-m-d",strtotime($FNac));


$genero=$_POST["genero"];



$con=new conexion();
$conexion=$con->getConexion();
if($conexion!=NULL){


$insertar = $conexion->prepare('UPDATE usuario SET usuarioNombre = :usuarioNombre,usuarioApellido = :usuarioApellido,usuarioFnacimiento = :usuarioFnacimiento,contratacion = :contratacion WHERE usuarioCodigo = :usuarioCodigo');
    $insertar->bindValue(':usuarioNombre', $nombreUsuario);
    $insertar->bindValue(':usuarioApellido', $apellidoUsuario);
    $insertar->bindValue(':usuarioFnacimiento', $FNac);
    $insertar->bindValue(':contratacion', $Fcontratacion);
    $insertar->bindValue(':usuarioCodigo', $codigo);
$insertar->execute();


//OBTENER el codigoPuesto del nombre puesto que ingreso

$obtenerCodigo=$conexion->prepare('SELECT Puestos_codigoPuesto FROM `nombrespuestos` WHERE nombrePuestos=:NombrePuesto');
$obtenerCodigo->bindValue(':NombrePuesto',$puestoUsuario);
$obtenerCodigo->execute();
$resultCodigo = $obtenerCodigo->fetch(PDO::FETCH_ASSOC);

$puesto_codigo=$resultCodigo['Puestos_codigoPuesto'];

try {

$ins = $conexion->prepare('INSERT INTO puesto (codigoPuesto, codigoUsuario)  VALUES (:puesto, :usuario)');

$ins->bindValue(':puesto', $puesto_codigo);
$ins->bindValue(':usuario', $codigo);
$ins->execute();

}

catch (\Exception $e) {
  fwrite($myfile,$e);

}




}




header("refresh:0; url=../HTML/tablausuarios.php");


 ?>
