<?php

// Namespaces:

use App\Controller\LoginController;

// Includes:

include "Controller/LoginController.php";

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch($url)
{

    case "/":
        echo "Página Inicial (Teste)";
    break;

    case "/login":
        LoginController::Login();
    break;

    /*case "login/autenticar":
        LoginController::Autenticar();
    break;

    case "/logado":
        LoginController::Logado();
    break;*/

}

?>