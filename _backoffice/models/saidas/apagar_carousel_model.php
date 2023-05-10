<?php

// ---------- CONFIG / HELPERS ----------
require_once("requisitos.php");

// ---------- CONFIRMAR LOGIN ----------
estaLogado();

// ---------- INFORMACAO PARA APAGAR ----------
$id = (empty($rotas[2])) ? NULL : $rotas[2];

$carousel_especifico = getCarouselID($id);

// ---------- ELEMENTOS VISUAIS DA PAGINA ----------
require_once("_backoffice/templates/header.php");

require_once("_backoffice/views/saidas/apagar_carousel_view.php");

require_once("_backoffice/templates/footer.php");


// ---------- APAGAR CAROUSEL ----------
if (isset($_POST['id'])) {

    $idCarousel = $_POST['id'];

    $carousel_especifico = selectSQLUnico("SELECT * FROM carousel WHERE id=$idCarousel");

} elseif (isset($_POST["apagar"])) {

    iduSQL("DELETE FROM carousel WHERE id='$_POST[apagar]'");

}

?>