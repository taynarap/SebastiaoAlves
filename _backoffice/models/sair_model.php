<?php

// ---------- CONFIG / HELPERS ----------
require_once("requisitos.php");

// ---------- FAZER LOGOUT ----------
logout();

// ---------- ELEMENTOS VISUAIS DA PAGINA ----------
require_once("_backoffice/templates/header.php");

require_once("_backoffice/views/sair_view.php");

require_once("_backoffice/templates/footer.php");

?>