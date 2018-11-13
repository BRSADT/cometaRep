$(document).ready(function(){
  var contador=0;
  var valores=new Array();
  var data;
    $(".btnEliminar").click(function(){
            var seleccion=$('*[id^="checkbox"]');

          for (var i = 0; i < seleccion.length; i++) {
              if (seleccion.eq(i).is(':checked')) {
                              valores[contador]=seleccion.eq(i).attr("name");
                              contador++;
              }
            }
data = new FormData();

  data.append('codigos',valores);
  alert("hola");
            $.ajax({
           type: 'POST',
           url: '../PHP/EliminarUsuario.php',
           data: data,
         success: function(response) {

           },
           error: function(response) {

           },
           processData: false,
           contentType: false
         });


          });



});
