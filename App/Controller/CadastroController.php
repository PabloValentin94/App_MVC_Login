<?php

namespace App\Controller;

//use

include "Controller/Controller.php";

class CadastroController extends Controller
{

    public static function Cadastro()
    {

        parent::render("Cadastro/CadastroForm");

    }

}

?>