<?php

namespace App\DAO;

use \PDO;

class DelecaoDAO extends DAO
{

    public function __construct()
    {
        
        parent::__construct();

    }

    public function Delete($id)
    {

        $sql = "DELETE FROM usuario WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $id);

        return $stmt->execute();

    }

}

?>