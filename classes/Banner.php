<?php

class Banner{

    public $novidade;
    public $titulo;
    public $texto;
    public $imagem;

    function __construct($novidade, $titulo, $texto, $imagem){
        $this->novidade = $novidade;
        $this->titulo = $titulo;
        $this->texto = $texto;
        $this->imagem = $imagem;
    }
}

?>