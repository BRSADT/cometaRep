<?php

try {
  session_start();

$_SESSION['codigoUsuarioMod'] =  $_POST['codigo'];


} catch (\Exception $e) {

}

 ?>
