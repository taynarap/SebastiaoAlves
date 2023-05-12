<?php

// ---------- CONFIG / HELPERS ----------
require_once("requisitos.php");

// ---------- CONFIRMAR LOGIN ----------
estaLogado();

// ---------- INFORMACAO PARA EDICAO ----------
$id = (empty($rotas[2])) ? NULL : $rotas[2];

$destaque_especifico = getDestaqueID($id);

$destaque_especifico["destaques"] = 0;

$livros = getTodosLivros();

// ---------- ELEMENTOS VISUAIS DA PAGINA ----------
require_once("_backoffice/templates/header.php");

require_once("_backoffice/views/saidas/editar_destaques_view.php");

require_once("_backoffice/templates/footer.php");


// ---------- EDITAR DESTAQUES ----------
$form = isset($_POST["destaque"]) && isset($_POST["observacao"]);

if (isset($_POST['id'])) {

    $idLivro = $_POST['id'];

} elseif ($form) {

    $id_atual = $_POST['editar'];
    $id_novo = $_POST['destaque'];
    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("H:i - d/m/Y");

    // FUNCIONA PARA MUDAR O CAMPO DESTAQUES PARA 1 DO LIVRO QUE QUEREMOS SELECIONAR
    // iduSQL("UPDATE livros SET destaques='$destaques' WHERE id='$id_novo'");

    iduSQL("UPDATE livros SET destaques = CASE destaques 
                                            WHEN 1 THEN 0
                                            WHEN 0 THEN 1
                                            END,
                                            ultima_atualizacao='$data_atual',
                                            observacao='$_POST[observacao]'
                                            WHERE id IN('$id_atual', '$id_novo')");
}
