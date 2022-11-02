<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Tela de Login </title>

        <!-- Especificar o caminho desde a pasta raíz, senão o arquivo não será reconhecido. -->
        
        <link rel="stylesheet" type="text/css" href="/View/Modules/Login/css/Styles.css"/>

        <link rel="shortcut icon" href="/View/Modules/Login/img/icon.png"/>

    </head>

    <body>

        <div class="container">

            <div id="image">

                <!--  -->

            </div>

            <div class="form">

                <form method="post" action="/login/autentificacao" class="conteudo_form">

                    <h1 style="color: #FFFF00;"> LOGIN </h1>

                    <label for="username"> Usuário: </label>
                    <br/>
                    <input name="user_name" type="text"
                    placeholder="E-mail ou nome de usuário" required/>

                    <br/>

                    <label for="password"> Senha: </label>
                    <br/>
                    <input name="password" type="text"
                    placeholder="Senha" required/>

                    <br/>

                    <button type="submit"> ENTRAR </button>

                </form>

            </div>

        </div>
        
    </body>

</html>