<?php

namespace App\Controller;

use App\Model\AlteracaoModel;

class AlteracaoController extends Controller
{

    public static function Alteracao()
    {

        // isset: verifica se uma variável existe.

        // Abaixo estamos verificando se a sessão existe. Se ela existir permitimos o acesso, senão permanescemos na tela atual.

        if(isset($_SESSION["id_login"]))
        {

            $model = new AlteracaoModel();

            parent::render("Cadastro_Alteracao/Cadastro_AlteracaoForm", $model);

        }

        else
        {

            header("Location: /");

        }

    }

    public static function Modificar()
    {

        $model = new AlteracaoModel();

        $id = $_SESSION["id_login"];

        $usuario = $_POST["user_name"];

        $email = $_POST["email"];

        $senha = $_POST["password"];

        $model->Alterar($id, $usuario, $email, $senha);

    }

    public static function Erro()
    {

        $model = new AlteracaoModel();

        parent::render("Cadastro_Alteracao/Cadastro_AlteracaoError", $model);

    }

}

?>