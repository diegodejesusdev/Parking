<?php
    require_once './autoLoad.php';

    if (isset($_GET['controller'])) {
        echo "Controlador recibido: " . $_GET['controller'] . "<br>";
    }

    if (isset($_GET['action'])) {
        echo "Acción recibida: " . $_GET['action'] . "<br>";
    }

    if(isset($_GET['controller']) && class_exists($_GET['controller'])) {
        $controlador = new $_GET['controller'];
        if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
            $action = $_GET['action'];
            $controlador->$action();
        } else {
            echo "El método que buscas no existe";
        }
    }else{
        echo "La clase que buscas no existe";
    }