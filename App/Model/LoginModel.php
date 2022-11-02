<?php

namespace App\Model;

use App\DAO\LoginDAO;

include "Model/Model.php";

class LoginModel extends Model
{

    //public $rows;

    public function GetByNameAndPassword($usuario, $senha)
    {

        include "DAO/LoginDAO.php";

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

            //echo "Usuário não encontrado!";

            print("javascript:alert('teste')");

            exit();

            header("Location: /login/error");

            //echo "<script type='javascript'> Senha ou usuário incorretos! Tente novamente. </script>";

        }

    }

}

?>