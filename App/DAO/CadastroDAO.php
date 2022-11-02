<?php

namespace App\DAO;

include "DAO/DAO.php";

class CadastroDAO extends DAO
{

    public function __construct()
    {

        parent::__construct();

    }

    public function Insert($usuario = null, $email = null, $senha)
    {

        $sql = "INSERT INTO usuario(nome_usuaeio, email, senha) VALUES(?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);

        if($usuario && !$email)
        {

            $stmt->bindValue(1, $usuario);

            $stmt->bindValue(2, NULL);

            $stmt->bindValue(3, $senha);

        }

        else if(!$usuario && $email)
        {

            $stmt->bindValue(1, NULL);

            $stmt->bindValue(2, $email);

            $stmt->bindValue(3, $senha);

        }

        $stmt->execute();

    }

}

?>