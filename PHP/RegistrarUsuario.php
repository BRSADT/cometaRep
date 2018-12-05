<?php
include 'Conexion.php';
$nombreUsuario= $_POST["nombre"];
$apellidoUsuario= $_POST["apellido"];
$usuario= $_POST["usuario"];
$fechaNac= $_POST["fechanac"];
$fechaCont= $_POST["fechacontratacion"];
$mysqlnac = date("Y-m-d",strtotime($fechaNac));
$mysqlcont = date("Y-m-d",strtotime($fechaCont));
$contrasena= $_POST["contrasena"];
$genero= $_POST["genero"];
$puesto= $_POST["puesto"];
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
fwrite($myfile,$mysqlnac);


if($conexion!=NULL){


  foreach($conexion->query('SELECT usuarioLogIn from usuario') as $datos) {

if( $datos['usuarioLogIn'] ==$usuario){
  $existeusuario=1;//si existe
fwrite($myfile,"existee");
}

}

if(  $existeusuario==0){

$insertar = $conexion->prepare('INSERT INTO  usuario (usuarioContrasena, usuarioNombre,usuarioApellido,usuarioHabilitado,usuarioLogin,usuarioFoto,usuarioGenero,contratacion,usuarioFnacimiento)  VALUES (:usuarioContrasena, :usuarioNombre,:usuarioApellido,:usuarioHabilitado,:usuarioLogin,:defecto,:usuarioGenero,:contratacion,:nacimiento)');

try {
  $insertar->bindValue(':usuarioContrasena', $contrasena);
$insertar->bindValue(':usuarioNombre', $nombreUsuario);
$insertar->bindValue(':usuarioApellido', $apellidoUsuario);
$insertar->bindValue(':usuarioHabilitado', $estadoUsuario);
    $insertar->bindValue(':usuarioLogin', $usuario);
      $insertar->bindValue(':usuarioGenero',$genero );
    $insertar->bindValue(':contratacion',$mysqlcont );
      $insertar->bindValue(':nacimiento',$mysqlnac);

        $defecto="defecto";
  $insertar->bindValue(':defecto', $defecto);
$insertar->execute();

}

catch (\Exception $e) {
  fwrite($myfile,$e);

}
//OBTENER el codigoPuesto

$obtenerCodigo=$conexion->prepare('SELECT Puestos_codigoPuesto FROM `nombrespuestos` WHERE nombrePuestos=:NombrePuesto');
echo $puesto;
$obtenerCodigo->bindValue(':NombrePuesto',$puesto);
$obtenerCodigo->execute();
$resultCodigo = $obtenerCodigo->fetch(PDO::FETCH_ASSOC);
echo $resultCodigo['Puestos_codigoPuesto']; // codigo puesto

$sentenciaCodigoUsuario=$conexion->prepare('SELECT  usuarioCodigo from usuario where usuarioLogIn=:logIn');
echo $usuario;
$sentenciaCodigoUsuario->bindValue(':logIn',$usuario);
$sentenciaCodigoUsuario->execute();
$resultCodigoUsuario = $sentenciaCodigoUsuario->fetch(PDO::FETCH_ASSOC);
echo $resultCodigoUsuario['usuarioCodigo']; // codigo  Tripulante

$puesto_codigo=$resultCodigo['Puestos_codigoPuesto'];
$codigoUsuario=$resultCodigoUsuario['usuarioCodigo'];

echo "/n";

$sentenciaCodigoUsuario=$conexion->prepare('SELECT  codigoPuesto from puesto where codigoUsuario=:cod');
$sentenciaCodigoUsuario->bindValue(':cod',"1");
$sentenciaCodigoUsuario->execute();
$resultCodigoUsuario = $sentenciaCodigoUsuario->fetch(PDO::FETCH_ASSOC);
echo $resultCodigoUsuario['codigoPuesto']; // codigo  Tripulante

echo "/n";

try {

$ins = $conexion->prepare('INSERT INTO puesto (codigoPuesto, codigoUsuario)  VALUES (:puesto, :usuario)');

$ins->bindValue(':puesto', $puesto_codigo);
$ins->bindValue(':usuario', $codigoUsuario);
$ins->execute();

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
