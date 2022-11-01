<?php

namespace App\Model;

use App\DAO\LoginDAO;

class LoginModel extends Model
{

    //public $rows;

    public function GetByNameAndPassword($usuario, $senha)
    {

        include "DAO/LoginDAO.php";

        $dao = new LoginDAO();

        $dados_usuario = $dao->SelectByNameAndPassword($usuario, $senha);

        echo "Teste";

        // Se for true.
        if($dados_usuario)
        {

            header("Location: /logado");

        }

        else
        {

            echo "Usuário não encontrado!";

        }

    }

}

?>