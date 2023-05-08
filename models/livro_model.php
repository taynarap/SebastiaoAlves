<?php
    //Importacoes
    require_once("requisitos.php");

    //Global
    $livro_especifico = getLivroID($rotas[1]);

    //NAVBAR/CAROUSEL
    require_once("templates/header.php");

    //MAIN
    require_once("views/livro_view.php");

    //RODAPE
    require_once("templates/footer.php");

?>