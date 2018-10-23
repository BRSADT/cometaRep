
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
}
