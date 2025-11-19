<?php

namespace config;

use PDO;

require_once 'Info.php';

class Database{
    private static $instance = null;
    private $connection;



    private function __construct()
    {
        $host = Info::DB_HOST;
        $dbname = Info::DB_NAME;
        $username = Info::DB_USER;
        $password = Info::DB_PASS;
        $charset = Info::DB_CHAR;

        try {
            $this -> connection = new PDO(
                "mysql:host=$host;dbname=$dbname;charset=$charset",
                $username,
                $password
            );
            $this -> connection-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(\PDOException $e){
            die($e->getMessage());
        }
    }

    public static function getInstance(){
        if (self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection(): PDO
    {
        return $this->connection;
    }

    private function __clone(){}

}