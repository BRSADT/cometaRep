<?php
include 'Conexion.php';
$nombreUsuario= $_POST["nombre"];
$apellidoUsuario= $_POST["apellido"];
$usuario= $_POST["usuario"];
$contrasena= $_POST["contrasena"];
$fechaNac= $_POST["fechanac"];
$mysqlDate = date("Y-m-d",strtotime($fechaNac));
$estadoUsuario=$_POST["estadousuario"];
$existeusuario=0;//no existe
$con=new conexion();
$conexion=$con->getConexion();
if($conexion!=NULL){


  foreach($conexion->query('SELECT usuarioLogIn from usuario') as $datos) {

if( $datos['usuarioLogIn'] ==$usuario){
  $existeusuario=1;//si existe
}

}

if(  $existeusuario==0){

$insertar = $conexion->prepare('INSERT INTO  usuario (usuarioContrasena, usuarioNombre,usuarioApellido,usuarioHabilitado,usuarioLogin,usuarioFnacimiento)  VALUES (:usuarioContrasena, :usuarioNombre,:usuarioApellido,:usuarioHabilitado,:usuarioLogin,:usuarioFnacimiento)');

      $insertar->bindParam(':usuarioContrasena', $contrasena);
    $insertar->bindParam(':usuarioNombre', $nombreUsuario);
    $insertar->bindParam(':usuarioApellido', $apellidoUsuario);
    $insertar->bindParam(':usuarioHabilitado', $estadoUsuario);
        $insertar->bindParam(':usuarioLogin', $usuario);
            $insertar->bindParam(':usuarioFnacimiento', $mysqlDate);

$insertar->execute();


}
else {
  echo"existe ya ese usuario";
}

}
 ?>
