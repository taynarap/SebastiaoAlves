<?php

//Importacoes
require_once("requisitos.php");

//Globais
$contactos = getContactos();
$redes = getRedes();

?>

<!-- DESKTOP  -->

<!-- BARRA DE MENUS -->
<div id="barra-menus" class="container-fluid d-md-block d-none">


    <div class="linha-rodape mx-auto"></div>

    <div id="menu-rodape-area">

        <a class="menu-rodape <?= ($rotas[0] == "") ? "active" : ""; ?>" href="<?= $url_base; ?> ">HOME</a>
        <a class="menu-rodape <?= ($rotas[0] == "autor") ? "active" : ""; ?>" href="<?= $url_base; ?>autor">AUTOR</a>
        <a class="menu-rodape <?= ($rotas[0] == "livro") ? "active" : ""; ?>" href="#menu-principal" onclick="submenu()">LIVROS</a>
        <a class="menu-rodape <?= ($rotas[0] == "imprensa") ? "active" : ""; ?>" href="<?= $url_base; ?>imprensa">IMPRENSA</a>
        <a class="menu-rodape <?= ($rotas[0] == "contactos") ? "active" : ""; ?>" href="<?= $url_base; ?>contactos">CONTACTOS</a>

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
                    <a class="reclamacoes me-5" href=""> <img src=<?= $url_base . "/public/imgs/desktop/livroreclamacoes.svg"; ?> alt="Livro de Reclamações"></a>
                    <a class="ralc" href=""> <img src=<?= $url_base . "/public/imgs/desktop/ralc.svg"; ?> alt="Resolução Alternativa de Litígios de Consumo"></a>
                </div>

            </div>

        </div>

        <div class="col-5 redes-area">

            <div class="redes-titulo t1">
                Siga-me nas Redes Sociais
            </div>

            <div class="redes-icons mt-3">
                <a class="icon-item me-4" href="<?= $redes["instagram"]; ?>">
                    <img src=<?= $url_base . "/public/imgs/desktop/instagram1.svg"; ?> alt="Instagram" onmouseover="instaHover(this)" onmouseout="instaOut(this)">
                </a>
                <a class="icon-item me-4" href="<?= $redes["facebook"]; ?>">
                    <img src=<?= $url_base . "/public/imgs/desktop/facebook1.svg"; ?> alt="Instagram" onmouseover="faceHover(this)" onmouseout="faceOut(this)">
                </a>
                <a class="icon-item me-4" href="<?= $redes["linkedin"]; ?>">
                    <img src=<?= $url_base . "/public/imgs/desktop/linkedin1.svg"; ?> alt="Instagram" onmouseover="linkHover(this)" onmouseout="linkOut(this)">
                </a>
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

        <div class="col-12 mx-auto <?= ($rotas[0] == "contactos") ? "d-none" : ""; ?>">

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

            <div class="redes-icons mt-3">
                <a class="icon-item me-4" href="<?= $redes["instagram"]; ?>">
                    <img src=<?= $url_base . "/public/imgs/desktop/instagram1.svg"; ?> alt="Instagram" onmouseover="instaHover(this)" onmouseout="instaOut(this)">
                </a>
                <a class="icon-item me-4" href="<?= $redes["facebook"]; ?>">
                    <img src=<?= $url_base . "/public/imgs/desktop/facebook1.svg"; ?> alt="Instagram" onmouseover="faceHover(this)" onmouseout="faceOut(this)">
                </a>
                <a class="icon-item me-4" href="<?= $redes["linkedin"]; ?>">
                    <img src=<?= $url_base . "/public/imgs/desktop/linkedin1.svg"; ?> alt="Instagram" onmouseover="linkHover(this)" onmouseout="linkOut(this)">
                </a>
            </div>

        </div>

        <div class="reclamacoes-ralc">
            <a class="reclamacoes me-5" href=""> <img src=<?= $url_base . "/public/imgs/desktop/livroreclamacoes.svg"; ?> alt="Livro de Reclamações"></a>
            <a class="ralc" href=""> <img src=<?= $url_base . "/public/imgs/desktop/ralc.svg"; ?> alt="Resolução Alternativa de Litígios de Consumo"></a>
        </div>

        <div class="col-9 redes-copyright p">
            Política de Cookies.<br>
            Copyright &copy; 2021 Grupo MediaMaster. Todos os direitos reservados.
        </div>

    </div>

</footer>
<script src="./public/js/funcoes.js"></script>
<script src="../public/js/main.js"></script>