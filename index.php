<?php

// ---------- IMPORTACOES ----------
require_once("requisitos.php");

// ---------- ROTAS ----------
$rotas = $_SERVER["REQUEST_URI"];
$rotas = str_replace("/sebastiao_alves/", "", $rotas);
$rotas = explode("/", $rotas);

switch($rotas[0]){

   case "backoffice":
        require_once("controllers/backoffice_controller.php");
        break;
    
    default:
        require_once("controllers/frontoffice_controller.php");
        break;
}
