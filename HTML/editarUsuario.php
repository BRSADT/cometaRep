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
        $codigo=$_SESSION['codigoUsuarioMod'];
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
  <form action='../PHP/ModificarUsuario.php' id='RegUsuario' method='post' onsubmit='return validacionUsuario()'>

<div class='panel panel-info'>
<div class='panel-heading'>

 <h3 class='panel-title'>
 <em id='nombre' class='editable' >".$obtenerUsuario['usuarioNombre']."</em>
 <em id='apellido' class='editable' >".$obtenerUsuario['usuarioApellido']."</em>

 </h3>

</div>
<div class='panel-body'>
<div class='row'>
  <div class='col-md-3 col-lg-3 ' align='center'> <img alt='User Pic' src='../imagenes/Fotografias/".$obtenerUsuario['usuarioFoto']."' class='img-circle img-responsive'> </div>



  <div class=' col-md-9 col-lg-9 '>
    <table class='table table-user-information'>
      <tbody>
        <tr>
          <td>Puesto:</td>
          <td>
          <em  id='puesto' class='editable'>".$nombrePuesto."</em>

          </td>
          </tr>
        <tr>
          <td>Fecha de contratacion:</td>
          <td>
          <em  id='Fcontratacion' class='editable'>".$obtenerUsuario['contratacion']."</em>

          </td>
        </tr>
        <tr>
          <td>Fecha de nacimiento</td>
          <td>
          <em   id='FNac' class='editable' >".$obtenerUsuario['usuarioFnacimiento']."</em>
          </td>
        </tr>

           <tr>
               <tr>
          <td>Genero</td>
          <td id='genero' class='editable' >".$obtenerUsuario['usuarioGenero']."</td>
        </tr>

<input type = 'codigo'  name='codigo' style = ' visibility: hidden;' value=".$codigo." />
      </tbody>
    </table>

";
}
?>

  </div>
</div>
</div>
   <div class="panel-footer">
          <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"></a>
          <span class="pull-right">
          <input type="submit"<a href="editarUsuario.php" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"></a>

                        <a href='tablausuarios.php' data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    </span>
      </div>

</div>
</div>
  </form>
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

<script type="text/javascript">
$(function () {
    //Loop through all Labels with class 'editable'.
    $(".editable").each(function () {
        //Reference the Label.
        var label = $(this);


        //Add a TextBox next to the Label.
        if(label.attr('id')=="nombre"){
          label.after("<input type = 'text'  name='nombre' style = ' visibility: hidden;' placeholder='nombre' />");

        }


        if(label.attr('id')=="apellido"){
          label.after("<input type = 'text' id=InputApellido  name='apellido' style = ' visibility: hidden;' />");

        }
        if(label.attr('id')=="puesto"){
          label.after("<?php
          echo" <select name='puesto' id=InputPuesto style = ' visibility: hidden;' >  <option value='Capitan'>Capitan</option> <option value='Ingenieria'>Ingenieria</option> <option value='Comandante'>Comandante</option>   </select> ";?>");


        }
                if(label.attr('id')=="FNac"){
          label.after("<input type = 'date'  name='FNac' style = ' visibility: hidden;' />");

        }
        if(label.attr('id')=="Fcontratacion"){
          label.after("<input type = 'date'  name='Fcontratacion' style = ' visibility: hidden;' />");
        }
        if(label.attr('id')=="genero"){
          label.after("<?php
          echo" <select name='genero' style = ' visibility: hidden;' > <option  selected value='Masculino'>Masculino</option> <option  value='Femenino'>Femenino</option> <option  value='Otro'>Otro</option>  </select> ";?>");

        }

        //Reference the TextBox.
        var textbox = $(this).next();

        //Set the name attribute of the TextBox.

        textbox[0].name = this.id.replace("lbl", "txt");

        //Assign the value of Label to TextBox.


        textbox.val(label.html());

        if(label.attr('id')=="puesto"){

            //$("#InputPuesto").val(label.html());
            $("#InputPuesto").val("Capitan");

        }


        //When Label is clicked, hide Label and show TextBox.
        label.click(function () {

            $(this).attr("style", "visibility: hidden");
            $(this).next().attr("style", "visibility: visible");
        });

        //When focus is lost from TextBox, hide TextBox and show Label.
        textbox.focusout(function () {
            $(this).attr("style", "visibility: hidden");
            if ($(this).val()!="" && $(this).val()!=null ) {
              $(this).prev().html($(this).val());
  $(this).prev().attr("style", "visibility: visible");
            }

        });


    });
});
</script>
