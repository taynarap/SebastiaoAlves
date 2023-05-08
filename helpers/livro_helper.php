<?php

function getLivroID($id){
    return selectSQLUnico("SELECT * FROM livros WHERE id='$id'");
}

function getLivrosSubmenu(){
    return selectSQL("SELECT id, titulo FROM livros ORDER BY titulo ASC");
}

function getDestaque(){
    return selectSQL("SELECT * FROM livros WHERE destaques=1");
}

?>
