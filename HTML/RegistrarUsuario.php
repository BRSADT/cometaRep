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
<link rel="stylesheet" href="../CSS/RegistrarNave.css">
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

                 <aside class="normal col-12 col-md-3 col-sm-4 col-lg-3  p-0  fixed-top">
          <div id="fondoAside">
              <img src="../Imagenes/fondo" class="stretch" alt="" />
          </div>

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
<p><strong>

  <?php
  echo " ".$_SESSION['nombre']." ".$_SESSION['apellido'];
   ?>
   </strong>
</p>
    </div>


</div>

<div id="pestaña">
    <ion-icon name="planet" class="planeta"></ion-icon>
        <ul class="contenido-capitan">
          <li><a href="RegistrarUsuario.php">Registrar usuario</a></li>
          <li><a href="RegistroNave.php">Registrar nave</a></li>
          <li><a href="TablaUsuarios.php">Info usuarios</a></li>
          <li><a href="TablaNaves.php">Info naves</a></li>
        </ul>
        </div>

            <nav class="normal navbarflex-md-column flex-row align-items-start py-2">

            </nav>



                      <form method="post" action="../PHP/Salir.php">
            <input type="submit" value="Salir" class="button"/>
          </form>
        </aside>





<article class="col-lg-9  offset-lg-3 col-md-9  offset-md-3 col-sm-8  offset-sm-4">
  <div id="fondoarticle">
       <img src="../Imagenes/puntos" class="stretch" alt="" />
   </div>



<!--  <main class="RegistroUsuario">
    <form action="../PHP/RegistrarUsuario.php" id="RegUsuario" method="post" onsubmit="return validacionUsuario()" >
      Nombre: <input type="text" name="nombre" id="NombreUsuario" ><br>
      Apellido: <input type="text" name="apellido" id="ApellidoUsuario" ><br>
      Usuario: <input type="text" name="usuario" id="Usuario"><br>
      contrasena: <input type="text" name="contrasena"  id="Password"><br>
      Fecha de nacimiento: <input type="date" name="fechanac" id="FechaNac" ><br>
      Estado: <select id="EstadoUsuario" name="estadousuario">
        <option value="habilitado">Habilitado</option>
        <option value="proceso">Proceso</option>
        <option value="baja">Baja</option>
        </select>
        <br>
      <input type="submit" value="Registrar">
    </form>
  </main>
-->

  <div class="registrarNave">

    <div class="container contact-form">
                <div class="contact-image">
                    <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
                </div>
                <form action="../PHP/RegistrarUsuario.php" id="RegUsuario" method="post">
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="nombre" id="NombreUsuario" class="form-control" placeholder="Nombre Tripulante" value="" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" name="apellido" id="ApellidoUsuario" class="form-control" placeholder="Apellido Tripulante" value="" required/>
                            </div>

                            <div class="form-group">
                                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario Tripulante" value="" required/>
                            </div>
                            <div class="form-group">
                            <h6  style="font-weight: 600;  text-align: center;">  Fecha Nacimiento   </h6>   <input type="date" name="fechanac" id="FechaNac" class="form-control" placeholder="Fecha de Nacimiento" value="" required/>
                            </div>
                            <div class="form-group">
                          <h6  style="font-weight: 600;  text-align: center;">  Fecha Contratacion </h6>   <input type="date" name="fechacontratacion" id="FechaNac" class="form-control" placeholder="Fecha de Nacimiento" value="" required/>
                            </div>
                              </div>
                            <div class="col-md-6">

                            <div class="form-group">
                                <input type="password" name="contrasena" id="Password" class="form-control" placeholder="Contraseña" value="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="La contraseña debe contener al menos una mayuscula, una minuscula, un numero, y minimo 6 caracteres" required/>

                            </div>
                            <div class="form-group">
                              <select name='genero' class="form-control" > <option  selected value='Masculino'>Masculino</option> <option  value='Femenino'>Femenino</option> <option  value='Otro'>Otro</option>  </select>
                              </div>
                            <div class="form-group">
                                <select id="EstadoUsuario" name="estadousuario" class="form-control" >
                                 <option value="habilitado">Habilitado</option>
                                 <option value="proceso">Proceso</option>
                                 <option value="baja">Baja</option>
                                 </select>
                            </div>
                            <div class="form-group">
                            <select name='puesto' class="form-control" >  <option selected value='Capitan'>Capitan</option> <option value='Ingenieria'>Ingenieria</option> <option value='Comandante'>Comandante</option>  </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="btnSubmit" class="btnContact" value="Enviar" />
                            </div>
                        </div>


                    </div>
                </form>
    </div>


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
