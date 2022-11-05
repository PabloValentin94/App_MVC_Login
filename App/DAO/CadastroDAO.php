<?php

namespace App\DAO;

class CadastroDAO extends DAO
{

    public function __construct()
    {

        parent::__construct();

    }

    public function Insert($senha, $usuario = null, $email = null)
    {

        $sql = "INSERT INTO usuario(nome_usuario, email, senha) VALUES(?, ?, MD5(?))";

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

        else
        {

            $stmt->bindValue(1, $usuario);

            $stmt->bindValue(2, $email);

            $stmt->bindValue(3, $senha);

        }

        $stmt->execute();

    }

}

?>