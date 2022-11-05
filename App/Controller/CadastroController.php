<?php

namespace App\Controller;

use App\Model\CadastroModel;

class CadastroController extends Controller
{

    public static function Cadastro()
    {

        parent::render("Cadastro/CadastroForm");

    }

    public static function Adicionar()
    {

        include "Model/CadastroModel.php";

        $model = new CadastroModel();

        $usuario = $_POST["user_name"];

        $email = $_POST["email"];

        $senha = $_POST["password"];

        $model->Registrar($senha, $usuario, $email);

    }

    public static function Erro()
    {

        parent::render("Cadastro/CadastroError");

    }

}

?>