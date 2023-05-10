<?php

// ---------- CONFIG / HELPERS ----------
require_once("requisitos.php");

// ---------- CONFIRMAR LOGIN ----------
estaLogado();

// ---------- INFORMACAO PARA APAGAR ----------
$id = (empty($rotas[2])) ? NULL : $rotas[2];

$imprensa_especifico = getImprensaID($id);

// ---------- ELEMENTOS VISUAIS DA PAGINA ----------
require_once("_backoffice/templates/header.php");

require_once("_backoffice/views/saidas/apagar_imprensa_view.php");

require_once("_backoffice/templates/footer.php");


// ---------- APAGAR IMPRENSA ----------

if (isset($_POST['id'])) {

    $id = $_POST['id'];

    $imprensa_especifico = selectSQLUnico("SELECT * FROM imprensa WHERE id=$id");

} elseif (isset($_POST["apagar"])) {

    iduSQL("DELETE FROM imprensa WHERE id='$_POST[apagar]'");

}
