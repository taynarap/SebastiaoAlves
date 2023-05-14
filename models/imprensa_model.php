<?php

    //Importacoes
    require_once("requisitos.php");

    //Globais
    $imprensa = getTudoImprensa();

    //Paginacao

    $pagina_atual = (isset($_POST["pagina_atual"])) ? $_POST["pagina_atual"] : 1;

    $total_elementos = selectSQLUnico("SELECT Count(*) AS total FROM imprensa ORDER BY id DESC")["total"];

    $elementos_por_pagina = 2;

    $total_paginas = ceil($total_elementos / $elementos_por_pagina);

    $total_a_saltar = (($pagina_atual - 1) * $elementos_por_pagina);

    $imprensa = selectSQL("SELECT * FROM imprensa ORDER BY id DESC LIMIT $elementos_por_pagina OFFSET $total_a_saltar");

    //NAVBAR/CAROUSEL
    require_once("templates/header.php");

    //MAIN
    require_once("views/imprensa_view.php");

    //RODAPE
    require_once("templates/footer.php");

?>