<?php

// ---------- CONFIG / HELPERS ----------
require_once("requisitos.php");

// ---------- CONFIRMAR LOGIN ----------
estaLogado();

// ---------- INFORMACAO PARA EDICAO ----------
$home = getTudoHome();

// ---------- ELEMENTOS VISUAIS DA PAGINA ----------
require_once("_backoffice/templates/header.php");

require_once("_backoffice/views/saidas/editar_home_view.php");

require_once("_backoffice/templates/footer.php");


// ---------- EDITAR HOME ----------
$form = isset($_POST["img_autor"]) && isset($_POST["texto_ultimos_livros"]);

if ($form) {
   
    iduSQL("UPDATE home SET img_autor='$_POST[img_autor]', texto_ultimos_livros='$_POST[texto_ultimos_livros]'");
}
