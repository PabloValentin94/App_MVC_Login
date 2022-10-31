<?php

namespace App\Model;

use App\DAO\LoginDAO;

class LoginModel extends Model
{

    public function Logar($usuario, $senha)
    {

        include "DAO/LoginDAO.php";

        $dao = new LoginDAO();

        parent::$rows = $dao->Logar($usuario, $senha);

        $usuarios_encontrados = $rows;

        if($usuarios_encontrados != null)
        {

            

        }

    }

}

?>