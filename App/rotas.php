<?php

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch($url)
{

    case "/":
        echo "Página Inicial (Teste)";
    break;

}

?>