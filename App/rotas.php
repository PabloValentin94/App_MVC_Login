<?php

// Namespaces:

use App\Controller\LoginController;
use App\Controller\CadastroController;

// Classes Superglobais:

include "Controller/Controller.php";
include "Model/Model.php";
include "DAO/DAO.php";

// Includes:

include "Controller/LoginController.php";
include "Controller/CadastroController.php";

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch($url)
{

    case "/":
        include "View/Modules/InitialPage/InitialPage.php";
    break;



    case "/cadastro":
        CadastroController::Cadastro();
    break;
    case "/cadastro/criando":
        CadastroController::Adicionar();
    break;
    case "/cadastro/error":
        CadastroController::Erro();
    break;



    case "/login":
        LoginController::Login();
    break;

    case "/login/autentificacao":
        LoginController::Autentificar();
    break;

    case "/login/error":
        LoginController::Erro();
    break;




    case "/logado":
        LoginController::Logado();
    break;




    default:
        echo "Error 404";

}

?>