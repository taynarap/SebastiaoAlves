<?php

// ---------- CONFIG / HELPERS ----------
require_once("requisitos.php");

// ---------- CONFIRMAR LOGIN ----------
estaLogado();

// ---------- INFORMACAO PARA EDICAO ----------
$contactos = getContactos();

// ---------- ELEMENTOS VISUAIS DA PAGINA ----------
require_once("_backoffice/templates/header.php");

require_once("_backoffice/views/saidas/editar_contactos_view.php");

require_once("_backoffice/templates/footer.php");


// ---------- EDITAR CONTACTOS ----------
$form = isset($_POST["telefone"]) && isset($_POST["morada"]) && isset($_POST["email"]) && isset($_POST["horario"]);

if ($form) {
    iduSQL("UPDATE contactos SET telefone='$_POST[telefone]', morada='$_POST[morada]', email='$_POST[email]', horario='$_POST[horario]'");
}

?>