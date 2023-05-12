<?php

// ---------- CONFIG / HELPERS ----------
require_once("requisitos.php");

// ---------- CONFIRMAR LOGIN ----------
estaLogado();

// ---------- INFORMACAO PARA EDICAO ----------
$id = (empty($rotas[2])) ? NULL : $rotas[2];

$livro_especifico = getLivroID($id);

$usuario = $_SESSION["usuario"];

// ---------- ELEMENTOS VISUAIS DA PAGINA ----------
require_once("_backoffice/templates/header.php");

require_once("_backoffice/views/saidas/editar_livros_view.php");

require_once("_backoffice/templates/footer.php");


// ---------- EDITAR LIVRO ----------
$form = isset($_POST["imagem"]) && isset($_POST["titulo"]) && isset($_POST["observacao"]) && isset($_POST["texto"]) && isset($_POST["destaques"]);

if (isset($_POST['id'])) {

    $idLivro = $_POST['id'];
} elseif ($form) {

    $idLivro = $_POST['editar'];
    $login_atual = $usuario["login"];

    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("H:i - d/m/Y");

    iduSQL("UPDATE livros SET imagem='$_POST[imagem]', titulo='$_POST[titulo]', observacao='$_POST[observacao]', texto='$_POST[texto]', destaques='$_POST[destaques]', ultima_atualizacao='$data_atual', login_atual='$login_atual' WHERE id='$idLivro'");
}
