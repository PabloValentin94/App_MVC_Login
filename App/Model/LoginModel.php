<?php

namespace App\Model;

use App\DAO\LoginDAO;

include "Model/Model.php";

include "DAO/LoginDAO.php";

class LoginModel extends Model
{

    //public $rows;

    public function GetByNameAndPassword($usuario, $senha)
    {

        $dao = new LoginDAO();

        $this->rows = $dao->SelectByNameAndPassword($usuario, $senha);

        // Se for true.
        if($this->rows)
        {

            /*var_dump($this->rows);

            exit();*/

            header("Location: /logado");

        }

        else
        {

            //var_dump($this->rows);

            echo "Usuário não encontrado!";

        }

    }

}

?>