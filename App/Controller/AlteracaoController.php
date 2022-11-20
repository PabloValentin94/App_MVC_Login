<?php

namespace App\Controller;

use App\Model\AlteracaoModel;

class AlteracaoController extends Controller
{

    public static function Alteracao()
    {

        include "Model/AlteracaoModel.php";

        $model = new AlteracaoModel();

        parent::render("Cadastro_Alteracao/Cadastro_AlteracaoForm", $model);

    }

    public static function Modificar()
    {

        include "Model/AlteracaoModel.php";

        $model = new AlteracaoModel();

        $id = $_SESSION["id_login"];

        $usuario = $_POST["user_name"];

        $email = $_POST["email"];

        $senha = $_POST["password"];

        $model->Alterar($id, $usuario, $email, $senha);

    }

    public static function Erro()
    {

        include "Model/AlteracaoModel.php";

        $model = new AlteracaoModel();

        parent::render("Cadastro_Alteracao/Cadastro_AlteracaoError", $model);

    }

}

?>