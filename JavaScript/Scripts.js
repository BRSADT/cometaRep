window.onload = function() {
     var pos = 0;
    //our box element

    var t = setInterval(siguiente, 5000);
    }

 var images = [
    '../Imagenes/astronauta.png',
    '../Imagenes/astronauta2.png',
    '../Imagenes/cometa.png',
      '../Imagenes/cometa2.png',
      '../Imagenes/nave.png'
];
var sentidoVuelta=0;
var num = 0;
 var rot =180;
 var voltear;
function siguiente() {
    var slider = document.getElementById('logo-imagenes');
    num++;

    if(num >= images.length) {
        num = 0;
    }
    slider.src = images[num];

}

function SobreImagen(){
  var imagen=  document.getElementById('logo-imagenes');

 voltear = setInterval(darvueltas,100);

}

function AfueraImagen() {
  var imagen=  document.getElementById('logo-imagenes');
    sentidoVuelta=360-sentidoVuelta;
    imagen.style.transform = "rotate3d(0,0,0,0)";
   clearInterval(voltear);
}

function darvueltas(){
    sentidoVuelta+=45;
      var imagen=  document.getElementById('logo-imagenes');
  imagen.style.transform =  "rotate("+sentidoVuelta+"deg)";

}
