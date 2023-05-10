<?php

// ---------- CONFIG / HELPERS ----------
require_once("requisitos.php");

// ---------- CONFIRMAR LOGIN ----------
estaLogado();


$id = (empty($rotas[2])) ? NULL : $rotas[2];

$carousel_especifico = getCarouselID($id);

// ---------- ELEMENTOS VISUAIS DA PAGINA ----------
require_once("_backoffice/templates/header.php");

require_once("_backoffice/views/saidas/editar_carousel_view.php");

require_once("_backoffice/templates/footer.php");

$form = isset($_POST["img_desktop"]) && isset($_POST["img_mobile"]) && isset($_POST["titulo"]) && isset($_POST["texto"]) && isset($_POST["saber_mais"]);

if (isset($_POST['id'])) {

    $idCarousel = $_POST['id'];

} elseif ($form) {

    $idCarousel = $_POST['editar'];
    $img_desktop = $_POST["img_desktop"];
    $img_mobile = $_POST["img_mobile"];
    $titulo = $_POST["titulo"];
    $texto = $_POST["texto"];
    $saber_mais = $_POST["saber_mais"];

    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("H:i:s - d/m/Y");

    iduSQL("UPDATE carousel SET img_desktop='$img_desktop', img_mobile='$img_mobile', titulo='$titulo', texto='$texto', saber_mais='$saber_mais', ultima_atualizacao='$data_atual' WHERE id='$idCarousel'");

}
