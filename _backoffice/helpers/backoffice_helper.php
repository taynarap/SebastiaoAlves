<?php

//---------- LOGIN ----------

function fazerLogin($login, $senha)
{

    $usuario = selectSQLUnico("SELECT * FROM usuarios WHERE login='$login'");

    if (!empty($usuario)) {
        if (password_verify($senha, $usuario["senha"])) {
            session_start();
            $_SESSION["usuario"] = $usuario;
            $id_usuario = $usuario["id"];
            $_SESSION["ultimo_acesso"] = $usuario["ultimo_acesso"];

            date_default_timezone_set("Europe/Lisbon");
            $data_atual = date("H:i:s - d/m/Y");

            iduSQL("UPDATE usuarios SET ultimo_acesso='$data_atual' WHERE id=$id_usuario");

            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function estaLogado()
{
    session_start();
    if (!isset($_SESSION["usuario"])) {
        header("Location: ./");
        exit();
    }
}

function logout()
{
    session_start();
    session_destroy();
}
?>
