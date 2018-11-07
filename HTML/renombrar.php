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
          <button type="button" id="CerrarModal" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Acomode su foto de perfil</h4>
        </div>
        <div class="modal-body">
          <!-- aqui debe estar  el canvas -->
        <!--    <figure id="zona_de_miniatura" style="width: 160px; height: 90px; overflow: hidden;">

	</figure>-->
  <figure>
  <img src="" id="imagen" alt=""    style=" max-width: 300px;  max-height: 300px;">
  <input type="button" value="recortar">
	<p>&nbsp;</p>
</figure>
          <p>Some text in the modal.</p>
          <script type="text/javascript" language="javascript">
          var x1 = 0, y1 = 0, x2 = 0, y2 = 0, anchura = 0, altura = 0;

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
  		});


    	</script>





        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default"  id="boton_de_recorte" data-dismiss="modal">Guardar</button>
        </div>
      </div>

    </div>
  </div>

</div>

<script>
//aquivar files = [];
var data;
var dataURL;
  var preview = document.querySelector('img');
$(document).ready(function(){
/*  $('#myModal').modal({
    backdrop: 'static',   // This disable for click outside event
    keyboard: true,        // This for keyboard event
    display: none,
})
*/

$('#CerrarModal').on('click', function(){
    $(".imgareaselect-outer").css("display", "none");
//$('*[class^="imgareaselect"]').css("display", "none");
var hijo=$('*[class^="imgareaselect"]');
var padre=hijo.eq(0).parent();
padre.css("display", "none");
});



  $("#avatar").on('change', function() {
    $('html, body').css({
    overflow: 'hidden !important',
    });


    $(".imgareaselect-outer").css("display", "block");
//$('*[class^="imgareaselect"]').css("display", "none");
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



 reader.onloadend = function (e) {
 dataURL=   preview.src = reader.result;

 }

    });






});




</script>

</body>
</html>
