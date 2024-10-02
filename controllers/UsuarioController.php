<?php

require_once 'models/Usuario.php';
    class  UsuarioController{
        public function obtenerTodos(){
            try {
                $usuario = new Usuario();
                $usuarios = $usuario->obtenerTodos();
                require_once 'views/usuarios/obtenerTodos.php';
            } catch (Exception $e) {
                echo 'Error al obtener los usuarios' . $e->getMessage();
            }
        }

        public function crearUsuario()
        {
            try {
                require_once 'views/usuarios/crearUsuario.php';
            } catch (Exception $e) {
                echo 'Error al crear el usuario' . $e->getMessage();
            }
        }
    }