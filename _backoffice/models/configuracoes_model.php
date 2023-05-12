<?php
// ---------- CONFIG / HELPERS ----------
require_once("requisitos.php");

// ---------- CONFIRMAR LOGIN ----------

estaLogado();

$usuario = $_SESSION["usuario"];

// ---------- ELEMENTOS VISUAIS DA PAGINA ----------
require_once("_backoffice/templates/header.php");

require_once("_backoffice/views/configuracoes_view.php");

require_once("_backoffice/templates/footer.php");

// ---------- ALTERAR PASSWORD ----------
$form = isset($_POST["senha"]) && isset($_POST["nova_senha"]) && isset($_POST["conf_nova_senha"]);

if ($form) {

    if (password_verify($_POST["senha"], $usuario["senha"]) && $_POST["nova_senha"] == $_POST["conf_nova_senha"]) {
        $id = $_POST["editar"];
        $senha = $_POST["conf_nova_senha"];
        $senha_cif = password_hash($senha, PASSWORD_DEFAULT);

        iduSQL("UPDATE usuarios SET senha='$senha_cif' WHERE id=$id");
    }
}

?>