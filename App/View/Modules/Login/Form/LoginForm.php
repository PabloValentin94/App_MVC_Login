<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Tela de Login </title>

        <!-- Especificar o caminho desde a pasta raíz, senão o arquivo não será reconhecido. -->
        <link rel="stylesheet" type="text/css" href="View/Modules/Login/Form/css/Styles.css"/>

    </head>

    <body>

        <div class="container">

            <div id="image">

                <img src="/View/Modules/Login/Form/img/dev.jpeg" width="100%" height="100%"/>

            </div>

            <div class="form">

                <h1 style="color: #FFFF00;"> Login </h1>

                <div class="campos">

                    <form method="post" action="/autentificacao">

                        <label for="username"> Usuário: </label>
                        <br/>
                        <br/>
                        <input name="username"/>

                        <br/>
                        <br/>

                        <label for="password"> Senha: </label>
                        <br/>
                        <br/>
                        <input name="password"/>

                        <br/>
                        <br/>

                        <button type="submit"> Entrar </button>

                    </form>

                </div>

            </div>

        </div>
        
    </body>

</html>