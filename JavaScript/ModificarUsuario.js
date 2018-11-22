$(document).ready(function () {

	$('*[class^="ModificarUsuario"]').on('click', function (){


var codigo=$(this).attr("class");
codigo=codigo.split("ModificarUsuario") ;
var d=codigo[1];
codigo=codigo
alert(codigo);// codigo del usuario
var data;
data = new FormData();
data.append('codigo',codigo);
window.location="../HTML/Modificar.php?opc=Window.Location"+"&d="+d;





});



});
