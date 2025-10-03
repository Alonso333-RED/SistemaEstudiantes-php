<?php
define("BASE_URL","/app-estudiantes/index.php");
require_once("./src/controllers/EstudianteController.php");

if(isset($_GET["controller"]) && isset($_GET["action"])){
    $controller = $_GET["controller"];
    $action = $_GET["action"];

    $controlador = new $controller();
    if(method_exists($controlador,$action)){
        $controlador->$action();
    }else{
        echo "Method not found";
    }
    
}else{
    $controller = new EstudianteController();
    $controller->viewListaEstudiantes();
}