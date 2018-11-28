<?php

namespace App\DAO\MySQL\cepapi;

abstract class Conexao {
    /**  
    * @var \PDO
    */

    protected $pdo;

    public function __construct() {
        
        $host = getenv('CEPAPI_HOST');
        $dbname = getenv('CEPAPI_DBNAME');
        $port = getenv('CEPAPI_PORT');
        $user = getenv('CEPAPI_USER');
        $pass = getenv('CEPAPI_PASSWORD');
        $dsn = "mysql:host={$host};dbname={$dbname};port={$port}";
        $this->pdo = new \PDO($dsn, $user, $pass,array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        
    }
}