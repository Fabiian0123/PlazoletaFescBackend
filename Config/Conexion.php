<?php
    
    class Conexion {

        private static $host = 'localhost';
        private static $db   = 'plazoleta';
        private static $user = 'root';
        private static $pass = '';
        private static $mysqli = null;

        public static function obtenerConexion() {

            if(self::$mysqli != null) {
                return self::$mysqli;
            }

            self::$mysqli = new mysqli(self::$host, self::$user, self::$pass, self::$db);

            if (self::$mysqli->connect_error) {
                die("Error de conexión a la base de datos: " . self::$mysqli->connect_error);
            }

            return self::$mysqli;
        } 
            
    }
?>