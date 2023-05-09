<?php
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

// Importacoes
require_once("requisitos.php");

//Rotas
$rotas = $_SERVER["REQUEST_URI"];
$rotas = str_replace("/sebastiao_alves/backoffice", "", $rotas);
$rotas = explode("/", $rotas);

switch ((isset($rotas[1])) ? $rotas[1] : "") {

    case "":
    require_once("_backoffice/models/signin_model.php");
    break;

    case "inicio":
    require_once("_backoffice/models/inicio_model.php");
    break;

    case "carousel":
        require_once("_backoffice/models/carousel_model.php");
        break;

    case "sair":
    require_once("models/sair_model.php");
    break;

// default:
// require_once("models/404_model.php");
// break;
}

?>
