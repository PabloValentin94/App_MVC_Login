<?php

// Namespaces:

namespace App\Controller;

use App\Model\LoginModel;

// Includes:

include "Controller/Controller.php";

class LoginController extends Controller
{

    public static function Cadastro()
    {

        parent::render("Cadastro/CadastroForm");

    }

    public static function Login()
    {

        parent::render("Login/LoginForm");

    }

    public static function Autentificar()
    {

        include "Model/LoginModel.php";

        $model = new LoginModel();

        $usuario = $_POST["user_name"];

        $senha = $_POST["password"];

        $model->GetByNameAndPassword($usuario, $senha);

    }

    public static function Logado()
    {

        parent::render("MainPage/MainPage");
    
    }

}

?>