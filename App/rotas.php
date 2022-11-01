<?php

// Namespaces:

use App\Controller\LoginController;

// Includes:

include "Controller/LoginController.php";

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch($url)
{

    case "/cadastro":
        LoginController::Cadastro();
    break;

    case "/login":
        LoginController::Login();
    break;

    case "/autentificacao":
        LoginController::Autentificar();
        echo "Teste";
    break;

    case "/logado":
        LoginController::Logado();
    break;

}

?>