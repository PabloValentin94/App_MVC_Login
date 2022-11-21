<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php if($model->necessidade == "CADASTRO"): ?>

            <title> Tela de Cadastro </title>

        <?php elseif($model->necessidade == "ALTERACAO"): ?>

            <title> Tela de Alteração de Dados </title>

        <?php endif ?>

        <!-- Especificar o caminho desde a pasta raíz, senão o arquivo não será reconhecido. -->
        
        <link rel="stylesheet" type="text/css" href="/View/Modules/Cadastro_Alteracao/css/Styles.css"/>

        <link rel="shortcut icon" href="/View/Modules/Cadastro_Alteracao/img/icon.png"/>

    </head>

    <body>

        <div class="container">

            <div id="image">

                

            </div>

            <div class="form">

                <?php if($model->necessidade == "ALTERACAO"): ?>

                    <form method="post" action="/alteracao/mudando" class="conteudo_form">

                        <h1 style="color: #FFFF00;"> ALTERAÇÃO </h1>

                        <label for="user_name"> Nome de usuário: </label>
                        <br/>
                        <input name="user_name" type="text" maxlength="75"
                        placeholder="Até 75 caracteres" value="<?= $_SESSION["usuario"] ?>"/>

                        <br/>

                        <label for="email"> E-Mail: </label>
                        <br/>
                        <input name="email" type="email" maxlength="75"
                        placeholder="Até 75 caracteres" value="<?= $_SESSION["email"] ?>"/>

                        <br/>

                        <label for="password"> Senha: </label>
                        <br/>
                        <input name="password" type="text" maxlength="20"
                        placeholder="Até 20 caracteres" required/>

                        <br/>

                        <button> TROCAR </button>

                    </form>

                <?php elseif($model->necessidade == "CADASTRO"): ?>

                    <form method="post" action="/cadastro/criando" class="conteudo_form">

                        <h1 style="color: #FFFF00;"> CADASTRO </h1>

                        <label for="user_name"> Nome de usuário: </label>
                        <br/>
                        <input name="user_name" type="text" maxlength="75"
                        placeholder="Até 75 caracteres"/>

                        <br/>

                        <label for="email"> E-Mail: </label>
                        <br/>
                        <input name="email" type="email" maxlength="75"
                        placeholder="Até 75 caracteres"/>

                        <br/>

                        <label for="password"> Senha: </label>
                        <br/>
                        <input name="password" type="text" maxlength="20"
                        placeholder="Até 20 caracteres" required/>

                        <br/>

                        <button> REGISTRAR </button>

                    </form>

                <?php endif ?>

            </div>

        </div>
        
    </body>

</html>