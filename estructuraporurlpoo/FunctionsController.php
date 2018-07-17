<?php
//FUNCIONES PARA EL CONTROLADOR FRONTAL

function loadController($pageController){
    $controller = ucwords($pageController).'Controller';
    $strFileController = 'controller/'.$controller.'.php';

    if(!is_file($strFileController)){
        $strFileController = 'controller/'.ucwords(CONTROLLER_DEFAULT).'Controller.php';
    }

    require_once $strFileController;

    $controllerObj = new $controller();
    return $controllerObj;
}

function loadAction($controllerObj,$action){
    $accion = $action;
    $controllerObj->$accion();
}

function throwAction($controllerObj){
    if(isset($_GET["action"]) && method_exists($controllerObj, $_GET["action"])){
        loadAction($controllerObj, $_GET["action"]);
    }else{
        loadAction($controllerObj, ACTION_DEFAULT);
    }
}

?>
