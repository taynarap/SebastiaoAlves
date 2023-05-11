<?php

// ---------- CONFIG / HELPERS ----------
require_once("requisitos.php");

// ---------- CONFIRMAR LOGIN ----------
estaLogado();

// ---------- INFORMACAO PARA EDICAO ----------
$autor = getAutor();

// ---------- ELEMENTOS VISUAIS DA PAGINA ----------
require_once("_backoffice/templates/header.php");

require_once("_backoffice/views/saidas/editar_autor_view.php");

require_once("_backoffice/templates/footer.php");


// ---------- EDITAR AUTOR ----------
$form = isset($_POST["imagem"]) && isset($_POST["texto"]);

if ($form) {

    iduSQL("UPDATE autor SET imagem='$_POST[imagem]', texto='$_POST[texto]'");
}

?>