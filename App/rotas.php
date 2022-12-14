<?php

// Namespaces:

use App\Controller\LoginController;
use App\Controller\CadastroController;
use App\Controller\AlteracaoController;
use App\Controller\DelecaoController;

// Classes Superglobais:

include "Controller/Controller.php";
include "Model/Model.php";
include "DAO/DAO.php";

// Includes:

include "Controller/LoginController.php";
include "Controller/CadastroController.php";
include "Controller/AlteracaoController.php";
include "Controller/DelecaoController.php";

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch($url)
{

    case "/":
        if(!isset($_SESSION["id_login"]))
            include "View/Modules/InitialPage/InitialPage.php";
        else
            header("Location: /logado");
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


    
    case "/alteracao":
        AlteracaoController::Alteracao();
    break;

    case "/alteracao/mudando":
        AlteracaoController::Modificar();
    break;

    case "/alteracao/error":
        AlteracaoController::Erro();
    break;



    case "/delecao/removendo":
        DelecaoController::Apagar();
    break;

    case "/delecao/error":
        DelecaoController::Erro();
    break;



    case "/logado":
        LoginController::Logado();
    break;



    case "/logout":
        LoginController::Logout();
    break;



    default:
        echo "Error 404";

}

?>