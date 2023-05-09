<?php

//---------- ACESSOS ----------
function novoAcesso($id_usuario)
{

    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("H:i:s - d/m/Y");

    iduSQL("UPDATE usuarios SET ultimo_acesso='$data_atual' WHERE id=$id_usuario");
}

//---------- ATUALIZACOES ----------

function novaAtualizacao($id){

    $carousel = getTodosCarousel();

    if (!empty($form)) {

        $_SESSION["ultimo_acesso"] = $carousel["ultimo_acesso"];

        date_default_timezone_set("Europe/Lisbon");
        $data_atual = date("H:i:s - d/m/Y");

        iduSQL("UPDATE carousel SET ultimo_atualizacao='$data_atual' WHERE id=$id");

        return true;

    } else {
        return false;
    }


}


//---------- LOGIN ----------
function fazerLogin($login, $senha)
{

    $usuario = selectSQLUnico("SELECT * FROM usuarios WHERE login='$login'");

    if (!empty($usuario)) {
        if (password_verify($senha, $usuario["senha"])) {
            session_start();
            $_SESSION["usuario"] = $usuario;
            $_SESSION["ultimo_acesso"] = $usuario["ultimo_acesso"];

            novoAcesso($usuario["id"]);

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
