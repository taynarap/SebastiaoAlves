<?php

    //Importacoes
    require_once("requisitos.php");

    //Globais
    $contactos = getContactos();

    //NAVBAR/CAROUSEL
    require_once("templates/header.php");

    //MAIN
    require_once("views/contactos_view.php");

    //RODAPE
    require_once("templates/footer.php");

?>