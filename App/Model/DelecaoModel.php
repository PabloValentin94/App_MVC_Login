<?php

namespace App\Model;

use App\DAO\DelecaoDAO;

class DelecaoModel extends Model
{

    public function Excluir($id)
    {

        $dao = new DelecaoDAO();

        $exito = $dao->Delete($id);

        if($exito)
        {

            session_destroy();

            header("Location: /");

        }

        else
        {

            header("Location: /delecao/error");

        }

    }

}

?>