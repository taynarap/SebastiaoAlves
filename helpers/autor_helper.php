<?php

function getTudoAutor(){
    return selectSQLUnico("SELECT * FROM autor");
}
