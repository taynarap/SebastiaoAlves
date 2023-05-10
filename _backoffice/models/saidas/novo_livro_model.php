<?php

// ---------- CONFIG / HELPERS ----------
require_once("requisitos.php");

// ---------- CONFIRMAR LOGIN ----------
estaLogado();

// ---------- ELEMENTOS VISUAIS DA PAGINA ----------
require_once("_backoffice/templates/header.php");

require_once("_backoffice/views/saidas/novo_livro_view.php");

require_once("_backoffice/templates/footer.php");


// ---------- CRIAR NOVO LIVRO ----------
$form = isset($_POST["imagem"]) && isset($_POST["titulo"]) && isset($_POST["texto"]);

if ($form) {

    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("H:i - d/m/Y");

    iduSQL("INSERT INTO livros (imagem, titulo, texto, ultima_atualizacao) VALUES ('$_POST[imagem]', '$_POST[titulo]', '$_POST[texto]', '$data_atual')");
}
