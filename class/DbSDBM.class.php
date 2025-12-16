<?php


    class DbSDBM {

        private static $connexion = null;

        private function __construct(){}

        private static function connect():PDO{

            if(file_exists("config.ini")){

                $config = parse_ini_file("config.ini", true);
                extract($config['database']);
                $dsn = "mysql:dbname=sdbm_v2;host=".$host.":" . $port;
            }
            try{
                $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
                $connexion = new PDO($dsn, $user, $pwd, $option);
                return $connexion;

            }catch(Exception $e){

                die($e->getMessage());

            }

        }

        public static function disconnect(): void{
            self::$connexion = null;
        }

        public static function getConnexion(): PDO{
            return self::connect();
        }


    }

?>