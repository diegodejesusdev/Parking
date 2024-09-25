<?php
    require 'vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    require_once 'controllers/UsuarioController.php';
    $controller = isset($_GET['controller']) ? $_GET['controller'] : null;
    $action = isset($_GET['action']) ? $_GET['action'] : null;

    if ($controller == 'usuario'){
        $usuarioController = new UsuarioController();
        if($action == 'obtenerTodos') {
            $usuarioController->obtenerTodos();
        }else{
            echo 'Acción no encontrada';
        }
    }else{
        echo 'Controlador no encontrado';
    }