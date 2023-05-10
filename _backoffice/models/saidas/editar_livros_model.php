<?php

// ---------- CONFIG / HELPERS ----------
require_once("requisitos.php");

// ---------- CONFIRMAR LOGIN ----------
estaLogado();

// ---------- INFORMACAO PARA EDICAO ----------
$id = (empty($rotas[2])) ? NULL : $rotas[2];

$livro_especifico = getLivroID($id);

// ---------- ELEMENTOS VISUAIS DA PAGINA ----------
require_once("_backoffice/templates/header.php");

require_once("_backoffice/views/saidas/editar_livros_view.php");

require_once("_backoffice/templates/footer.php");


// ---------- EDITAR CAROUSEL ----------
$form = isset($_POST["imagem"]) && isset($_POST["titulo"]) && isset($_POST["texto"]);

if (isset($_POST['id'])) {

    $idLivro = $_POST['id'];
} elseif ($form) {

    $idLivro = $_POST['editar'];
    $imagem = $_POST["imagem"];
    $titulo = $_POST["titulo"];
    $texto = $_POST["texto"];

    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("H:i - d/m/Y");

    iduSQL("UPDATE livros SET imagem='$imagem', titulo='$titulo', texto='$texto', ultima_atualizacao='$data_atual' WHERE id='$idLivro'");
}
