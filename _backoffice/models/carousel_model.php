<?php
// ---------- CONFIG / HELPERS ----------
require_once("requisitos.php");

// ---------- CONFIRMAR LOGIN ----------
estaLogado();

// ---------- VARIAVEL COM HELPER ----------
$carousel = getTodosCarousel();

// ---------- ELEMENTOS VISUAIS DA PAGINA ----------
require_once("_backoffice/templates/header.php");

require_once("_backoffice/views/carousel_view.php");

require_once("_backoffice/templates/footer.php");
