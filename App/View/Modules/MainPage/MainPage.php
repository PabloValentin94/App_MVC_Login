<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Página Principal </title>

    <!-- Especificar o caminho desde a pasta raíz, senão o arquivo não será reconhecido. -->

    <link rel="stylesheet" type="text/css" href="/View/Modules/MainPage/css/Styles.css"/>

    <link rel="shortcut icon" href="/View/Modules/MainPage/img/icon.png"/>

</head>

<body>

    <div class="container">

        <div class="conteudo">

            <div id="title">

                <h1 style="color: #FFFF00;"> ÁREA RESTRITA </h1>

            </div>

            <nav class="botoes">

                <a href="/alteracao"> <button id="btn_alterar"> ALTERAR INFORMAÇÕES </button> </a>

                <a href="/logout"> <button id="btn_sair"> SAIR </button> </a>
                
                <a href="/delecao/removendo"> <button id="btn_excluir"> EXCLUIR CONTA </button> </a>

            </nav>

        </div>

        <div id="image">

            <img src="/View/Modules/MainPage/img/restricted_area.png">

        </div>

    </div>
    
</body>

</html>