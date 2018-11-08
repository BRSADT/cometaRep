<?php
include 'Conexion.php';
$x1 = $_POST['x1'];
$y1 = $_POST['y1'];
$x2 = $_POST['x2'];
$y2 = $_POST['y2'];
$anchura = $_POST['anchura'];
$altura = $_POST['altura'];
$anchoIpagina=$_POST['anchoImagenPagina'];
$algoIpagina=$_POST['altoImagenPagina'];

echo '<script type="text/javascript">alert("hello!");</script>';




if(isset($_POST['title'])){
$title = $_POST['title'];
fwrite($myfile, $x1);


$file_name = $_FILES['file']['name'];


$file_type = pathinfo($file_name, PATHINFO_EXTENSION);



$myfile = fopen("dimensiones.txt", "w");

fwrite($myfile, "de la imagen en la pagina ancho es  300 largo es 300 su  x1= $x1 y1= $y1 x2=$x2 y y2 es $y2 ancho seleccion $anchura y largo es $altura ");
fwrite($myfile, "si se suma x1+anchura =x2 y y1+altura=y2 \n ");



$imagenOri = getimagesize($_FILES['file']['tmp_name']);    //Sacamos la información
$anchoOri = $imagenOri[0];              //Ancho
$altoOri = $imagenOri[1];


fwrite($myfile, "  imagen de 300x300 x= ".$x2." y= ".$y2);
$destinox=$x1;
$destinoy=$y1;

$porcentajeX=$x1*100/$anchoIpagina;
$x1ImagenGuardada=($anchoOri*$porcentajeX)/100;

$porcentajeX=$x2*100/$anchoIpagina;
$x2ImagenGuardada=($anchoOri*$porcentajeX)/100;





$porcentajeY=$y1*100/$algoIpagina;
$y1ImagenGuardada=($altoOri*$porcentajeY)/100;

$porcentajeY=$y2*100/$algoIpagina;
$y2ImagenGuardada=($altoOri*$porcentajeY)/100;



$porcentajeX=$x1*100/$anchoIpagina;
$x1ImagenRECORTADA=($anchura*$porcentajeX)/100;

$porcentajeX=$x2*100/$anchoIpagina;
$x2ImagenRECORTADA=($anchura*$porcentajeX)/100;



$porcentajeY=$y1*100/$algoIpagina;
$y1ImagenRECORTADA=($altura*$porcentajeY)/100;

$porcentajeY=$y2*100/$algoIpagina;
$y2ImagenRECORTADA=($altura*$porcentajeY)/100;

$anchoImagenrecortada=$x2ImagenRECORTADA-$x1ImagenRECORTADA;
$altoImagenrecortada=$y2ImagenRECORTADA-$y1ImagenRECORTADA;


$manejadorDeOrigen = imagecreatefromjpeg($_FILES['file']['tmp_name']);
$anchoOri=$x2ImagenGuardada-$x1ImagenGuardada;
  $altoOri=$y2ImagenGuardada-$y1ImagenGuardada;
$manejadorDeDestino = ImageCreateTrueColor($anchoOri,$altoOri);
imagecopyresampled(
  $manejadorDeDestino,
  $manejadorDeOrigen,
0,
	0,
$x1ImagenGuardada,
$y1ImagenGuardada,
 $anchoOri,
 $altoOri,
 $anchoOri,
 $altoOri
);

imagejpeg($manejadorDeDestino,"../Imagenes/Fotografias/".$file_name, 100);

$con=new conexion();
$conexion=$con->getConexion();
if($conexion!=NULL){


           session_start();
           $insertar = $conexion->prepare('UPDATE usuario SET usuarioFoto=:usuarioFoto Where usuarioCodigo=:usuarioCodigo');


    $insertar->bindParam(':usuarioFoto', $file_name);

        $insertar->bindParam(':usuarioCodigo', $_SESSION['codigo'] );
$insertar->execute();
 $_SESSION['usuarioFoto']=$file_name;
}

}




?>
