<?php

// ---------- CONFIG / HELPERS ----------
require_once("requisitos.php");

// ---------- CONFIRMAR LOGIN ----------
estaLogado();

// ---------- INFORMACAO PARA APAGAR ----------
$id = (empty($rotas[2])) ? NULL : $rotas[2];

$livro_especifico = getLivroID($id);

// ---------- ELEMENTOS VISUAIS DA PAGINA ----------
require_once("_backoffice/templates/header.php");

require_once("_backoffice/views/saidas/apagar_livro_view.php");

require_once("_backoffice/templates/footer.php");


// ---------- APAGAR LIVRO ----------
if (isset($_POST['id'])) {

    $idLivro = $_POST['id'];

    $livro_especifico = selectSQLUnico("SELECT * FROM livros WHERE id=$idLivros");

} elseif (isset($_POST["apagar"])) {

    iduSQL("DELETE FROM livros WHERE id='$_POST[apagar]'");

}
