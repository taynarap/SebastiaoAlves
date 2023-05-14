<?php

// ---------- CONFIG / HELPERS ----------
require_once("requisitos.php");

// ---------- CONFIRMAR LOGIN ----------
$form = isset($_POST["login"]) && isset($_POST["senha"]);

if ($form) {
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    if (fazerLogin($login, $senha)) {
        header("Location:" . $url_backoffice . "inicio");
        exit();
    }
}

// ---------- ELEMENTOS VISUAIS DA PAGINA ----------

require_once("_backoffice/templates/header.php");

require_once("_backoffice/views/signin_view.php");

require_once("_backoffice/templates/footer.php");
