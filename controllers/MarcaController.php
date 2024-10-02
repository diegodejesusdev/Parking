<?php

require_once 'models/Marca.php';

class MarcaController
{
    public function obtenerTodos(){
        $marca = new Marca();
        $data = $marca->obtenerTodos();
        require_once 'views/marcas/obtenerTodos.php';
    }
}