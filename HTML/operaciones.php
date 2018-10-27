

  <?php
if(isset($_POST['figuras']))
{
  $var=5;
$figura= $_POST['figuras'];
$base=5;
$altura=10;
$area=0;
$lado=5;
$a=5;
$b=2;
$nombre="";
$radio=5;
  switch ($figura) {
case 1:
$area=$lado*$lado;
$nombre="cuadrado";
  break;
  case 2:
  $nombre="rectangulo";
  $area=$base*$altura;
    break;
    case 3:
      $nombre="Triangulo";
        $area=($base*$altura)/2;
      break;
      case 4:
        $nombre="Trapecio";
      $area=$altura(($a+$b)/2);
        break;
        case 5:
          $nombre="Circulo";
        $area=3.1416*($radio*$radio);
          break;


  }
  //resultado
   echo "<a href='ejercicioDireccionamiento.php?opc=$var&res=$area&nombre=$nombre'><button>Regresar</button></a>";

}



  if(isset($_POST['opcion']))
  {
  $opcion=1;
$opcion=$_POST["opcion"];

switch ($opcion) {
  case 1:
  ?>

  <script type="text/javascript">
  var vari=1;
  var numFinFib=6;
  var n1=1;
  var n2=0;
  var suma=0;
  for (var i=0; i<numFinFib-1; i++) {
  suma=n1+n2;
  n1=n2;
  n2=suma;

  }
  //resultados

  setTimeout("location.href='ejercicioDireccionamiento.php?opc=SetTimeout'+'&res='+suma+'&opc='+vari",2000);
  </script>
<?php


    break;
  case 2:
  $var=2;
  $num1 = 4;
  $num2 = 1;
  $num3 = 5;

  If($num1 > $num2){
  If($num1 > $num3){
echo "<script>window.location='ejercicioDireccionamiento.php?opc=$var&res=$num1';</script>";
  } else {
    echo "<script>window.location='ejercicioDireccionamiento.php?opc=$var&res=$num3';</script>";

  }
  } else {
  If($num2 > $num3){
echo "<script>window.location='ejercicioDireccionamiento.php?opc=$var&res=$num2';</script>";
  } else {
echo "<script>window.location='ejercicioDireccionamiento.php?opc=$var&res=$num3';</script>";
  }
  }


  break;
  case 3:
  ?>

  <script type="text/javascript">
  var vari=3;
  var num=5;
  var factorial=1;

  for (var i=1; i <= num; i++) {
  factorial=factorial*i;
    }
  window.location="ejercicioDireccionamiento.php?opc=Window.Location"+"&res="+factorial+"&opc="+vari;
  </script>
<?php
  break;



  case 4:
  $var=4;
  $arrayDetalle = Array();
$multiplicando=2;
$multiplicador=4;
$contador=0;


while($multiplicando>=1){

$arrayMultiplicando[$contador]=(int)($multiplicando);
$arrayMultiplicador[$contador]=(int)($multiplicador);
$multiplicando/=2;
$multiplicador*=2;
$suma=0;
$contador++;
}
for ($i=0; $i<$contador; $i++) {
if($arrayMultiplicando[$i]%2!=0)
{
$suma=$suma+$arrayMultiplicador[$i];
}
}
//este es el resultado

  header("refresh:3; url=ejercicioDireccionamiento.php?opc=$var&res=$suma");

  break;
  case 5:
  ?>
  <form class="opcionesfiguras" action="operaciones.php" method="post">
    <select name="figuras">
    <option value="1">Cuadrado</option>
    <option value="2">Rectangulo</option>
    <option value="3">Triangulo</option>
    <option value="4">Trapecio</option>
    <option value="5">Circulo</option>
  <input type="submit" value="Submit">
  </select>



<?php
    break;

  default:
    // code...
    break;
}
}

  ?>
