<?php

require_once 'config/Connection.php';

class Marca
{
    private $id;
    private $nombre;
    private $database;

    public function __construct()
    {
        $this->database = Connection::connect();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function obtenerTodos()
    {
        $data = $this->database->query("SELECT * FROM marcas");
        return $data -> fetch_all(MYSQLI_ASSOC);
    }
}