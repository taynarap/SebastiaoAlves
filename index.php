<?php

// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

//Importacoes
require_once("requisitos.php");

//Rotas
$rotas = $_SERVER["REQUEST_URI"];
$rotas = str_replace("/sebastiao_alves/", "", $rotas);
$rotas = explode("/", $rotas);

switch($rotas[0]){

    case "":
        require_once("models/home_model.php");
        break;

    case "autor":
        require_once("models/autor_model.php");
        break;

    case "livro":
        require_once("models/livro_model.php");
        break;

    case "imprensa":
        require_once("models/imprensa_model.php");
        break;

    case "contactos":
        require_once("models/contactos_model.php");
        break;

    case "backoffice":
        require_once("backoffice/models/signin_model.php");
        break;

    default:
        require_once("models/404_model.php");
        break;
}

?>