<?php

function getTodosCarousel(){
    return selectSQL("SELECT * FROM carousel");
}

?>