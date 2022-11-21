<?php

namespace App\Controller;

use App\Model\CadastroModel;

class CadastroController extends Controller
{

    public static function Cadastro()
    {

        $model = new CadastroModel();

        parent::render("Cadastro_Alteracao/Cadastro_AlteracaoForm", $model);

    }

    public static function Adicionar()
    {

        $model = new CadastroModel();

        $usuario = $_POST["user_name"];

        $email = $_POST["email"];

        $senha = $_POST["password"];

        $model->Registrar($senha, $usuario, $email);

    }

    public static function Erro()
    {

        $model = new CadastroModel();

        parent::render("Cadastro_Alteracao/Cadastro_AlteracaoError", $model);

    }

}

?>