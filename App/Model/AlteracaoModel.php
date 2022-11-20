<?php

namespace App\Model;

use App\DAO\AlteracaoDAO;

class AlteracaoModel extends Model
{

    public $necessidade = "ALTERACAO";

    public function Alterar($id, $usuario, $email, $senha)
    {

        include "DAO/AlteracaoDAO.php";

        $dao = new AlteracaoDAO();

        $exito = $dao->Update($id, $usuario, $email, $senha);

        if($exito)
        {

            $_SESSION["usuario"] = $usuario;

            $_SESSION["email"] = $email;

            $_SESSION["senha"] = $senha;

            header("Location: /logado");

        }

        else
        {

            header("Location: /alterar/error");

        }

    }

}

?>