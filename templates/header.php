<?php

$livros = getLivrosSubmenu();
$carousel = getTodosCarousel();

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebastião Alves</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href=<?= $url_base . "public/css/base.css"; ?>>
    <link rel="stylesheet" href="<?= ($rotas[0] == "") ? $url_base . "public/css/home.css" : ""; ?>">
    <link rel="stylesheet" href="<?= ($rotas[0] == "autor") ? $url_base . "public/css/autor.css" : ""; ?>">
    <link rel="stylesheet" href="<?= ($rotas[0] == "livro") ? $url_base . "public/css/livro.css" : ""; ?>">
    <link rel="stylesheet" href="<?= ($rotas[0] == "imprensa") ? $url_base . "public/css/imprensa.css" : ""; ?>">
    <link rel="stylesheet" href="<?= ($rotas[0] == "contactos") ? $url_base . "public/css/contactos.css" : ""; ?>">

    <!--JQUERY-->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="js/funcoes.js"></script>
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
                                <a class="nav-link <?= ($rotas[0] == "") ? "active" : ""; ?>" aria-current="page" href="<?= $url_base; ?> ">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($rotas[0] == "autor") ? "active" : ""; ?>" href="<?= $url_base; ?>autor">Autor</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="menu-principal" class="nav-link <?= ($rotas[0] == "livro") ? "active" : ""; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Livros
                                </a>
                                <ul class="dropdown-menu shadow">
                                    <?php foreach ($livros as $l) : ?>
                                        <li><a class="dropdown-item submenu <?= ($rotas[0] == "livro" && $rotas[1] == $l["id"]) ? "active" : ""; ?>" href="<?= $url_base; ?>livro/<?= $l["id"]; ?>"><?= $l["titulo"] ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($rotas[0] == "imprensa") ? "active" : ""; ?>" href="<?= $url_base; ?>imprensa">Imprensa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($rotas[0] == "contactos") ? "active" : ""; ?>" href="<?= $url_base; ?>contactos">Contactos</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>

        </div>

        <!-- AREA BANNER  -->

        <div id="area-banner" class="carousel slide w-100 d-none d-sm-block px-0" data-bs-ride="carousel">
            <div class="carousel-indicators">

                <?php foreach ($carousel as $chave => $banner) : ?>

                    <?php if ($chave == 0) : ?>

                        <button type="button" data-bs-target="#area-banner" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

                    <?php else : ?>

                        <button type="button" data-bs-target="#area-banner" data-bs-slide-to="<?= $chave; ?>" aria-label="Slide <?= intval($chave) + 1; ?>"></button>

                    <?php endif; ?>

                <?php endforeach; ?>

            </div>
            <div class="carousel-inner">

                <?php foreach ($carousel as $chave => $c) : ?>
                    <div class="carousel-item <?= ($chave == 0) ? "active" : ""; ?>">
                        <img src="<?= $c["img_desktop"]; ?>" class="banner-imagem w-100 d-block" alt="Banner">
                        <div class="carousel-caption d-none d-sm-block">
                            <div class="banner-novidade"><?= $c["observacao"]; ?></div>
                            <div class="banner-titulo col-5 mt-2"><?= $c["titulo"]; ?></div>
                            <div class="banner-texto col-7 mt-2">
                                <?= substr($c["texto"], 0, 200); ?>...
                            </div>
                            <div class="banner-sabermais">
                                <a href="<?= $c["saber_mais"]; ?>">
                                    <button class="btn-sabermais"></button>
                                </a>
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

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMobile" aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">
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
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Livros
                                </a>
                                <ul class="dropdown-menu my-4 shadow">
                                    <?php foreach ($livros as $l) : ?>
                                        <li><a class="dropdown-item <?= ($rotas[0] == "livro" && $rotas[1] == $l["id"]) ? "active" : ""; ?>" href="<?= $url_base; ?>livro/<?= $l["id"]; ?>"><?= $l["titulo"] ?></a></li>
                                    <?php endforeach; ?>
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

                <?php foreach ($carousel as $chave => $banner) : ?>

                    <?php if ($chave == 0) : ?>

                        <button type="button" data-bs-target="#area-banner-mobile" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

                    <?php else : ?>

                        <button type="button" data-bs-target="#area-banner-mobile" data-bs-slide-to="<?= $chave; ?>" aria-label="Slide <?= intval($chave) + 1; ?>"></button>

                    <?php endif; ?>

                <?php endforeach; ?>

            </div>
            <div class="carousel-inner">
                <?php for ($i = 0; $i < count($carousel); $i++) : ?>
                    <?php $c = $carousel[$i]; ?>
                    <div class="carousel-item <?= ($i == 0) ? "active" : ""; ?>">
                        <img src="<?= $c["img_mobile"]; ?>" class="banner-imagem d-block w-100" alt="cabecalho1">
                        <div class="carousel-caption d-block d-md-none">
                            <div class="banner-novidade"><?= $c["observacao"]; ?></div>
                            <div class="banner-titulo col-12 mt-2"><?= $c["titulo"]; ?></div>
                            <div class="banner-texto col-12 mt-2">
                                <?= substr($c["texto"], 0, 100); ?>...
                            </div>
                            <div class="banner-sabermais">
                                <a href="<?= $c["saber_mais"]; ?>">
                                    <button class="btn-sabermais"></button>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>

        </div>
    </header>