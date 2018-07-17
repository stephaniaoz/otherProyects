//Index.php

<?php
session_start();
//error_reporting(E_ALL);//Configuración general
//session_start();

echo "<link rel='shortcut icon' href='view/default/images_pagina/favicon.ico' />";
error_reporting(E_ALL);
ini_set("display_errors", "1");
require_once 'config/general.php';
require_once 'controller/BaseController.php';
require_once 'controller/FunctionsController.php';
$nombre_pagina = isset($_GET["pageController"])?$_GET["pageController"]:CONTROLLER_DEFAULT;
include_once("view/facade/head.php");

//Cargamos controladores y acciones

if(isset($_GET["pageController"]) && !empty($_SESSION["usuario"])){
	include_once 'controller/Helpers.php';
	$helpers = new Helpers();
	include_once("view/facade/header.php");
	include_once("view/facade/footer.php");

  $controlObj = loadController($_GET["pageController"]);
  throwAction($controlObj);
}else{
    $controllerObj = loadController(CONTROLLER_DEFAULT);
    throwAction($controllerObj);
}

?>
