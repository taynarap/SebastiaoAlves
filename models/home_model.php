<?php
    //Importacoes
    require_once("requisitos.php");

    //Globais
    $autor = getAutor();
    $home = getTudoHome();
    $livro_destaque = getDestaque();

    //NAVBAR/CAROUSEL
    require_once("templates/header.php");

    //MAIN
    require_once("views/home_view.php");

    //RODAPE
    require_once("templates/footer.php");
