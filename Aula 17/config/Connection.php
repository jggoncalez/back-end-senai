<?php
namespace config;

use PDO;
use PDOException;

require_once 'Info.php';

class Connection {
    private static $instance = null;

    public static function getInstance() {
        if (!self::$instance) {
            try {
                $host = Info::DB_HOST;
                $dbname = Info::DB_NAME;
                $user = Info::DB_USER;
                $pass = Info::DB_PASS;

                self::$instance = new PDO(
                    "mysql:host=$host;charset=utf8mb4",
                    $user,
                    $pass
                );
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                self::$instance->exec("CREATE DATABASE IF NOT EXISTS $dbname;");
                self::$instance->exec("USE $dbname");

                self::$instance->exec("CREATE TABLE IF NOT EXISTS LIVROS (
                    ID_LIVROS INT AUTO_INCREMENT PRIMARY KEY,
                    TITULO VARCHAR(200) UNIQUE,
                    AUTOR VARCHAR(150),
                    ANO_PUBLICACAO INT,
                    GENERO VARCHAR(100),
                    QTT_DISPONIVEL INT
                )");

            } catch (PDOException $e) {
                die("Erro ao conectar: " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}
?>