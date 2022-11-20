<?php

namespace App\DAO;

class AlteracaoDAO extends DAO
{

    public function __construct()
    {

        parent::__construct();
        
    }

    public function Update($id, $usuario, $email, $senha)
    {

        $sql = "UPDATE usuario SET nome_usuario = ?, email = ?, senha = MD5(?) WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $usuario);

        $stmt->bindValue(2, $email);

        $stmt->bindValue(3, $senha);

        $stmt->bindValue(4, $id);

        return $stmt->execute();

    }

}

?>