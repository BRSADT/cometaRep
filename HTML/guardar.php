<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel='stylesheet' href='../img_area_select/css/imgareaselect-animated.css'>
<link rel='stylesheet' href='../img_area_select/css/imgareaselect-default.css'>

     <script src="../img_area_select/img_area_select/js/jquery.imgareaselect.js"></script>
</head>
<body>


  <label for="avatar">Profile picture:</label>
        <input type="file"
               id="avatar" name="avatar"
               accept="image/png, image/jpeg" />
    </div>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" style="overflow-y: hidden;">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content col-lg-9  offset-lg-3 col-md-9  offset-md-3 col-sm-8  offset-sm-4">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Acomode su foto de perfil</h4>
        </div>
        <div class="modal-body">
          <!-- aqui debe estar  el canvas -->
        <!--    <figure id="zona_de_miniatura" style="width: 160px; height: 90px; overflow: hidden;">

	</figure>-->
  <figure>
  <img src="" id="imagen" alt="" style="width: 100%;height: 100%;">
  <input type="button" id="boton_de_recorte" value="recortar">
	<p>&nbsp;</p>
</figure>

<figure id="zona_de_miniatura" style="width: 160px; height: 90px; overflow: hidden;">
  <img src="" id="imagenMin" style="width: 100px; height: 100px;" />
</figure>
          <p>Some text in the modal.</p>
          <script type="text/javascript" language="javascript">
          var x1 = 0, y1 = 0, x2 = 0, y2 = 0, anchura = 0, altura = 0;

          $('#imagen').imgAreaSelect({
  			fadeSpeed: 300,
  			handles: true,
  			onSelectEnd: function(img, sel){
  				x1 = sel.x1;
  				y1 = sel.y1;
  				x2 = sel.x2;
  				y2 = sel.y2;
  				anchura = sel.width;
  				altura = sel.height;
  			}
  		});
      $('#boton_de_recorte').on('click', function(){
          $("#imagenMin").attr('src',dataURL).show();
        if (anchura == 0 || altura == 0) return;
        var parametros = {
                 "x1" : x1,
                 "y1" : y1,
                 "x2" : x2,
                 "y2" : y2,
                 "anchura" :anchura,
                 "altura" : altura,
                 "url":
         };
         $.ajax({
               data:  parametros, //datos que se envian a traves de ajax
               url:   '../PHP/crearRecorte.php', //archivo que recibe la peticion
               type:  'post', //método de envio
               beforeSend: function () {
                       $("#resultado").html("Procesando, espere por favor...");
               },
               success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                       $("#resultado").html(response);
               }
       });

  		});


    	</script>





        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>

<script>
//aqui
var dataURL;
  var preview = document.querySelector('img');
$(document).ready(function(){
  $("#avatar").on('change', function() {
    $('html, body').css({
    overflow: 'hidden !important',
    });

          $("#myModal").modal();
          var reader = new FileReader();
           reader.onload = function(){
               $("#imagen").attr('src', reader.result).show();

  val = $("#imagen").attr('src', reader.result);
           };
 reader.readAsDataURL($("#avatar").get(0).files[0]);


 reader.onloadend = function (e) {
 dataURL=   preview.src = reader.result;

 }

    });



});
</script>

</body>
</html>
