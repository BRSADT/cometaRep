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
echo $codigo;
echo"hola";
if($conexion!=NULL){


$insertar = $conexion->prepare('UPDATE usuario SET usuarioNombre = :usuarioNombre,usuarioApellido = :usuarioApellido,usuarioFnacimiento = :usuarioFnacimiento,contratacion = :contratacion WHERE usuarioCodigo = :usuarioCodigo');

    $insertar->bindValue(':usuarioNombre', $nombreUsuario);
    $insertar->bindValue(':usuarioApellido', $apellidoUsuario);
    $insertar->bindValue(':usuarioFnacimiento', $FNac);
    $insertar->bindValue(':contratacion', $Fcontratacion);
    $insertar->bindValue(':usuarioCodigo', $codigo);

$insertar->execute();





}
 ?>
