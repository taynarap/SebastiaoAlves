<?php

// ---------- CONFIG / HELPERS ----------
require_once("requisitos.php");

// ---------- CONFIRMAR LOGIN ----------
estaLogado();

// ---------- INFORMACAO PARA EDICAO ----------
$id = (empty($rotas[2])) ? NULL : $rotas[2];

$imprensa_especifico = getImprensaID($id);

// ---------- ELEMENTOS VISUAIS DA PAGINA ----------
require_once("_backoffice/templates/header.php");

require_once("_backoffice/views/saidas/editar_imprensa_view.php");

require_once("_backoffice/templates/footer.php");


// ---------- EDITAR IMPRENSA ----------
$form = isset($_POST["imagem"]) && isset($_POST["titulo"]) && isset($_POST["texto"]) && isset($_POST["data_publicacao"]);

if (isset($_POST['id'])) {

    $idImprensa = $_POST['id'];

} elseif ($form) {

    $idImprensa = $_POST['editar'];
    $imagem = $_POST["imagem"];
    $titulo = $_POST["titulo"];
    $texto = $_POST["texto"];
    $data_publicacao = $_POST["data_publicacao"];

    iduSQL("UPDATE imprensa SET imagem='$imagem', titulo='$titulo', texto='$texto', data_publicacao='$data_publicacao' WHERE id='$idImprensa'");
}
