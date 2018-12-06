function validacionUsuario(){
var nombreUsuario= document.getElementById("NombreUsuario");
var apellidoUsuario= document.getElementById("ApellidoUsuario");
var usuario= document.getElementById("Usuario");
var contrasena= document.getElementById("Password");
var fechaNac= document.getElementById("FechaNac");
var estadoUsuario=document.getElementById("EstadoUsuario");

if(nombreUsuario.value=="" || apellidoUsuario.value=="" || usuario.value=="" ||fechaNac.value=="" || estadoUsuario.value==""){
alert ("debe llenar todos los campos");
  return false;
}
var expUsuario= new RegExp("^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$");
if(contrasena.match(expUsuario)){
alert("debe contener  minuscula, mayuscula y tener de 8 a 16 caracteres");
return false;
}
return true;
}
