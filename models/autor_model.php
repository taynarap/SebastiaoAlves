<?php

    //Importacoes
    require_once("requisitos.php");

    //Globais
    $autor = getAutor();
  

    //NAVBAR/CAROUSEL
    require_once("templates/header.php");

    //MAIN
    require_once("views/autor_view.php");

    //RODAPE
    require_once("templates/footer.php");

?>