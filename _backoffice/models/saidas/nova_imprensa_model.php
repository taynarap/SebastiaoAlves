<?php

// ---------- CONFIG / HELPERS ----------
require_once("requisitos.php");

// ---------- CONFIRMAR LOGIN ----------
estaLogado();

// ---------- ELEMENTOS VISUAIS DA PAGINA ----------
require_once("_backoffice/templates/header.php");

require_once("_backoffice/views/saidas/nova_imprensa_view.php");

require_once("_backoffice/templates/footer.php");


// ---------- CRIAR NOVO IMPRENSA ----------
$form = isset($_POST["imagem"]) && isset($_POST["titulo"]) && isset($_POST["texto"]) && isset($_POST["data_publicacao"]);

if ($form) {

    iduSQL("INSERT INTO imprensa(imagem, titulo, texto, data_publicacao) VALUES ('$_POST[imagem]', '$_POST[titulo]', '$_POST[texto]', '$_POST[data_publicacao]')");
}
