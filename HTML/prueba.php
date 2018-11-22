<?php


$codigo=$_GET['d'];
echo $codigo;
$myfile=fopen("holis.txt","w");

  fwrite($myfile, $codigo);


 ?>
