<?php

require_once("GLOBAIS.php");

$pagina_atual = "livro";

?>
<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Senhora do Amor e da Guerra</title>

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
                        <div id="subtitulo" class="t1">Senhora do Amor e da Guerra</div>
                    </div>
                </div>
            </div>

            <!-- AREA TEXTO -->
            <div id="livro-area" class="container">
                <div id="livro-caixa" class="row">

                    <div id="livro-img" class="col-auto mx-auto w-auto">
                        <img src="imgs/desktop/livro-conteudo.jpg" alt="Livro Senhora do Amor e da Guerra">
                    </div>

                    <div class="col-lg-7 col-12 livro-texto">

                        <div id="livro-paragrafo" class="p px-3 px-sm-1 mt-lg-0 mt-5">
                            Uruk, Mesopotâmia, 3000 a.C. Séculos antes do famoso Gilgamesh, uma bela mulher aparece a
                            comandar
                            os destinos da maior cidade do mundo. <br>
                            Sete extraordinárias plaquetas de barro cozido sugerem a sua história: a inteligência, a
                            coragem, o poder
                            de sedução que a conduzem ao poder vencendo todas as adversidades; a luta contra a corrupção
                            dos sacerdotes
                            de Inanna; a vitória sobre os invasores amorritas; e finalmente o dia em que embarca para o
                            reino das
                            trevas, vitimada pela pestilência, após inundações que cobriram a terra como após
                            um dilúvio bíblico...
                            <br><br>
                            As plaquetas chegam-nos assinadas por Zamug, o Coxo, que abandonou a cidade
                            maldita levando consigo os ensinamentos de Nisaba, ou seja, o segredo da
                            escrita.
                            <br><br><br>

                            Edição: Junho de 2020 <br>
                            Dimensões: 150 x 230 x 10mm <br>
                            Encadernação: Capa mole <br>
                            Páginas: 240

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