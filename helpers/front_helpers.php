<?php

//------------- HELPER AUTOR --------------

function getAutor()
{
    return selectSQLUnico("SELECT * FROM autor");
}

//------------- HELPER CONTACTOS -------------

function getContactos(){
    return selectSQLUnico("SELECT * FROM contactos");
}

function getSociais(){
    return selectSQLUnico("SELECT * FROM sociais");
}


//------------- HELPER HEADER -------------

function getTodosCarousel(){
return selectSQL("SELECT * FROM carousel");
}

//------------- HELPER HOME -------------

function getTudoHome(){
return selectSQLUnico("SELECT * FROM home");
}

//------------- HELPER LIVROS -------------

function getLivroID($id)
{
return selectSQLUnico("SELECT * FROM livros WHERE id='$id'");
}

function getLivrosSubmenu()
{
return selectSQL("SELECT id, titulo FROM livros ORDER BY titulo ASC");
}

function getDestaque()
{
return selectSQL("SELECT * FROM livros WHERE destaques=1");
}


//------------- HELPER IMPRENSA -------------

function getTudoImprensa()
{
    return selectSQL("SELECT * FROM imprensa");
}
?>