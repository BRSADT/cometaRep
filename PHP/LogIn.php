<?php

$usuario=$_POST['usuario'];
$contra=$_POST['contra'];
$codigoUser=0;
$estadoAcceso=0; //0Noentrar 1 usuariovalido 2 ambas validas;
echo $usuario;
echo$contra;


try {
    $mbd = new PDO('mysql:host=localhost;dbname=cometa', "root", "");
    foreach($mbd->query('SELECT usuarioCodigo,usuarioLogIn,usuarioContrasena from usuario') as $datos) {
       print_r($datos['usuarioLogIn']);
       if($datos['usuarioLogIn']==$usuario){
         echo "usuario es correcto";

         if($datos['usuarioContrasena']==$contra){
           echo "Acceso correcto";
           $codigoUser=$datos['usuarioCodigo'];
         }
       }
    }
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}







 ?>
