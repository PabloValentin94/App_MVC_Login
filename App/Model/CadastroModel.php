<?php

namespace App\Model;

use App\DAO\CadastroDAO;

include "Model/Model.php";

class CadastroModel extends Model
{

    public function Registrar($usuario = null, $email = null, $senha)
    {

        include "DAO/CadastroDAO.php";

        $dao = new CadastroDAO();

        if($usuario && !$email)
        {

            $dao->Insert($usuario, NULL, $senha);

        }

        else if($email && !$usuario)
        {

            $dao->Insert(NULL, $email, $senha);

        }

    }

}

?>