$(document).ready(function () {
var data;

	$('*[class^="ModificarUsuario"]').on('click', function (){

	 var codigo=$(this).attr("class");
	 codigo=codigo.split("ModificarUsuario") ;
	 var d=codigo[1];


	 data = new FormData();
	 data.append('codigo',d);

            $.ajax({
           type: 'POST',
           url: '../PHP/GuardarUsuarioAModificar.php',
           data: data,
           success: function(data) {
				   window.location="../HTML/Modificar.php";
           },
           error: function(response) {

           },
           processData: false,
           contentType: false
         });

          });




});
