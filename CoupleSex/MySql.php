<?php
namespace CoupleSex;

class MySql {
    private static $pdo;

    public static function connect() {
        if (self::$pdo == null) {
            try {
                self::$pdo = new \PDO('mysql:host=localhost;dbname=app_couple_sex', 'root', '', 
                    array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
                );
                self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch(\Exception $e) {
                echo 'Erro ao conectar: ' . $e->getMessage();
                die();
            }
        }
        return self::$pdo; // Importante: retornar a conexão aqui
    }
}
?>