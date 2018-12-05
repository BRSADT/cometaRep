$(document).ready(function(){
  var contador=0;
  var valores=new Array();
  var data;

    $(".btnEliminar").click(function(){

            var seleccion=$('*[id^="checkbox"]');
contador=0;
          for (var i = 0; i < seleccion.length; i++) {
              if (seleccion.eq(i).is(':checked')) {

                              valores[contador]=seleccion.eq(i).attr("name");
                              contador++;

              }
            }


var json_arr = JSON.stringify(valores);
data = new FormData();

  data.append('codigosE',json_arr);

            $.ajax({
           type: 'POST',
           url: '../PHP/EliminarUsuario.php',
           data: data,
           success: function(data) { 
               window.location.href = '../HTML/TablaUsuarios.php'
           },
           error: function(response) {

           },
           processData: false,
           contentType: false
         });

          });



});
