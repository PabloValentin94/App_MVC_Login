<?php

namespace App\Model;

use App\DAO\LoginDAO;

class LoginModel extends Model
{

    //public $rows;

    public function GetByNameOrEmailAndPassword($usuario, $senha)
    {

        $dao = new LoginDAO();

        $this->rows = $dao->SelectByNameAndPassword($usuario, $senha);

        // Se for true.
        if($this->rows)
        {

            /*var_dump($this->rows);

            exit();*/

            foreach($this->rows as $registro)
            {

                $_SESSION["id_login"] = $registro->id;

                $_SESSION["usuario"] = $registro->nome_usuario;

                $_SESSION["email"] = $registro->email;

                $_SESSION["senha"] = $registro->senha;

                break;

            }

            header("Location: /logado");

        }

        else
        {

            $this->rows = $dao->SelectByEmailAndPassword($usuario, $senha);

            // Se for true.
            if($this->rows)
            {

                foreach($this->rows as $registro)
                {

                    echo $registro;

                    exit();

                    $_SESSION["id_login"] = $registro->id;

                    $_SESSION["usuario"] = $registro->nome_usuario;

                    $_SESSION["email"] = $registro->email;

                    $_SESSION["senha"] = $registro->senha;

                    break;

                }

                header("Location: /logado");

            }

            else
            {

                header("Location: /login/error");

            }

        }

    }

}

?>