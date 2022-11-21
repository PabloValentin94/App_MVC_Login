<?php

// Namespaces:

namespace App\Controller;

use App\Model\LoginModel;

class LoginController extends Controller
{

    public static function Login()
    {

        parent::render("Login/LoginForm");

    }

    public static function Autentificar()
    {

        $model = new LoginModel();

        $usuario = $_POST["user_name"];

        $senha = $_POST["password"];

        $model->GetByNameOrEmailAndPassword($usuario, $senha);

    }

    public static function Erro()
    {

        parent::render("Login/LoginError");

    }

    public static function Logado()
    {

        $model = new LoginModel();

        parent::render("MainPage/MainPage", $model);
    
    }

    public static function Logout()
    {

        session_destroy();

        header("Location: /");

    }

}

?>