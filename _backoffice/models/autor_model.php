<?php

require_once("requisitos.php");

estaLogado();

$autor = getAutor();

// PAGINA BEM-VINDO + ULTIMO ACESSO

require_once("_backoffice/templates/header.php");

require_once("_backoffice/views/autor_view.php");

require_once("_backoffice/templates/footer.php");

?>