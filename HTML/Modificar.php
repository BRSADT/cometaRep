<!DOCTYPE html>
<html lang="en">
  <head>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
      <title>Dashboard Template for Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='../img_area_select/css/imgareaselect-animated.css'>
  <link rel='stylesheet' href='../img_area_select/css/imgareaselect-default.css'>
  <script src="../img_area_select/img_area_select/js/jquery.imgareaselect.js"></script>
  <script src="../JavaScript/AbrirModal.js"></script>
<script src="../JavaScript/eliminar.js"></script>
 <script src="../JavaScript/CambioDePaginaCapitan.js"></script>
  <script src="../JavaScript/validacion.js"></script>
    <script src="../JavaScript/filtrousuarios.js"></script>
        <script src="../JavaScript/ModificarUsuario.js"></script>
    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="../CSS/capitan.css">
<link rel="stylesheet" href="../CSS/tablausuarios.css">
<link rel="stylesheet" href="../CSS/ionicons.min.css">
<link rel="stylesheet" href="../CSS/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->

  </head>

  <body>
    <?php


    session_start();



    if(!isset($_SESSION['nombre'])||$_SESSION['codigoPuesto']!=1)
    {
         header("refresh:0;url=../HTML/paginaIndex.php?");
    }
    else{
      if(!isset($_SESSION['codigoUsuarioMod']))

{
     header("refresh:0;url=../HTML/tablausuarios.php?");
}
        else{
        $codigo=  $_SESSION['codigoUsuarioMod'];
    ?>

        <aside class="normal col-12 col-md-3 col-sm-4 col-lg-3  p-0 bg-dark fixed-top ">
          <div id="fondoAside">
          <img src="../Imagenes/fondo" class="stretch" alt="" />
      </div>
          <div id="pestaña">
    <ion-icon name="planet" class="planeta" style="
    position: absolute;
    height: 100%;
    width: 20%;
    display: inline;
        left: -20%;
"></ion-icon>
        <ul class="contenido-capitan">
          <li onclick="registroUsuario()">Registrar usuario</li>
          <li onclick="registroNave()">Registrar nave</li>
          <li onclick="InfoUsuarios()">Info usuarios</li>
          <li onclick="InfoNaves()">Info naves</li>
        </ul>
        </div>

          <form method="post" action="../PHP/Salir.php">
            <input type="submit" value="Salir" class="button"/>
          </form>

          <div class="contenedor-imagenes">
            <div class="circulo-alrededor"></div>
            <!-- Used for more of a gyroscope type effect
            <div class="outer-circulo-alrededor"></div>

            -->
            <div class="circle">

            <input type="file"
                     id="avatar" name="avatar" style="opacity: .0; position: absolute; display: block; height: 100%; width: 100%;z-index: 3;"
                     accept="image/png, image/jpeg" />

              <div class="frente">

                <div class="logo">
                  <?php
                  echo "<img src=../imagenes/Fotografias/".$_SESSION['usuarioFoto'];?>



                                  </div>

                </div>
              </div>

  <div class="atras">
    <div class="logo">
            	<img  src="../imagenes/simboloCapitan.jpg" alt="The Elevation Group Logo" />
            </div>
          </div>
</div>





<div id="info">
<p>

  <?php
  echo " ".$_SESSION['nombre']." ".$_SESSION['apellido'];
   ?>
</p>
</div>
            <nav class="normal navbarflex-md-column flex-row align-items-start py-2">

            </nav>
        </aside>





<article class="col-lg-9  offset-lg-3 col-md-9  offset-md-3 col-sm-8  offset-sm-4">
  <div id="fondoarticle">
      <img src="../Imagenes/puntos" class="stretch" alt="" />
  </div>


                        <main class="main">

                        <i class="icon ion-alert "></i>
<br/>
<span class="ion-alert-circled"></span> - Using span tag
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

  <?php
  include '../PHP/Conexion.php';
  $con=new conexion();
  $conexion=$con->getConexion();
  if($conexion!=NULL){



      $obtenerUsuario = $conexion->prepare('SELECT usuarioNombre,usuarioApellido,usuarioCodigo,usuarioLogIn,usuarioGenero,contratacion,usuarioFoto,usuarioFnacimiento,usuarioHabilitado from usuario where usuarioCodigo = :Codigo');
      //se tuvo que usar bind value por la referencia
      $obtenerUsuario->bindValue(":Codigo",  $codigo, PDO::PARAM_STR);
        $obtenerUsuario->execute();
  $obtenerUsuario = $obtenerUsuario->fetch();
$id=$obtenerUsuario['usuarioCodigo'];

$obtenerPuesto= $conexion->prepare('SELECT  codigoPuesto from puesto where codigoUsuario= :CodigoU');

  $obtenerPuesto->bindValue(":CodigoU",  $id);
$obtenerPuesto->execute();
  $obtenerPuesto = $obtenerPuesto->fetch();
$resCodigoPuesto = $obtenerPuesto['codigoPuesto'];


$obtenerNombrePuesto= $conexion->prepare('SELECT  nombrePuestos from nombresPuestos where Puestos_codigoPuesto = :CodigoP');
$obtenerNombrePuesto->bindValue(":CodigoP",  $resCodigoPuesto);
$obtenerNombrePuesto->execute();
$obtenerNombrePuesto = $obtenerNombrePuesto->fetch();
$nombrePuesto=$obtenerNombrePuesto['nombrePuestos'];





  echo"

<div class='panel panel-info'>
<div class='panel-heading'>
<h3 class='panel-title'>".$obtenerUsuario['usuarioNombre']."    ".$obtenerUsuario['usuarioApellido']."</h3>
</div>
<div class='panel-body'>
<div class='row'>
  <div class='col-md-3 col-lg-3 ' align='center'> <img alt='User Pic' src='../imagenes/Fotografias/".$obtenerUsuario['usuarioFoto']."' class='img-circle img-responsive'> </div>



  <div class=' col-md-9 col-lg-9 '>
    <table class='table table-user-information'>
      <tbody>
        <tr>
          <td>Puesto:</td>
          <td>".$nombrePuesto."</td>
        </tr>
        <tr>
          <td>Fecha de contratacion:</td>
          <td>".$obtenerUsuario['contratacion']."</td>
        </tr>
        <tr>
          <td>Fecha de nacimiento</td>
          <td>".$obtenerUsuario['usuarioFnacimiento']."</td>
        </tr>

           <tr>
               <tr>
          <td>Genero</td>
          <td>".$obtenerUsuario['usuarioGenero']."</td>
        </tr>
          <tr>
          <td>Estado</td>
          <td>".$obtenerUsuario['usuarioHabilitado']."</td>
        </tr>

      </tbody>
    </table>
";
}
?>

  </div>
</div>
</div>
   <div class="panel-footer">
          <a data-original-title="Broadcast Message"  style="display='hidden'" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"></a>
          <span class="pull-right">

<?php
           echo "<a href='editarUsuario.php'data-original-title='Edit this user' data-toggle='tooltip' type='button' class='btn btn-sm btn-warning'><i class='glyphicon glyphicon-edit'></i></a>";
 ?>

              <a href='tablausuarios.php' data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
          </span>
      </div>

</div>
</div>
        </main>






</article>



</div>







<?php
}
}

?>
  </body>
</html>
<script src="https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"></script>
