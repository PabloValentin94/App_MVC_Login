<?php

// Namespaces:

namespace App\Controller;

// Includes:

include "Controller/Controller.php";

class LoginController extends Controller
{

    public static function Login()
    {

        parent::render("Login/Form/LoginForm");

    }

    public static function Logado()
    {

        parent::render("MainPage/MainPage");

    }

}

?>