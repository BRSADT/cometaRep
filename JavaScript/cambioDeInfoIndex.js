var id;
function LogIn(){
  var agregar = document.querySelector("#contenidoEfecto");
  agregar.removeAttribute("class")


  var main=  document.getElementsByClassName("main");
  main[0].style.visibility = "hidden";
    main[0].style.display = "none";

  var Contact=  document.getElementsByClassName("Contact");
  Contact[0].style.visibility = "hidden";
    Contact[0].style.display = "none";
    var Vision=  document.getElementsByClassName("Vision");
    Vision[0].style.visibility = "hidden";
        Vision[0].style.display = "none";
        var Mision=  document.getElementsByClassName("Mision");
        Mision[0].style.visibility = "hidden";
        Mision[0].style.display = "none";
        var About=  document.getElementsByClassName("aboutus");
        About[0].style.visibility = "hidden";
      About[0].style.display = "none";


var login=  document.getElementsByClassName("login");
login[0].style.visibility="visible";
login[0].style.display="block"
}

function About(){
  var agregar = document.querySelector("#contenidoEfecto");
  agregar.removeAttribute("class")


  var main=  document.getElementsByClassName("main");
  main[0].style.visibility = "hidden";
    main[0].style.display = "none";
  var login=  document.getElementsByClassName("login");
  login[0].style.visibility="hidden";
    login[0].style.display="none";
  var Contact=  document.getElementsByClassName("Contact");
  Contact[0].style.visibility = "hidden";
    Contact[0].style.display = "none";
    var Vision=  document.getElementsByClassName("Vision");
    Vision[0].style.visibility = "hidden";
        Vision[0].style.display = "none";
        var Mision=  document.getElementsByClassName("Mision");
        Mision[0].style.visibility = "hidden";
        Mision[0].style.display = "none";

  clearInterval(id);


frame("aboutus")
}

function Mision(){
  var agregar = document.querySelector("#contenidoEfecto");
  agregar.removeAttribute("class")

  var main=  document.getElementsByClassName("main");
  main[0].style.visibility = "hidden";
    main[0].style.display = "none";
  var login=  document.getElementsByClassName("login");
  login[0].style.visibility="hidden";
    login[0].style.display="none";
  var Contact=  document.getElementsByClassName("Contact");
  Contact[0].style.visibility = "hidden";
    Contact[0].style.display = "none";
    var Vision=  document.getElementsByClassName("Vision");
    Vision[0].style.visibility = "hidden";
        Vision[0].style.display = "none";
        var About=  document.getElementsByClassName("aboutus");
        About[0].style.visibility = "hidden";
      About[0].style.display = "none";

  clearInterval(id);
    var About=  document.getElementsByClassName("aboutus");

frame("Mision");
}

function Contact(){
  var agregar = document.querySelector("#contenidoEfecto");
  agregar.removeAttribute("class")

  var main =  document.getElementsByClassName("main");
  main[0].style.visibility = "hidden";
    main[0].style.display = "none";
  var login=  document.getElementsByClassName("login");
  login[0].style.visibility="hidden";
    login[0].style.display="none";
  var Mision=  document.getElementsByClassName("Mision");
  Mision[0].style.visibility = "hidden";
  Mision[0].style.display = "none";
  var Vision=  document.getElementsByClassName("Vision");
  Vision[0].style.visibility = "hidden";
    Vision[0].style.display = "none";
  var About=  document.getElementsByClassName("aboutus");
  About[0].style.visibility = "hidden";
About[0].style.display = "none";
  clearInterval(id);


frame("Contact");
}








function Vision(){
  var agregar = document.querySelector("#contenidoEfecto");
  agregar.removeAttribute("class")


  var main=  document.getElementsByClassName("main");
  main[0].style.visibility = "hidden";
    main[0].style.display = "none";
  var login=  document.getElementsByClassName("login");
  login[0].style.visibility="hidden";
    login[0].style.display="none";
  var Mision=  document.getElementsByClassName("Mision");
  Mision[0].style.visibility = "hidden";
  Mision[0].style.display = "none";
  var Contact=  document.getElementsByClassName("Contact");
  Contact[0].style.visibility = "hidden";
    Contact[0].style.display = "none";
  clearInterval(id);
  var About=  document.getElementsByClassName("aboutus");
  About[0].style.visibility = "hidden";
About[0].style.display = "none";
frame("Vision");
}




var caja=document.getElementById("aboutus");

function frame(seccion){
  var agregar = document.querySelector("#contenidoEfecto");
    agregar.setAttribute("class","mover");
  var About=  document.getElementsByClassName(seccion);
  About[0].style.visibility = "visible";
  About[0].style.display = "block";



 caja=document.getElementById("Cajacontenido");
caja.style.position="absolute";
caja.style.cssText = 'overflow:hidden !important'
caja.style.width= "18em";
caja.style.bottom= "0";
/*caja.style.height= "50em";*/
caja.style.marginLeft="-9em";
caja.style.left="50%";
caja.style.transformOrigin = "50% 100%";
caja.style.transform= " perspective(300px) rotateX(25deg)";

var contenido=document.getElementById("contenidoEfecto");

/*contenido.style.top="100%";*/

    var a = 100;
    id = setInterval(frame, 200);
  function frame() {


      if (a == 0) {
        clearInterval(id);
        var agregar = document.querySelector("#contenidoEfecto");
        agregar.removeAttribute("class")
          /*About[0].style.paddingLeft = "0%";
        About[0].style.marginRight="0%";
        */
        caja.style.cssText = 'overflow:scroll !important'
    //    caja.style.position="relative";

        caja.style.width= "";
        caja.style.bottom= "";
        caja.style.height= "";
        caja.style.marginLeft="";
        caja.style.left="";
        caja.style.transformOrigin = "";
        caja.style.transform= "";


      } else {
        a--;
      }
    }



}


      function detener(){
        clearInterval(id);
        var agregar = document.querySelector("#contenidoEfecto");
        agregar.removeAttribute("class")
        caja.style.cssText = 'overflow:scroll !important'

  
        caja.style.overflow="visible";
        caja.style.width= "";
        caja.style.bottom= "";
        caja.style.height= "";
        caja.style.marginLeft="";
        caja.style.left="";
        caja.style.transformOrigin = "";
        caja.style.transform= "";
          }


function Laser(){
  if(window.innerWidth>575){

  var audio = new Audio('../Sonidos/laser1.mp3');
  audio.currentTime=1.2;
  audio.play();
}

}
