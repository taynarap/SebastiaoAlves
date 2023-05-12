<?php

// ---------- CONFIG / HELPERS ----------
require_once("requisitos.php");

// ---------- CONFIRMAR LOGIN ----------
estaLogado();

// ---------- INFORMACAO PARA EDICAO ----------
$id = (empty($rotas[2])) ? NULL : $rotas[2];

$carousel_especifico = getCarouselID($id);

$usuario = $_SESSION["usuario"];

// ---------- ELEMENTOS VISUAIS DA PAGINA ----------
require_once("_backoffice/templates/header.php");

require_once("_backoffice/views/saidas/editar_carousel_view.php");

require_once("_backoffice/templates/footer.php");


// ---------- EDITAR CAROUSEL ----------
$form = isset($_POST["img_desktop"]) && isset($_POST["img_mobile"]) && isset($_POST["titulo"]) && isset($_POST["observacao"]) && isset($_POST["texto"]) && isset($_POST["saber_mais"]);

if (isset($_POST['id'])) {

    $idCarousel = $_POST['id'];

} elseif ($form) {

    $idCarousel = $_POST['editar'];
    $login_atual = $usuario["login"];

    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("H:i - d/m/Y");

    iduSQL("UPDATE carousel SET img_desktop='$_POST[img_desktop]', img_mobile='$_POST[img_mobile]', titulo='$_POST[titulo]', observacao='$_POST[observacao]', texto='$_POST[texto]', saber_mais='$_POST[saber_mais]', ultima_atualizacao='$data_atual', login_atual='$login_atual' WHERE id='$idCarousel'");

}
