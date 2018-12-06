$(document).ready(function(){
  var contador=0;
  var valores=new Array();
  var data;
  var codigoIng;
  var codigoNave;
  var descripcion;
  var fecha;
    $(".btnSeleccionar").click(function(){
var value = $("[name='nameofobject']");
if ($("input[name='radioCodigo']").is(':checked') ) {
  codigoIng = $("input[name='radioCodigo']:checked").val();

$(".InfoUsuarios").css({"display":"none"});

$(".Info-Naves").css({"display":"block"});

}

          });

    $(".btnSig2").click(function(){
      if ($("input[name='radioNave']").is(':checked') ) {
        codigoNave = $("input[name='radioNave']:checked").val();


      $(".InfoUsuarios").css({"display":"none"});

      $(".Info-Naves").css({"display":"none"});
  $(".Reporte").css({"display":"block"});
      }


    });


    $(".btnContact").click(function(){

if( $("input[name='fechaIn']").val()=="" || $(".form-control-Descripcion").val()=="" ){
    alert("falta datos");
}
else {
descripcion=$(".form-control-Descripcion").val();
fecha=$("input[name='fechaIn']").val();


data = new FormData();
data.append('descripcion',descripcion);
data.append('fecha',fecha);
data.append('codigoIng',codigoIng);
data.append('codigoNave',codigoNave);


          $.ajax({
         type: 'POST',
         url: '../PHP/Reporte.php',
         data: data,
         success: function(data) {
alert("enviado");
        window.location.href = '../HTML/Comandante.php'
         },
         error: function(response) {

         },
         processData: false,
         contentType: false
       });


}

});


    });
