var id;
function LogIn(){
var main=  document.getElementsByClassName("main");
main[0].style.visibility = "hidden";
var About=  document.getElementsByClassName("aboutus");
About[0].style.visibility = "hidden";


var login=  document.getElementsByClassName("login");
login[0].style.visibility="visible";
login[0].style.display="block"
}



function About(){

  var main=  document.getElementsByClassName("main");
  main[0].style.visibility = "hidden";
  var login=  document.getElementsByClassName("login");
  login[0].style.visibility="hidden";

  var About=  document.getElementsByClassName("aboutus");
  About[0].style.visibility = "visible";
  About[0].style.display = "block";
  About[0].style.paddingLeft = "20%";
  About[0].style.marginRight="20%";




    var a = 100;
    id = setInterval(frame, 50);

  function frame() {
      if (a == 0) {
        clearInterval(id);
        About[0].style.paddingLeft = "0%";
        About[0].style.marginRight="0%";
      } else {
        a--;

    About[0].style.transform =   'translateY(' + a +'%'+ ')';

          console.log(a);

      }
    }
}


      function detener(){
      clearInterval(id);
        var About=  document.getElementsByClassName("aboutus");
      About[0].style.transform =   'translateY(' + 0 +'%'+ ')';
      About[0].style.paddingLeft = "0%";
      About[0].style.marginRight="0%";
          }
