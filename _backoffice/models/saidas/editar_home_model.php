<?php

// ---------- CONFIG / HELPERS ----------
require_once("requisitos.php");

// ---------- CONFIRMAR LOGIN ----------
estaLogado();

// ---------- INFORMACAO PARA EDICAO ----------
$id = (empty($rotas[2])) ? NULL : $rotas[2];

$home = getTudoHome();

// ---------- ELEMENTOS VISUAIS DA PAGINA ----------
require_once("_backoffice/templates/header.php");

require_once("_backoffice/views/saidas/editar_home_view.php");

require_once("_backoffice/templates/footer.php");


// ---------- EDITAR HOME ----------
$form = isset($_POST["img_autor"]) && isset($_POST["texto_ultimos_livros"]);

if (isset($_POST['id'])) {

    $idHome = $_POST['id'];

} elseif ($form) {

    $img_autor = $_POST["img_autor"];
    $texto_ultimos_livros = $_POST["texto_ultimos_livros"];

    iduSQL("UPDATE home SET img_autor='$img_desktop', texto_ultimos_livros='$texto_ultimos_livros' WHERE id='$idHome'");
}
