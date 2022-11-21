<?php

spl_autoload_register(function($nome_classe_chamada)
{

    $arquivo = BASEDIR . $nome_classe_chamada . ".php";

    if(file_exists($arquivo))
    {

        include $arquivo;

    }

    else
    {

        exit("Arquivo inexistente! Arquivo solicitado para include: " . $arquivo);

    }

})

?>