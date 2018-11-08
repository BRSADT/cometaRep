<?php
        include '../php/Conexion.php';
        $con=new conexion();
        $conexion=$con->getConexion();
        if($conexion!=NULL){
            $conexion->query('Delete from nave where naveCodigo = ' . $_POST["naveCodigo"] . '');

        }
        header("refresh:0; url=../HTML/Ingenieria.php");
            ?>