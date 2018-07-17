$(document).ready(function(){
  $("#vermas").on("click", function(e){
    /*$('#myModal').modal('show');*/
  });
});

function accionboton(go){
  if(go == 'buscar'){
    var controller = document.getElementById("controller").value+"";
    //confirm("hereeee: "+"index.php?pageController="+ controller +"&action="+ go);
    //include_once 'view/'.$controller.'/'.$view.'.php';
    document.formulario.action="index.php?pageController="+ controller +"&action="+ go;
    document.formulario.submit();
  }
}

function formEditar(id){
  var controller = document.getElementById("controller").value+"";
  var action = document.getElementById('action').value+"";
  //confirm("index.php?pageController="+ controller +"&action="+ action + "&id="+id);
  document.formulario.action="index.php?pageController="+ controller +"&action="+ action + "&id="+id;
  document.formulario.submit();
}

function verMas(id){
  confirm("hellooo");
}

function verMas1(id){
  alertMessage(id);
}

Shadowbox.init({
  language: "es",
  players: ['html']
  });

function alertMessage(id) {

  var controller = document.getElementById('controller').value;
  var action = document.getElementById('action').value;
  //confirm("index.php?pageController="+ controller +"&action="+ action+"&id="+id+"&header=false");
  Shadowbox.open({
    player: 'iframe',
    //index.php?pageController="+ controller +"&action="+ action
    content: "<div>hola</div>",
    //content: 'http://<?php echo $nom_dominio?>/view/tercero/index.php?id_tercero='+id_tercero,
    height: 1100, // Alto de la ventana modal
    width: 2500 // Ancho de la ventana modal
  });
}
