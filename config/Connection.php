<?php
    header('Content-Type: text/html; charset=utf-8');
    date_default_timezone_set('America/Bogota');

    class Connection {
        static public function connect()
        {
            try {
                $db = [
                    "server" => "localhost",
                    "user" => "root",
                    "password" => "",
                    "database" => "parqueadero",
                    "port" => "3307"
                ];
                $conn = new mysqli($db['server'], $db['user'], $db['password'], $db['database'], $db['port']);
                if($conn->connect_error){
                    throw new Exception("Error de conexión: " . $conn->connect_error);
                }
            } catch (Exception $e) {
                error_log("Database connection error: " . $e->getMessage());
                $_SESSION['er_user'] = $e;
                header('Location: ../views/error.php');
                exit();
            }
            return $conn;
        }
    }
