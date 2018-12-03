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
    <!-- Custom styles for this template <link href="dashboard.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>

  <body>

    <?php  session_start();

    if(!isset($_SESSION['nombre'])||$_SESSION['codigoPuesto']!=1)
    {

         header("refresh:0;url=../HTML/paginaIndex.php?");


    }
    else{
    ?>

        <aside class="normal col-12 col-md-3 col-sm-4 col-lg-3  p-0  fixed-top ">
          <div id="fondoAside">
              <img src="../Imagenes/fondo" class="stretch" alt="" />
          </div>
          <div id="pestaña">
    <ion-icon name="planet" class="planeta" style="
    right: 2%;
  position: absolute;
  height: 100%;
  width: 20%;
  display: inline;
  left: auto;
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
                    <div class="Bienvenida">

                      <p data-text="PSYCHO">Bienvenido</p>

                    </div>


</article>

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
  <h4 class="modal-title">Acomode su foto de perfil</h4>
        <button type="button" id="CerrarModal" class="close" data-dismiss="modal">&times;</button>

      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <figure>
        <img src="" id="imagen" alt=""    style=" max-width: 300px;  max-height: 300px;">

      </figure>
      </div>




      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default"  id="boton_de_recorte" data-dismiss="modal">Guardar</button>
      </div>

    </div>
  </div>
</div>

</div>



</div>




<?php

}

?>
  </body>
</html>
<script src="https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"></script>
