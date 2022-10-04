<?php

namespace App\DAO;

use \PDO;

abstract class DAO
{

    protected $conexao;

    protected function __construct()
    {

        $dsn = "mysql:host=" . $_ENV["database"]["host"] . ";dbname=" . $_ENV["database"]["database_name"];

        $usuario = $_ENV["database"]["user"];

        $senha = $_ENV["database"]["password"];

        $this->conexao = new PDO($dsn, $usuario, $senha);
        
    }

}

?>