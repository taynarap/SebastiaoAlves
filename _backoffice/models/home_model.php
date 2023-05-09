<?php

require_once("requisitos.php");

estaLogado();

$home = getTudoHome();

// PAGINA BEM-VINDO + ULTIMO ACESSO

require_once("_backoffice/templates/header.php");

require_once("_backoffice/views/home_view.php");

require_once("_backoffice/templates/footer.php");
