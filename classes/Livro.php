<?php

class Livro {

    public $titulo;
    public $texto;
    public $imagem;

    function __construct($titulo, $texto, $imagem){
        $this->titulo = $titulo;
        $this->texto = $texto;
        $this->imagem = $imagem;
    }
}

?>