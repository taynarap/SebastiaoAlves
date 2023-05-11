<?php

// ---------- CONFIG / HELPERS ----------
require_once("requisitos.php");

// ---------- CONFIRMAR LOGIN ----------
estaLogado();

// ---------- INFORMACAO PARA EDICAO ----------
$redes = getRedes();

// ---------- ELEMENTOS VISUAIS DA PAGINA ----------
require_once("_backoffice/templates/header.php");

require_once("_backoffice/views/saidas/editar_redes_view.php");

require_once("_backoffice/templates/footer.php");


// ---------- EDITAR CONTACTOS ----------
$form = isset($_POST["instagram"]) && isset($_POST["facebook"]) && isset($_POST["linkedin"]);

if ($form) {
    iduSQL("UPDATE redes SET instagram='$_POST[instagram]', facebook='$_POST[facebook]', linkedin='$_POST[linkedin]'");
}
