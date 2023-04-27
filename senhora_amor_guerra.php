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

        <!-- DESKTOP  -->

        <!-- BARRA DE MENUS -->
        <div id="barra-menus" class="container-fluid d-md-block d-none">


            <div class="linha-rodape mx-auto"></div>

            <div id="menu-rodape-area">

                <a class="menu-rodape active" href="index.html">HOME</a>
                <a class="menu-rodape" href="autor.html">AUTOR</a>
                <a class="menu-rodape" href="">LIVROS</a>
                <a class="menu-rodape" href="imprensa.html">IMPRENSA</a>
                <a class="menu-rodape" href="contactos.html">CONTACTOS</a>

            </div>

            <div class="linha-rodape mx-auto"></div>

        </div>


        <!-- CONTACTOS E REDES SOCIAIS -->

        <footer id="rodape-redes" class="container">

            <div class="row d-md-flex d-none">

                <div class="col-7 mx-auto">

                    <div class="row">

                        <div id="rodape-titulo" class="col-12 t1">Contactos</div>

                    </div>

                    <div id="rodape-contactos" class="row">

                        <div id="contacto-items" class="col-4">
                            <div class="contactos-titulo">
                                Morada
                            </div>
                            <div class="contactos-texto">
                                Lorem ipsum dolor sit amet, 12 <br>
                                1234-543 Lorem
                            </div>
                        </div>

                        <div id="contacto-items" class="col-3">
                            <div class="contactos-titulo">
                                Telefone
                            </div>

                            <div class="contactos-texto">
                                +351 123 456 789
                            </div>
                        </div>

                        <div id="contacto-items" class="col-2">
                            <div class="contactos-titulo">
                                Email
                            </div>
                            <div class="contactos-texto">
                                lorem@lorem.pt
                            </div>
                        </div>


                        <div class="reclamacoes-ralc">
                            <a class="reclamacoes me-5" href=""> <img src="imgs/desktop/livroreclamacoes.svg"
                                    alt="Livro de Reclamações"></a>
                            <a class="ralc" href=""> <img src="imgs/desktop/ralc.svg"
                                    alt="Resolução Alternativa de Litígios de Consumo"></a>
                        </div>

                    </div>

                </div>

                <div class="col-5 redes-area">

                    <div class="redes-titulo t1">
                        Siga-me nas Redes Sociais
                    </div>

                    <div class="redes-icons">
                        <a class="icon-item me-4" href=""> <img src="imgs/desktop/instagram1.svg"
                                alt="Icon Instagram"></a>
                        <a class="icon-item me-4" href=""> <img src="imgs/desktop/facebook1.svg"
                                alt="Icon Facebook"></a>
                        <a class="icon-item me-4" href=""> <img src="imgs/desktop/linkedin1.svg"
                                alt="Icon LinkedIn"></a>
                    </div>

                    <div class="redes-copyright p">
                        Política de Cookies.<br>
                        Copyright &copy; 2021 Grupo MediaMaster. Todos os direitos reservados.
                    </div>

                </div>

            </div>


            <!-- MOBILE -->

            <div class="linha-rodape-mobile mx-auto d-flex d-md-none mt-5"></div>

            <div class="row d-flex justify-content-center text-center d-block d-md-none">

                <div class="col-12 mx-auto">

                    <div class="row">

                        <div id="rodape-titulo" class="col-12 t1">Contactos</div>

                    </div>

                    <div id="rodape-contactos" class="row">

                        <div id="contacto-items" class="col-12">
                            <div class="contactos-titulo">
                                Morada
                            </div>
                            <div class="contactos-texto">
                                Lorem ipsum dolor sit amet, 12 <br>
                                1234-543 Lorem
                            </div>
                        </div>

                        <div id="contacto-items" class="col-12">
                            <div class="contactos-titulo">
                                Telefone
                            </div>

                            <div class="contactos-texto">
                                +351 123 456 789
                            </div>
                        </div>

                        <div id="contacto-items" class="col-12">
                            <div class="contactos-titulo">
                                Email
                            </div>
                            <div class="contactos-texto">
                                lorem@lorem.pt
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-12 redes-area">

                    <div class="redes-titulo t1">
                        Siga-me nas Redes Sociais
                    </div>

                    <div class="redes-icons">
                        <a class="icon-item me-4" href=""> <img src="imgs/desktop/instagram1.svg"
                                alt="Icon Instagram"></a>
                        <a class="icon-item me-4" href=""> <img src="imgs/desktop/facebook1.svg"
                                alt="Icon Facebook"></a>
                        <a class="icon-item me-4" href=""> <img src="imgs/desktop/linkedin1.svg"
                                alt="Icon LinkedIn"></a>
                    </div>

                </div>

                <div class="reclamacoes-ralc">
                    <a class="reclamacoes me-5" href=""> <img src="imgs/desktop/livroreclamacoes.svg"
                            alt="Livro de Reclamações"></a>
                    <a class="ralc" href=""> <img src="imgs/desktop/ralc.svg"
                            alt="Resolução Alternativa de Litígios de Consumo"></a>
                </div>

                <div class="col-9 redes-copyright p">
                    Política de Cookies.<br>
                    Copyright &copy; 2021 Grupo MediaMaster. Todos os direitos reservados.
                </div>

            </div>

        </footer>
    </body>

</html>