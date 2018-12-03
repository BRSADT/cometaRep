<?php
include 'Conexion.php';
$link="";
$usuario=$_POST['usuario'];
$contra=$_POST['contra'];

$codigoUser=0;
$estadoAcceso=0; //0Noentrar 1 usuariovalido 2 ambas validas;


$con=new conexion();
$conexion=$con->getConexion();
if($conexion!=NULL){



foreach($conexion->query('SELECT usuarioNombre,usuarioApellido,usuarioCodigo,usuarioLogIn,usuarioContrasena,usuarioFoto from usuario') as $datos) {

           if( strcmp (   $datos['usuarioLogIn'] , $usuario )==0){
          echo  $datos['usuarioLogIn'];
         if(strcmp (   $datos['usuarioContrasena'] , $contra )==0){
           $consultaObtenercodPuesto = $conexion->prepare("SELECT codigoPuesto FROM puesto WHERE codigoNombre=:id");
          $consultaObtenercodPuesto->execute(['id' => $datos['usuarioCodigo']]);
          $codigoPuesto = $consultaObtenercodPuesto->fetch();


          $consultaObtenerlink = $conexion->prepare("SELECT link FROM nombresPuestos WHERE Puestos_codigoPuesto=:id");
           $consultaObtenerlink->execute(['id' => $codigoPuesto['codigoPuesto']]);
           $link = $consultaObtenerlink->fetch();

           session_start();
           $_SESSION['codigoPuesto']  =  $codigoPuesto['codigoPuesto'];

           $_SESSION['codigo']  =  $codigoUser=$datos['usuarioCodigo'];
           $_SESSION['nombre']  =  $codigoUser=$datos['usuarioNombre'];
           $_SESSION['apellido']  =  $codigoUser=$datos['usuarioApellido'];
           $_SESSION['usuarioFoto']  =  $datos['usuarioFoto'];
           $_SESSION['instante']   = time();
           $estadoAcceso=2;
         }
       }
    }
if($estadoAcceso==2 ){
  if( $_SESSION['codigo'] !=NULL){
  $linkHeader=$link['link'];
    header("refresh:0; url=../HTML/$linkHeader");
}}
else
{
  $message = "Lo sentimos, datos incorrectos";
  echo "<script type='text/javascript'>alert('$message');</script>";
    header("refresh:0; url=../HTML/paginaIndex.php");

}



}








 ?>
