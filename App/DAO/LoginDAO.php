<?php

namespace App\DAO;

use \PDO;

class LoginDAO extends DAO
{

    public function __construct()
    {
        
        parent::__construct();

    }

    public function SelectByNameAndPassword($usuario, $senha)
    {

        $sql = "SELECT * FROM usuario WHERE nome_usuario = ? AND senha = MD5(?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $usuario);

        $stmt->bindValue(2, $senha);

        $stmt->execute();

        return $stmt->fetchall(PDO::FETCH_CLASS);

    }

    public function SelectByEmailAndPassword($usuario, $senha)
    {

        $sql = "SELECT * FROM usuario WHERE email = ? AND senha = MD5(?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $usuario);

        $stmt->bindValue(2, $senha);

        $stmt->execute();

        return $stmt->fetchall(PDO::FETCH_CLASS);

    }

}

?>