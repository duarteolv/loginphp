<?php
   require 'configdb.php';

   
    class conexao{
        private static $conn;

        private function __construct(){}

        public static function getConnection(){
            $config = DB_DRIVER.':'.'Server='.DB_HOST.';'.'Database='.DB_NAME;

            try{
                if(!isset($conn)){
                    $conn = new PDO($config, DB_USER, DB_PASS);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }
                return $conn;
            } catch (PDOException $e){
                $mensagem = "Drivers disponiveis: " . implode(",", PDO::getAvailableDrivers());
                $mensagem .= "\nErro: " . $e->getMessage();
                throw new Exception($mensagem);
            }
        }
    }
?>