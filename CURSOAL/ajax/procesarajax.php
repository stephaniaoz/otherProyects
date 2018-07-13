<?php

if($_REQUEST){
	$nombreciudad = isset($_REQUEST['nombreciudad'])?$_REQUEST['nombreciudad']:'';

	$ajax = new ProcesarAjax();
	$ajax->procesarCiudad($nombreciudad);
}

/**
* 
*/
class ProcesarAjax
{

	public function procesarCiudad($nomCiudad){
		$var = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".$nomCiudad."&appid=7f232dbcb3874db04aa8d334ff0d9758");

		echo $var;
	}
}

?>