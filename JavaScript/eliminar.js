$(document).ready(function(){
  var contador=0;
  var valores=new Array();
  var data;

    $(".btnEliminar").click(function(){
      alert("hola");

            var seleccion=$('*[id^="checkbox"]');
contador=0;
          for (var i = 0; i < seleccion.length; i++) {
              if (seleccion.eq(i).is(':checked')) {

                              valores[contador]=seleccion.eq(i).attr("name");
                              contador++;

              }
            }

            for (var i = 0; i < valores.length; i++) {

  alert(valores[i]);


                }
var json_arr = JSON.stringify(valores);
data = new FormData();

  data.append('codigosE',json_arr);

            $.ajax({
           type: 'POST',
           url: '../PHP/EliminarUsuario.php',
           data: data,
         success: function(response) {
alert("se envio");
           },
           error: function(response) {

           },
           processData: false,
           contentType: false
         });

          });



});
