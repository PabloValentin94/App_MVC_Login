<?php

namespace App\Controller;

abstract class Controller
{

    protected static function render($view, $model = null)
    {

        $arquivo = VIEWS . $view . ".php";

        if(file_exists($arquivo))
        {

            include $arquivo;

        }
        
        else
        {

            exit("View inexistente! Arquivo solicitado: " . $view . ".php");

        }

    }

}

?>