<?php

session_start();

   if(!isset($_SESSION['nombre']))
   {
      

   header("refresh:0;url=../HTML/paginaIndex.php?");
   }
   else
   {
     session_destroy();
       //echo "Has cerrado la sesion";
   header("refresh:0;url=../HTML/paginaIndex.php?");
   }





 ?>
