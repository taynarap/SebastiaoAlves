<?php

require_once("requisitos.php");

estaLogado();

$carousel = getTodosCarousel();



// PAGINA BEM-VINDO + ULTIMO ACESSO

require_once("_backoffice/templates/header.php");

require_once("_backoffice/views/carousel_view.php");

require_once("_backoffice/templates/footer.php");
