<?php 
require_once "../vendor/autoload.php";

// Criando um objeto baseado na classe Route
// Nessa parte está sendo instânciado o objeto Route e assim que ele é instânciado
// O Construtor da aplicação primeiro inicializa as rotas, depois executa o metodo "run" que vai procurar na lista de rotas
// qual está sendo referênciada na URL
$route=new App\Route;