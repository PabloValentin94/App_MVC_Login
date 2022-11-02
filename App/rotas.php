<?php

// Namespaces:

use App\Controller\LoginController;

// Includes:

include "Controller/LoginController.php";

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch($url)
{

    case "/":
        echo "Tela Inicial";
    break;

    case "/cadastro":
        LoginController::Cadastro();
    break;

    case "/login":
        LoginController::Login();
    break;

    case "/login/autentificacao":
        LoginController::Autentificar();
    break;

    case "/logado":
        LoginController::Logado();
    break;

    default:
        echo "Error 404";

}

?>