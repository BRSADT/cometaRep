$(document).ready(function(){
var contador=0;
  var valores=new Array();
  var data;

  $(".btnRevisado").click(function(){

    var seleccion=$('*[id^="checkbox"]');

  for (var i = 0; i < seleccion.length; i++) {
      if (seleccion.eq(i).is(':checked')) {

                      valores[contador]=seleccion.eq(i).attr("name");
  
                      contador++;

      }
    }

    var json_arr = JSON.stringify(valores);
    data = new FormData();

      data.append('codigosRep',json_arr);

                $.ajax({
               type: 'POST',
               url: '../PHP/eliminarReporte.php',
               data: data,
               success: function(data) {
                   window.location.href = '../HTML/Ingenieria.php'
               },
               error: function(response) {

               },
               processData: false,
               contentType: false
             });

              });



        });
