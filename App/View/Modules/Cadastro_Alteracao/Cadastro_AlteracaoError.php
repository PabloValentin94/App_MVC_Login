<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php if($model->necessidade == "CADASTRO"): ?>

            <title> Tela de Cadastro - Erro </title>

        <?php elseif($model->necessidade == "ALTERACAO"): ?>

            <title> Tela de Alteração de Dados - Erro </title>

        <?php endif ?>

        <!-- Especificar o caminho desde a pasta raíz, senão o arquivo não será reconhecido. -->

        <link rel="stylesheet" type="text/css" href="/View/Modules/Cadastro_Alteracao/css/Error.css"/>

        <link rel="shortcut icon" href="/View/Modules/Cadastro_Alteracao/img/error.png"/>

        <script>

            javascript:alert("Erro de cadastro! Tente novamente.");

        </script>

    </head>

    <body>

        <div class="container">

            <div id="image">

                <img src="/View/Modules/Cadastro_Alteracao/img/error.png" style="height: 100%;">

            </div>

            <div id="botao">

                <a href="/cadastro"> <button> Voltar </button> </a>

            </div>

        </div>
        
    </body>

</html>