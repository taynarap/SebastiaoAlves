<!-- DESKTOP  -->

<!-- BARRA DE MENUS -->
<div id="barra-menus" class="container-fluid d-md-block d-none">


    <div class="linha-rodape mx-auto"></div>

    <div id="menu-rodape-area">

        <a class="menu-rodape active" href="">HOME</a>
        <a class="menu-rodape" href="autor">AUTOR</a>
        <a class="menu-rodape" href="livro">LIVROS</a>
        <a class="menu-rodape" href="imprensa">IMPRENSA</a>
        <a class="menu-rodape" href="contactos">CONTACTOS</a>

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
                    <a class="reclamacoes me-5" href=""> <img src=<?= $url_base ."/public/imgs/desktop/livroreclamacoes.svg"; ?>
                            alt="Livro de Reclamações"></a>
                    <a class="ralc" href=""> <img src=<?= $url_base ."/public/imgs/desktop//ralc.svg"; ?>
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

        <div class="col-12 mx-auto <?=($pagina_atual == "contactos") ? "d-none" : ""; ?>">

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