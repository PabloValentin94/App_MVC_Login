<?php

namespace App\Model;

use App\DAO\CadastroDAO;

class CadastroModel extends Model
{

    public $necessidade = "CADASTRO";

    public function Registrar($senha, $usuario = null, $email = null)
    {

        include "DAO/CadastroDAO.php";

        $dao = new CadastroDAO();

        $dao->Insert($senha, $usuario, $email);

        header("Location: /");

    }

}

?>