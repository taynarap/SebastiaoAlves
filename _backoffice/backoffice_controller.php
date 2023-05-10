<?php

//LOGIN INFO
//login -> taynara
//senha -> 1111

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

    case "editarCarousel":
        require_once("_backoffice/models/saidas/editar_carousel_model.php");
        break;

    case "home":
        require_once("_backoffice/models/home_model.php");
        break;

    case "autor":
        require_once("_backoffice/models/autor_model.php");
        break;

    case "livros":
        require_once("_backoffice/models/livros_model.php");
        break;

    case "destaques":
        require_once("_backoffice/models/destaques_model.php");
        break;

    case "imprensa":
        require_once("_backoffice/models/imprensa_model.php");
        break;

    case "contactos":
        require_once("_backoffice/models/contactos_model.php");
        break;

    case "redes":
        require_once("_backoffice/models/redes_model.php");
        break;

    case "configuracoes":
        require_once("_backoffice/models/configuracoes_model.php");
        break;

    case "sair":
    require_once("models/sair_model.php");
    break;

// default:
// require_once("models/404_model.php");
// break;
}
