<?php

require_once("GLOBAIS.php");

$pagina_atual = "livro";

if(isset($livro[$_GET["livro"]])){
        $livro_especifico = $livro[$_GET["livro"]];
}

?>
<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
            crossorigin="anonymous"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/livro.css">
    </head>

    <body>
        
        <!-- CABEÇALHO  -->
        <?php require("componentes/header.php"); ?>

        <!-- AREA MAIN -->

        <main>

            <!-- AREA DO TITULO -->

            <div id="area-titulo" class="container-fluid">
                <div id="titulo-caixa" class="row offset-md-1 shadow">

                    <div class="col menu-selecionado">
                        <div id="titulo" class="t1">Livros</div>
                        <div id="subtitulo" class="t1"><?= $livro_especifico->titulo; ?></div>
                    </div>
                </div>
            </div>

            <!-- AREA TEXTO -->
            <div id="livro-area" class="container">
                <div id="livro-caixa" class="row">

                    <div id="livro-img" class="col-auto mx-auto w-auto">
                        <img src="<?= $livro_especifico->imagem; ?>" alt="<?= $livro_especifico->titulo; ?>">
                    </div>

                    <div class="col-lg-7 col-12 livro-texto">

                        <div id="livro-paragrafo" class="p px-3 px-sm-1 mt-lg-0 mt-5">
                           
                            <?= $livro_especifico->texto; ?>

                        </div>

                        <a class="d-lg-block d-none" href="index.html">
                            <button class="btn-voltar btn-voltar-livro"></button>
                        </a>

                    </div>


                </div>
            </div>

        </main>

        <!-- RODAPE  -->
        <?php require("componentes/footer.php"); ?>
        
    </body>

</html>