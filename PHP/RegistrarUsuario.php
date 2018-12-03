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

$myfile = fopen("file.txt", "w");
fwrite($myfile, $contrasena);
fwrite($myfile, $nombreUsuario);
fwrite($myfile, $apellidoUsuario);
fwrite($myfile, $estadoUsuario);
fwrite($myfile, $usuario);
fwrite($myfile,$mysqlDate);


if($conexion!=NULL){


  foreach($conexion->query('SELECT usuarioLogIn from usuario') as $datos) {

if( $datos['usuarioLogIn'] ==$usuario){
  $existeusuario=1;//si existe
fwrite($myfile,"existee");
}

}

if(  $existeusuario==0){

$insertar = $conexion->prepare('INSERT INTO  usuario (usuarioContrasena, usuarioNombre,usuarioApellido,usuarioHabilitado,usuarioLogin,usuarioFoto)  VALUES (:usuarioContrasena, :usuarioNombre,:usuarioApellido,:usuarioHabilitado,:usuarioLogin,:defecto)');

try {
  $insertar->bindValue(':usuarioContrasena', $contrasena);
$insertar->bindValue(':usuarioNombre', $nombreUsuario);
$insertar->bindValue(':usuarioApellido', $apellidoUsuario);
$insertar->bindValue(':usuarioHabilitado', $estadoUsuario);
    $insertar->bindValue(':usuarioLogin', $usuario);
    
        $defecto="defecto";
  $insertar->bindValue(':defecto', $defecto);
$insertar->execute();

}

catch (\Exception $e) {
  fwrite($myfile,$e);

}

}
else {
  fwrite($myfile,"existe este usuario");

  echo"existe ya ese usuario";
}
  header("refresh:0; url=../HTML/capitan.php");
}
 ?>
