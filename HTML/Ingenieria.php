<!DOCTYPE html>
<html lang="en">
  <head>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="../CSS/ingenieria.css">
    <!-- Custom styles for this template <link href="dashboard.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>

  <body>

<?php  session_start();

if(!isset($_SESSION['nombre'])||$_SESSION['codigoPuesto']!=2)
{

     header("refresh:0;url=../PHP/Salir.php?");

//hola wtf
}
else{
?>
        <aside class="normal col-12 col-md-3 col-sm-4 col-lg-3  p-0 bg-dark fixed-top ">

<form method="post" action="../PHP/Salir.php">
  <input type="submit" value="Salir" class="button"/>
</form>
          <div class="contenedor-imagenes">
          	<div class="circulo-alrededor"></div>
          	<!-- Used for more of a gyroscope type effect
          	<div class="outer-circulo-alrededor"></div>
          	-->
          	<div class="circle">
          		<div class="frente">

                <div id="logo">
                <img  src="../imagenes/Fotografias/elInge.png" alt="Italian Trulli">


                </div>
          		</div>
              <div id="logo">
              <img  src="../imagenes/logoIngenieria.png" alt="Italian Trulli">

          	</div>
          </div>
          </div>


<div id="info">
<p>

<?php
echo " ".$_SESSION['nombre']." ".$_SESSION['apellido'] ;

 ?>

</p>
</div>
            <nav class="normal navbarflex-md-column flex-row align-items-start py-2">

            </nav>



        </aside>





<div class="col-lg-9  offset-lg-3 col-md-9  offset-md-3 col-sm-8  offset-sm-4">
<?php
        include '../php/Conexion.php';
        $con=new conexion();
        $conexion=$con->getConexion();
        if($conexion!=NULL){
        
        
        
        foreach($conexion->query('select * from nave') as $datos) {
        
                        $codigo=$datos["naveCodigo"];
                        $alias=$datos["naveAlias"];
                        $descripcion=$datos["naveDescripcion"];

                        echo "<div class='form-group'><h2>" . $alias . "</h2>";
                        echo $descripcion . "<br>";
                        
                        echo "<form action='../php/eliminarNave.php' method='post'>
                            <input type='hidden' name='naveCodigo' value='" . $codigo . "'>
                            <input type='submit' class='btn btn-primary btn-sm'  value='Eliminar'>
                          </form></div>";

                        
                }
              }
        ?>


</div>
<?php

}

?>
  </body>
</html>
