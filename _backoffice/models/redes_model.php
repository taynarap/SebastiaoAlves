<?php
// ---------- CONFIG / HELPERS ----------
require_once("requisitos.php");

// ---------- CONFIRMAR LOGIN ----------
estaLogado();

// ---------- VARIAVEL COM HELPER ----------
$redes = getRedes();

// ---------- ELEMENTOS VISUAIS DA PAGINA ----------
require_once("_backoffice/templates/header.php");

require_once("_backoffice/views/redes_view.php");

require_once("_backoffice/templates/footer.php");
