<?php

require_once("GLOBAIS.php");

?>

<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sebastião Alves</title>

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
            crossorigin="anonymous"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="css/base.css">

        <!--JQUERY-->
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"
            integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    </head>

    <body class="px-0">
<header class="container-fluid px-0 w-auto">
    <!-- TITULO -->
    <!--DESKTOP-->
    <div class="row w-100 mx-auto d-none d-sm-block" id="topo">

        <div class="col-12 d-flex justify-content-center cabecalho-titulo justify-content-center mt-5">
            Sebastião Alves</div>

        <div class="linha-cabecalho mx-auto col-11"></div>


        <!-- BARRA DE NAVEGAÇÃO  -->

        <nav class="navbar navbar-expand-sm">
            <div class="container justify-content-center">

                <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link <?= ($pagina_atual == "home") ? "active" : ""; ?>" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($pagina_atual == "autor") ? "active" : ""; ?>" href="autor.php">Autor</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link <?= ($pagina_atual == "livro") ? "active" : ""; ?>" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Livros
                            </a>
                            <ul class="dropdown-menu shadow">
                                <li><a class="dropdown-item pb-3" href="senhora_amor_guerra.php">Senhora Do
                                        Amor e Da Guerra</a>
                                </li>
                                <li><a class="dropdown-item pb-3" href="#">O Caracol Estrábico</a></li>
                                <li><a class="dropdown-item pb-3" href="#">O Coleccionador de Amnésias</a>
                                </li>
                                <li><a class="dropdown-item" href="#">O Velho que Pensava que Fugia</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($pagina_atual == "imprensa") ? "active" : ""; ?>" href="imprensa.php">Imprensa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($pagina_atual == "contactos") ? "active" : ""; ?>" href="contactos.php">Contactos</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

    </div>

    <!-- AREA BANNER  -->

    <div id="area-banner" class="carousel slide d-none d-sm-block" data-bs-ride="carousel">
        <div class="carousel-indicators">

            <?php foreach($carousel as $chave => $banner): ?>

                <?php if($chave == 0): ?>

                <button type="button" data-bs-target="#area-banner" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>

                <?php else: ?>
               
                    <button type="button" data-bs-target="#area-banner" data-bs-slide-to="<?= $chave; ?>"
                    aria-label="Slide <?= intval($chave)+ 1 ;?>"></button>

                <?php endif; ?>

            <?php endforeach; ?>
            
        </div>
        <div class="carousel-inner">

            <?php foreach($carousel as $chave => $banner): ?>

                <div class="carousel-item <?= ($chave == 0) ? "active" : ""; ?>">

                    <img class="banner-imagem w-100" src="<?=$banner->imagem; ?>"
                        alt="<?=$banner->titulo; ?>">
                    <div class="carousel-caption d-none d-sm-block">
                        <p class="banner-novidade"><?=$banner->novidade; ?></p>
                        <h5 class="banner-titulo"><?=$banner->titulo; ?></h5>
                        <p class="banner-texto"><?=$banner->texto; ?></p>
                        <div class="banner-sabermais">
                            <button class="btn-sabermais"></button>
                        </div>
                    </div>

                </div>

            <?php endforeach; ?>
            
        </div>

    </div>


    <!--MOBILE-->

    <div class="row w-100 mx-auto d-block d-sm-none " id="topo">

        <!-- BARRA DE NAVEGAÇÃO  -->

        <nav class="navbar mt-4">
            <div class="container-fluid px-0">
                <div class="t1 ms-4 cabecalho-titulo">Sebastião Alves</div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarMobile" aria-controls="navbarMobile" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="linha-cabecalho mx-auto col-11"></div>

                <div class="collapse navbar-collapse" id="navbarMobile">
                    <ul id="navbar-nav-mobile" class="navbar-nav bg-light">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="autor.html">Autor</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Livros
                            </a>
                            <ul class="dropdown-menu my-4 shadow">

                                <?php foreach($livros as $chave => $l): ?>
                                    <?php

                                        $submenu_active = false;
                                        if($pagina_atual == "livro"){
                                            if($_GET["livro"] == $chave){
                                                $submenu_active = true;
                                            }
                                        }

                                    ?>

                                    <li>
                                        <li><a class="dropdown-item pb-2 <?= ($submenu_active) ? "active" : ""; ?>" href="livro.php?livro=<?= $chave; ?>"><?= $l->titulo; ?></a>
                                    </li>

                                <?php endforeach; ?>
                                <!-- <li><a class="dropdown-item pb-2" href="senhora_amor_guerra.html">Senhora Do
                                        Amor e Da Guerra</a>
                                </li>
                                <li><a class="dropdown-item pb-2" href="#">O Caracol Estrábico</a></li>
                                <li><a class="dropdown-item pb-2" href="#">O Coleccionador de
                                        Amnésias</a></li>
                                <li><a class="dropdown-item" href="#">O Velho que Pensava que Fugia</a>
                                </li> -->
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="imprensa.html">Imprensa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactos.html">Contactos</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>



    </div>

    <!-- AREA BANNER  -->

    <div id="area-banner-mobile" class="carousel slide d-block d-sm-none" data-bs-ride="carousel">
        <div class="carousel-indicators">

            <?php foreach($carousel_mobile as $chave => $banner): ?>

                <?php if($chave == 0): ?>

                <button type="button" data-bs-target="#area-banner-mobile" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>

                <?php else: ?>
               
                    <button type="button" data-bs-target="#area-banner-mobile" data-bs-slide-to="<?= $chave; ?>"
                    aria-label="Slide <?= intval($chave)+ 1 ;?>"></button>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>
        <div class="carousel-inner">

            <?php foreach($carousel_mobile as $chave => $banner): ?>

                <div class="carousel-item <?= ($chave == 0) ? "active" : ""; ?>">

                    <img class="banner-imagem w-100" src="<?=$banner->imagem; ?>"
                        alt="<?=$banner->titulo; ?>">
                    <div class="carousel-caption d-block d-sm-none">
                        <p class="banner-novidade"><?=$banner->novidade; ?></p>
                        <h5 class="banner-titulo"><?=$banner->titulo; ?></h5>
                        <p class="banner-texto"><?=$banner->texto; ?></p>
                        <div class="banner-sabermais">
                            <button class="btn-sabermais"></button>
                        </div>
                    </div>

                </div>

            <?php endforeach; ?>
        </div>

    </div>
</header>