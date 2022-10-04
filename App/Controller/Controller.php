<?php

abstract class Controller
{

    protected function render($view, $model = null)
    {

        $arquivo = "View/Modules" . $view . ".php";

        if(file_exists($arquivo))
        {

            include $arquivo;

        }
        
        else
        {

            exit("View inexistente! Arquivo solicitado: " . $arquivo);

        }

    }

}

?>