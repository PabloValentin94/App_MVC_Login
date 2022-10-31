<?php

namespace App\DAO;

use \PDO;

class LoginDAO extends DAO
{

    public function __construct()
    {
        
        parent::__construct();

    }

    public function Logar($usuario, $senha)
    {

        $sql = "SELECT * FROM usuario WHERE nome_usuario = ? AND senha = MD5(?)";

        $stmt = parent::$conexao->prepare($sql);

        $stmt->bindValue(1, $usuario);

        $stmt->bindValue(2, $senha);

        $stmt->execute();

        $stmt->fetchAll(PDO::FETCH_CLASS);

    }

}

?>