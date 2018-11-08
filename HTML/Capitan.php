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

 <script src="../JavaScript/CambioDePaginaCapitan.js"></script>
  <script src="../JavaScript/validacion.js"></script>
    <script src="../JavaScript/filtrousuarios.js"></script>
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

        <aside class="normal col-12 col-md-3 col-sm-4 col-lg-3  p-0 bg-dark fixed-top ">
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

                <div id="logo">
                  <?php
                  echo "<img src=../imagenes/Fotografias/".$_SESSION['usuarioFoto'];?>



                                  </div>

                </div>
              </div>

  <div class="atras">
    <div id="logo">
            	<img class="atras-logo" src="../imagenes/logoCap.png" alt="The Elevation Group Logo" />
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


                        <main class="main">
                        <h2>Main</h2>
                        <i class="icon ion-alert "></i> - Using i tag
<br/>
<span class="ion-alert-circled"></span> - Using span tag
          <p>Sriracha biodiesel taxidermy organic post-ironic, Intelligentsia salvia mustache 90's code editing brunch. Butcher polaroid VHS art party, hashtag Brooklyn deep v PBR narwhal sustainable mixtape swag wolf squid tote bag. Tote bag cronut semiotics,
              raw denim deep v taxidermy messenger bag. Tofu YOLO Etsy, direct trade ethical Odd Future jean shorts paleo. Forage Shoreditch tousled aesthetic irony, street art organic Bushwick artisan cliche semiotics ugh synth chillwave meditation.
              Shabby chic lomo plaid vinyl chambray Vice. Vice sustainable cardigan, Williamsburg master cleanse hella DIY 90's blog.</p>

          <p>Ethical Kickstarter PBR asymmetrical lo-fi. Dreamcatcher street art Carles, stumptown gluten-free Kickstarter artisan Wes Anderson wolf pug. Godard sustainable you probably haven't heard of them, vegan farm-to-table Williamsburg slow-carb
              readymade disrupt deep v. Meggings seitan Wes Anderson semiotics, cliche American Apparel whatever. Helvetica cray plaid, vegan brunch Banksy leggings +1 direct trade. Wayfarers codeply PBR selfies. Banh mi McSweeney's Shoreditch selfies,
              forage fingerstache food truck occupy YOLO Pitchfork fixie iPhone fanny pack art party Portland.</p>

          <p>Ethical Kickstarter PBR asymmetrical lo-fi. Dreamcatcher street art Carles, stumptown gluten-free Kickstarter artisan Wes Anderson wolf pug. Godard sustainable you probably haven't heard of them, vegan farm-to-table Williamsburg slow-carb
              readymade disrupt deep v. Meggings seitan Wes Anderson semiotics, cliche American Apparel whatever. Helvetica cray plaid, vegan brunch Banksy leggings +1 direct trade. Wayfarers codeply PBR selfies. Banh mi McSweeney's Shoreditch selfies,
              forage fingerstache food truck occupy YOLO Pitchfork fixie iPhone fanny pack art party Portland.</p>



        </main>
  <main class="RegistroUsuario">
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


  <main class="RegistroNave">
    <form action="#" method="Post">
      Nave Alias: <input type="text" name="nombre"><br>
      Nave Descripcion: <input type="text" name="usuario"><br>
      NaveStatus: <input type="date" name="fechanac"><br>
    <input type="submit" value="Registrar">
    </form>
  </main>

  <main class="InfoNaves">

    <p>tabla naves</p>
  </main>

  <main class="InfoUsuarios">
    <section class="content">
  			<h1>Tripulantes</h1>
  			<div class="col-md-8 col-md-offset-2">
  				<div class="panel panel-default">
  					<div class="panel-body">
  						<div class="pull-right">
  							<div class="btn-group">
  								<button type="button" class="btn btn-success btn-filter" data-target="Capitan">Capitan</button>
  								<button type="button" class="btn btn-warning btn-filter" data-target="Ingenieria">Ingenieria</button>
  								<button type="button" class="btn btn-danger btn-filter" data-target="Investigador">Investigador</button>
  								<button type="button" class="btn btn-default btn-filter" data-target="all">Todos</button>
  							</div>
  						</div>
  						<div class="table-container">
  							<table class="table table-filter">
  								<tbody>


                    <!--
  									<tr data-status="pagado">
  										<td>
  											<div class="ckbox">
  												<input type="checkbox" id="checkbox1">
  												<label for="checkbox1"></label>
  											</div>
  										</td>
  										<td>
  											<a href="javascript:;" class="star">
  												<i class="glyphicon glyphicon-star"></i>
  											</a>
  										</td>
  										<td>
                    		<div class="media">
  												<a href="#" class="pull-left">
  													<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
  												</a>
  												<div class="media-body">
  													<span class="media-meta pull-right">Holas 2016</span>
  													<h4 class="title">
  														Holas
  														<span class="pull-right pagado">(Pagado)</span>
  													</h4>
  													<p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
  												</div>
  											</div>
  										</td>
  									</tr>
                     -->
<?php
include '../PHP/Conexion.php';
$con=new conexion();
$conexion=$con->getConexion();
if($conexion!=NULL){



foreach($conexion->query('SELECT usuarioNombre,usuarioApellido,usuarioCodigo,usuarioLogIn,usuarioContrasena,usuarioFoto,usuarioFnacimiento from usuario') as $datos) {
  $consultaObtenercodPuesto = $conexion->prepare("SELECT codigoPuesto FROM puesto WHERE codigoNombre=:id");
 $consultaObtenercodPuesto->execute(['id' => $datos['usuarioCodigo']]);
 $codigoPuesto = $consultaObtenercodPuesto->fetch();


 $consultaObtenerPuesto = $conexion->prepare("SELECT nombrePuestos FROM nombresPuestos WHERE Puestos_codigoPuesto=:id");
  $consultaObtenerPuesto->execute(['id' => $codigoPuesto['codigoPuesto']]);
 $nombrePuesto = $consultaObtenerPuesto->fetch();

echo"
<tr data-status='".$nombrePuesto['nombrePuestos']."'>
    <td>
      <div class='ckbox'>
        <input type='checkbox' id='checkbox1'>
        <label for='checkbox1'></label>
      </div>
    </td>
    <td>
      <a href='javascript:;' class='star'>
        <i class='glyphicon glyphicon-star'></i>
      </a>
    </td>
    <td>
      <div class='media'>
        <a href='#' class='pull-left'>
        <img src='../imagenes/Fotografias/".$datos['usuarioFoto']."' class='media-photo'>
        </a>
        <div class='media-body'>
          <span class='media-meta pull-right'></span>
          <h4 class='title'>
            ".$datos['usuarioNombre']."   ".$datos['usuarioApellido']."
            <span class='pull-left pagado'  >(".$nombrePuesto['nombrePuestos'].")</span>
          </h4>
          <p class='summary'>
          Codigo Tripulante:   ".$datos['usuarioCodigo']."
          <br>

          Edad:   ".$datos['usuarioFnacimiento']."
          <br>


        </p>
        </div>
      </div>
    </td>
  </tr>
";

}
}

?>

  								</tbody>
  							</table>
  						</div>
  					</div>
  				</div>
  			</div>
  		</section>
  </main>


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
