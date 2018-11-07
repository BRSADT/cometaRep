

$(window).on('load', function(){
  var x =$("main");
$.each( x, function( index,x ) {
if($("main").eq(index).attr("class")=="main"){
$("main").eq(index).css("display", "block");
}
else{
$("main").eq(index).css("display", "none");
}
});
});

function registroUsuario(){
  var x =$("main");
$.each( x, function( index,x ) {
if($("main").eq(index).attr("class")=="RegistroUsuario"){
$("main").eq(index).css("display", "block");
}
else{
$("main").eq(index).css("display", "none");
}
});
}

function registroNave(){
  var x =$("main");
$.each( x, function( index,x ) {
if($("main").eq(index).attr("class")=="RegistroNave"){
$("main").eq(index).css("display", "block");
}
else{
$("main").eq(index).css("display", "none");
}
});
}

function InfoUsuarios(){
  var x =$("main");
$.each( x, function( index,x ) {
if($("main").eq(index).attr("class")=="InfoUsuarios"){
$("main").eq(index).css("display", "block");
}
else{
$("main").eq(index).css("display", "none");
}
});
}


function InfoNaves(){
  var x =$("main");
$.each( x, function( index,x ) {
if($("main").eq(index).attr("class")=="InfoNaves"){
$("main").eq(index).css("display", "block");
}
else{
$("main").eq(index).css("display", "none");
}
});
}
