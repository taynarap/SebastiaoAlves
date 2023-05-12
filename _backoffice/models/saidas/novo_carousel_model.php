<?php

// ---------- CONFIG / HELPERS ----------
require_once("requisitos.php");

// ---------- CONFIRMAR LOGIN ----------
estaLogado();
$usuario = $_SESSION["usuario"];

// ---------- ELEMENTOS VISUAIS DA PAGINA ----------
require_once("_backoffice/templates/header.php");

require_once("_backoffice/views/saidas/novo_carousel_view.php");

require_once("_backoffice/templates/footer.php");


// ---------- CRIAR NOVO CAROUSEL ----------
$form = isset($_POST["img_desktop"]) && isset($_POST["img_mobile"]) && isset($_POST["titulo"]) && isset($_POST["observacao"]) && isset($_POST["texto"]) && isset($_POST["saber_mais"]);

if($form){

    $login_atual = $usuario["login"];

    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("H:i - d/m/Y");

    iduSQL("INSERT INTO carousel (img_desktop, img_mobile, titulo, observacao, texto, saber_mais, ultima_atualizacao, login_atual) VALUES ('$_POST[img_desktop]', '$_POST[img_mobile]', '$_POST[titulo]', '$_POST[observacao]', '$_POST[texto]', '$_POST[saber_mais]', '$data_atual', '$login_atual')");

}
