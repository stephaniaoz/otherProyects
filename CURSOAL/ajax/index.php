<!DOCTYPE html>
<html>
<head>
	<title></title>	
</head>
<body>
	
	
		<label>Digite el nombre de la ciudad:</label>
		<input type="text" name="nombre" id="nombreciudad">
		<button name="enviar" onclick="buscarCiudad()">Enviar</button>
	
		<div id="container"></div>

</body>
</html>

<script>
		
	function buscarCiudad(){

			xmlhttp = false;

			var nombreciudad = document.getElementById("nombreciudad").value;

			if (window.XMLHttpRequest) {
			    xmlhttp=new XMLHttpRequest();
			 } else {
			    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			 }
			  xmlhttp.onreadystatechange=function() {
			    if (this.readyState==4 && this.status==200) {

			    	alert(xmlhttp.responseText);
			    	
			      	//alert(xmlhttp.responseText);
			      	/*var response = JSON.parse(xmlhttp.responseText);
			      	alert(response.main.temp);

			      	document.getElementById("container").innerHTML = "<p>"+xmlhttp.responseText+"</p>";
			      	document.getElementById("container").innerHTML = "<p>containe</p>";*/

			    }
			  }

			  if(!xmlhttp){
			  	alert("Error");
			  	return;
			  }

			  alert(nombreciudad);
			  xmlhttp.open("GET","procesarajax.php?nombreciudad="+nombreciudad, true);
			  //xmlhttp.open("GET","http://api.openweathermap.org/data/2.5/weather?q="+nombreciudad+"&appid=7f232dbcb3874db04aa8d334ff0d9758", true);
			  xmlhttp.send(null);
		}

		function procesaDatos(xml){

			xmlhttp = false;

			var nombreciudad = document.getElementById("nombreciudad").value;

			if (window.XMLHttpRequest) {
			    xmlhttp=new XMLHttpRequest();
			 } else {
			    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			 }
			  xmlhttp.onreadystatechange=function() {
			    if (this.readyState==4 && this.status==200) {

			    	alert(xmlhttp.responseText);
			    	
			      	//alert(xmlhttp.responseText);
			      	/*var response = JSON.parse(xmlhttp.responseText);
			      	alert(response.main.temp);

			      	document.getElementById("container").innerHTML = "<p>"+xmlhttp.responseText+"</p>";
			      	document.getElementById("container").innerHTML = "<p>containe</p>";*/

			    }
			  }

			  if(!xmlhttp){
			  	alert("Error");
			  	return;
			  }

			  alert(nombreciudad);
			 
			  xmlhttp.open("GET","procesarajax.php?nombreciudad="+nombreciudad, true);
			  xmlhttp.send(null);			

		}

	</script>
