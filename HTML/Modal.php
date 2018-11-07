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

</head>
<body>


  <label for="avatar">Profile picture:</label>
        <input type="file"
               id="avatar" name="avatar"
               accept="image/png, image/jpeg" />
    </div>

  <!--  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  	<script src="../img_area_select/js/jquery.imgareaselect.js"></script> -->
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Acomode su foto de perfil</h4>
        </div>
        <div class="modal-body">
          <!-- aqui debe estar  el canvas -->
        <!--    <figure id="zona_de_miniatura" style="width: 160px; height: 90px; overflow: hidden;">

	</figure>-->
          <p>Some text in the modal.</p>
      <!--      <script type="text/javascript" language="javascript">
        /*		$('#avatar').imgAreaSelect({
        			fadeSpeed: 300,
        			aspectRatio: '16:9',
        			outerColor: '#F00',
        			handles: true,
        			onSelectChange: function(img, sel){

        				if (!sel.width || !sel.height) return;

        				var proporcionX = parseInt($('#zona_de_miniatura').css('width')) / sel.width;
        				var proporcionY = parseInt($('#zona_de_miniatura').css('height')) / sel.height;

        				$('#zona_de_miniatura img').css({
        					width: Math.round(proporcionX * $('#mi_imagen').prop('width')),
        					height: Math.round(proporcionY * $('#mi_imagen').prop('height')),
        					marginLeft: -Math.round(proporcionX * sel.x1),
        					marginTop: -Math.round(proporcionY * sel.y1)
        				});


        				$('#x1').prop('value', sel.x1);
        				$('#y1').prop('value', sel.y1);
        				$('#x2').prop('value', sel.x2);
        				$('#y2').prop('value', sel.y2);
        				$('#ancho').prop('value', sel.width);
        				$('#alto').prop('value', sel.height);
        			}
        		});*/
        	</script>

-->



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
$(document).ready(function(){
    $("#avatar").change(function(){
          $("#myModal").modal();
/*var link=$(#avatar).text();
      alert(link);
*/

    });
});
</script>

</body>
</html>
