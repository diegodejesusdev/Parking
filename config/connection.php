<?php
    header('Content-Type: text/html; charset=utf-8');
    date_default_timezone_set('America/Bogota');

    class Connection {
        static public function connect()
        {
            try {
                $db = [
                    "server" => $_ENV['DB_HOST'],
                    "user" => $_ENV['DB_USER'],
                    "password" => $_ENV['DB_PASSWORD'],
                    "database" => $_ENV['DB_NAME']
                ];
                $conn = new mysqli($db['server'], $db['user'], $db['password'], $db['database']);
            } catch (Exception $e) {
                $_SESSION['er_user'] = $e;
                header('Location: ../views/error.php');
            }
            return $conn;
        }
    }
