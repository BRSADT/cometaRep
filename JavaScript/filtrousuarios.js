$(document).ready(function () {

	$('.star').on('click', function () {
      $(this).toggleClass('star-checked');
    });

    $('.ckbox label').on('click', function () {
      $(this).parents('tr').toggleClass('selected');
    });

    $('.btn-filter').on('click', function () {
      var $target = $(this).data('target');
      if ($target != 'all') {
        $('.table tr').css('display', 'none');
        $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
      } else {
        $('.table tr').css('display', 'none').fadeIn('slow');
      }
    });


		function Filtrar() {
alert("hola")
	      // Declare variables
	      var input, filter, ul, li, h4, i,p;
	      input = document.getElementById('CodigoIngresado');
	      filter = input.value.toUpperCase();
	      var tabla = document.getElementById("tabla");
	      var tr = tabla.getElementsByTagName('tr');
				alert(tr.length);
	      // Loop through all list items, and hide those who don't match the search query
	      for (i = 0; i < tr.length; i++) {
					p=tr[i].getElementsByClassName("summary");

	          h4 =p[0].getElementsByTagName("h4");

	          if (h4[0].innerHTML.toUpperCase().indexOf(filter) > -1) {
	              p[0].style.display = "";
	          } else {
	              p[0].style.display = "none";
	          }
	      }
	  }

		function FiltrarNombre() {
	      // Declare variables
	      var input, filter, ul, li, h4, i;
	      input = document.getElementById('NombreIngresado');
	      filter = input.value.toUpperCase();
	      var tabla = document.getElementById("tabla");
	      var tr = tabla.getElementsByTagName('tr');
		      // Loop through all list items, and hide those who don't match the search query
	      for (i = 0; i < tr.length; i++) {
	          h4 = tr[i].getElementsByClassName("title")[0];
	          if (h4.first().innerHTML.toUpperCase().indexOf(filter) > -1) {
	              span[i].style.display = "";
	          } else {
	              span[i].style.display = "none";
	          }
	      }
	  }

 });
