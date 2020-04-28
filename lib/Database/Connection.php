<?php

    abstract class Connection{

        private static $conn;

        public static function getConn(){
            if(self::$conn == null){
                self::$conn = new PDO('mysql: host=localhost; port=3308; dbname=serie_criando_site;', 'root', '');
            }
            
            return self::$conn;
        }
    }

?>