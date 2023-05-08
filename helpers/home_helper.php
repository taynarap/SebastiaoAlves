<?php

function getTudoHome(){
    return selectSQLUnico("SELECT * FROM home");
}

?>