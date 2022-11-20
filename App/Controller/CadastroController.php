<?php

namespace App\Controller;

use App\Model\CadastroModel;

class CadastroController extends Controller
{

    public static function Cadastro()
    {

        include "Model/CadastroModel.php";

        $model = new CadastroModel();

        parent::render("Cadastro_Alteracao/Cadastro_AlteracaoForm", $model);

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

        include "Model/CadastroModel.php";

        $model = new CadastroModel();

        parent::render("Cadastro_Alteracao/Cadastro_AlteracaoError", $model);

    }

}

?>