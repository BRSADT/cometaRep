
<!DOCTYPE html>
<html lang="en">
  <head>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Dashboard Template for Bootstrap</title>

  </head>

  <body>
<form class="opciones" action="operaciones.php" method="post">
  <select name="opcion">
  <option value="1">Fibonacci</option>
  <option value="2">Mayor de 3</option>
  <option value="3">Factorial</option>
  <option value="4">Multiplicacion Rusa</option>
  <option value="5">Figuras</option>

</select>
  <input type="submit" value="Submit">
</form>
<p>
<?php

if(isset($_GET['opc']))
{
  $opc=$_GET['opc'];
switch ($opc) {
  case 1:
echo "<h2>Fibonacci : </hr>";
      break;
      case 2:
      echo "<h2>Mayor de 3 : </hr>";
          break;
          case 3:
          echo "<h2>Factorial : </hr>";
              break;
              case 4:
              echo "<h2>Multiplicacion : </hr>";
                  break;
                  case 5:
                  echo "<h2>Figuras : </hr>";
                  
                      break;

    break;
}

$var=$_GET['res'];
echo $var;
}
?>
</p>
  </body>
</html>
