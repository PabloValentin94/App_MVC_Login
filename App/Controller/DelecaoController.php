<?php

namespace App\Controller;

use App\Model\DelecaoModel;

class DelecaoController extends Controller
{

    public static function Apagar()
    {

        $model = new DelecaoModel();

        $id = $_SESSION["id_login"];

        $model->Excluir($id);

    }

    public static function Erro()
    {

        $model = new DelecaoModel();

        parent::render("Delecao/DelecaoError", $model);

    }

}

?>