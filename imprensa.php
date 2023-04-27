<?php

require_once("GLOBAIS.php");

$pagina_atual = "imprensa";

?>

<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Imprensa</title>

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
            crossorigin="anonymous"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/imprensa.css">
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
                        <div id="titulo" class="t1">Imprensa</div>
                        <div id="subtitulo" class="t1">Últimas Notícias</div>
                    </div>
                </div>
            </div>

            <!-- ULTIMAS NOTICIAS -->
            <div id="noticia-area" class="container">
                <div id="noticia-caixa" class="row d-flex justify-content-center">
                    <div class="col-10">

                        <div class="row">
                            <div class="t1 px-0">
                                Lançamento | Senhora do Amor e da Guerra
                            </div>

                            <div class="linha-lancamento"></div>

                        </div>

                        <div class="row d-flex justify-content-end data-publicacao">
                            Publicado a 17 Junho 2020
                        </div>

                        <div id="livro-img">
                            <img class="w-100" src="imgs/desktop/conteudo-imprensa1.jpg"
                                alt="Livro Senhora do Amor e da Guerra">
                        </div>

                    </div>
                </div>
            </div>

            <div class="container-fluid caixa-separadora"></div>

            <div id="noticia-area" class="container">
                <div id="noticia-caixa" class="row d-flex justify-content-center">
                    <div class="col-10">

                        <div class="row">
                            <div class="t1 px-0">
                                Lançamento Do Livro "O Velho que pensava que fugia"
                            </div>

                            <div class="linha-lancamento mx-auto"></div>

                        </div>

                        <div class="row d-flex justify-content-end data-publicacao">
                            Publicado a 6 Dezembro 2017
                        </div>

                        <div id="livro-img">
                            <img class="w-100" src="imgs/desktop/conteudo-imprensa2.jpg"
                                alt="Livro O Velho que Pensava que Fugia">
                        </div>

                        <div class="d-block p pt-5">
                            Terá lugar no dia 6 de dezembro, pelas 18h10, no Anfiteatro Abreu Faro, a sessão de
                            Lançamento
                            do livro "O velho que pensava que fugia", de Sebastião Alves. <br>
                            Nesta sessão o autor irá ler algumas das passagens do livro. <br>
                            "Às quatro da madrugada, que faz um homam de oitenta e três anos escondido entre os
                            eucaliptos? <br>
                            De que foge? Que procura? Quem o persegue? <br>
                            Onde irá ele arranjar dinheiro para hotéis, táxis, comboios, autocarros? <br>
                            Porque elege para refúgio esse remoto lugar de romagem onde uma Virgem Negra acolhe
                            peregrinos desde
                            a Idade Média? <br>
                            E que dilema o vem finalmente surpreender, quando pensava ter descoberto a paz e mesmo
                            reencontrado amor?" <br>
                            "Sebastião Alves nasceu em Lisboa, em 1954. Formou-se em engenharia química pela
                            Universidade
                            de Birmingham, Reino Unido. Professor no Instituto Superior Técnico, é casado e tem duas
                            filhas.
                            Outras obras publicadas: O caracol estrábico (contos), Chiado Editora, 2011."
                            <br><br>
                            Notícia de Técnico Lisboa <br>
                            https://tecnico.ulisboa.pt/pt/eventos/lancamento-do-livro-o-velho-que-pensava-que-fugia/
                        </div>


                    </div>
                </div>
            </div>

            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item setas s-esquerda me-5"><img src="imgs/desktop/setaesquerda1.svg"
                            onmouseover="this.src='imgs/desktop/setaesquerda2.svg'"
                            onmouseout="this.src='imgs/desktop/setaesquerda1.svg'" alt="Página Anterior"></li>
                    <li class="page-item"><a class="page-link num me-2 active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link num me-2" href="#">2</a></li>
                    <li class="page-item"><a class="page-link num" href="#">3</a></li>
                    <li class="page-item setas s-direita ms-5"><img src="imgs/desktop/setadireita1.svg"
                            onmouseover="this.src='imgs/desktop/setadireita2.svg'"
                            onmouseout="this.src='imgs/desktop/setadireita1.svg'" alt="Página Seguinte"></li>
                </ul>
            </nav>

        </main>

        <!-- RODAPE  -->
        <?php require("componentes/footer.php"); ?>

    </body>

</html>