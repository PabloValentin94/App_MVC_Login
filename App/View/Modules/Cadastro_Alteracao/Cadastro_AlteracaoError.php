<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php if($model->necessidade == "CADASTRO"): ?>

            <title> Tela de Cadastro - Erro </title>

            <script>

                javascript:alert("Erro ao tentar cadastrar! Tente novamente.");

            </script>

        <?php elseif($model->necessidade == "ALTERACAO"): ?>

            <title> Tela de Alteração de Dados - Erro </title>

            <script>

                javascript:alert("Erro ao tentar alterar seus dados! Tente novamente.");

            </script>

        <?php endif ?>

        <!-- Especificar o caminho desde a pasta raíz, senão o arquivo não será reconhecido. -->

        <link rel="stylesheet" type="text/css" href="/View/Modules/Cadastro_Alteracao/css/Error.css"/>

        <link rel="shortcut icon" href="/View/Modules/Cadastro_Alteracao/img/error.png"/>

    </head>

    <body>

        <div class="container">

            <div id="image">

                <img src="/View/Modules/Cadastro_Alteracao/img/error.png" style="height: 100%;">

            </div>

            <div id="botao">

                <?php if($model->necessidade == "CADASTRO"): ?>

                    <a href="/cadastro"> <button> Voltar </button> </a>

                <?php elseif($model->necessidade == "ALTERACAO"): ?>

                    <a href="/alteracao"> <button> Voltar </button> </a>

                <?php endif ?>

            </div>

        </div>
        
    </body>

</html>