

//aquivar files = [];
var data;
var dataURL;
  var preview = document.querySelector('img');
$(document).ready(function(){
  var x1 = 0, y1 = 0, x2 = 0, y2 = 0, anchura = 0, altura = 0;

  $('.contenedor-imagenes').on('click', function(){

  });






  $('#CerrarModal').on('click', function(){
      $(".imgareaselect-outer").css("display", "none");
      var hijo=$('*[class^="imgareaselect"]');
      var padre=hijo.eq(0).parent();
      padre.css("display", "none");
    });



  $("#avatar").on('change', function() {

    $('html, body').css({
    overflow: 'hidden !important',
    });
    $(".imgareaselect-outer").css("display", "block");
    var hijo=$('*[class^="imgareaselect"]');
    var padre=hijo.eq(0).parent();
    padre.css("display", "block");


    $("#myModal").modal();

          var reader = new FileReader();
           reader.onload = function(){
          $("#imagen").attr('src', reader.result).show();
          val = $("#imagen").attr('src', reader.result);
           };
      reader.readAsDataURL($("#avatar").get(0).files[0]);
      data = new FormData();
      data.append('title', 'Imagen');
      data.append('file', $("#avatar").get(0).files[0]);
  });


    $('#boton_de_recorte').on('click', function(){

            if (anchura == 0 || altura == 0) return;
             $.ajax({
            type: 'POST',
            url: '../PHP/crearRecorte.php',
            data: data,
          success: function(response) {

            },
            error: function(response) {

            },
            processData: false,
            contentType: false
        });

        $(".imgareaselect-outer").css("display", "none");
        var hijo=$('*[class^="imgareaselect"]');
        var padre=hijo.eq(0).parent();
        padre.css("display", "none");

    });

    $('#imagen').imgAreaSelect({
      fadeSpeed: 300,
      handles: true,
      onSelectEnd: function(img, sel){
        data.append('anchoImagenPagina', $('#imagen').width());
        data.append('altoImagenPagina', $('#imagen').height());
        x1=sel.x1;
        y1=sel.y1;
        x2=sel.x2;
        y2=sel.y2;
        anchura=sel.width;
        altura=sel.height;
        data.append('x1', sel.x1);
        data.append('y1', sel.y1);
        data.append('x2', sel.x2);
        data.append('y2', sel.y2);
        data.append('anchura', sel.width);
        data.append('altura', sel.height);
        console.log("x1"+x1);
        console.log("y1"+y1);
        console.log("x2"+x2);
        console.log("y2"+y2);
        console.log(anchura);
        console.log(altura);
          }
  });



});
