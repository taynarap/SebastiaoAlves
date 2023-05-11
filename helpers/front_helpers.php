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

function getRedes(){
    return selectSQLUnico("SELECT * FROM redes");
}


//------------- HELPER HEADER -------------

function getTodosCarousel(){
    return selectSQL("SELECT * FROM carousel");
}

function getCarouselID($id){
    return selectSQLUnico("SELECT * FROM carousel WHERE id='$id'");
}

//------------- HELPER HOME -------------

function getTudoHome(){
    return selectSQLUnico("SELECT * FROM home");
}

//------------- HELPER IMPRENSA -------------

function getTudoImprensa()
{
    return selectSQL("SELECT * FROM imprensa");
}

function getImprensaID($id)
{
    return selectSQLUnico("SELECT * FROM imprensa WHERE id='$id'");
}

//------------- HELPER LIVROS -------------

function getTodosLivros()
{
    return selectSQL("SELECT * FROM livros");
}

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
?>