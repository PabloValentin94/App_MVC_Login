<?php

// Variável que será usada no Autoload.

// define("BASEDIR", dirname(__FILE__) . "/" . "../");

/* No caso, no dirname(), especificamos o número dois, mas retrocedemos apenas um diretório.

 * __FILE__ -> pega o caminho de um arquivo + seu nome + sua extensão. 

 * dirname(__FILE__) -> pega somente o caminho de um arquivo. O segundo parâmetro refere-se 
   a quantos dirétórios queremos retroceder/voltar. */

define("BASEDIR", dirname(__FILE__, 2) . "/");

// Variável que será usada no método parent da Controller (pega todo o caminho antes do arquivo especificado.).

define("VIEWS", dirname(__FILE__) . "/View/Modules/");

// Dados de acesso ao Banco de Dados (MySQL)

$_ENV["database"]["host"] = "localhost:3306";
$_ENV["database"]["database_name"] = "db_login";
$_ENV["database"]["user"] = "root";
$_ENV["database"]["password"] = "etecjau";

?>