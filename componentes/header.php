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
                                        Amor e DA Guerra</a>
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
            <button type="button" data-bs-target="#area-banner" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#area-banner" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#area-banner" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#area-banner" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="banner-imagem w-100" src="imgs/desktop/cabecalho1.jpg"
                    alt="Livro Senhora do Amor e da Guerra">
                <div class="carousel-caption d-none d-sm-block">
                    <p class="banner-novidade">Novidade</p>
                    <h5 class="banner-titulo">Senhora do Amor e da Guerra</h5>
                    <p class="banner-texto">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi
                        fuga excepturi consequatur, maxime eum sapiente a? Placeat, temporibus rem quas
                        recusandae, sapiente voluptas fugiat dignissimos fuga modi numquam sunt, culpa ex! Natus
                        dolor eveniet ducimus possimus mollitia nihil molestiae, porro dolore.</p>
                    <div class="banner-sabermais">
                        <button class="btn-sabermais"></button>
                    </div>
                </div>

            </div>
            <div class="carousel-item">
                <img class="banner-imagem w-100" src="imgs/desktop/cabecalho2.jpg"
                    alt="Livro O Caracol Estrábico">
                <div class="carousel-caption d-none d-sm-block">
                    <h5 class="banner-titulo">O Caracol Estrábico</h5>
                    <p class="banner-texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ducimus
                        ullam eos necessitatibus sequi aut enim accusamus! Quaerat vero eum quos eveniet nisi
                        tempora non qui natus officiis! Perferendis voluptas autem dolorem voluptatum inventore
                        aperiam cum cumque laborum.</p>
                    <div class="banner-sabermais">
                        <a href="Saber Mais - ">
                            <button class="btn-sabermais"></button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="banner-imagem w-100" src="imgs/desktop/cabecalho3.jpg"
                    alt="Livro O Coleccionador de Amnésias">
                <div class="carousel-caption d-none d-sm-block">
                    <h5 class="banner-titulo">O Coleccionador de Amnésias</h5>
                    <p class="banner-texto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem
                        molestias dolorum dolore veniam aspernatur, delectus commodi pariatur! Iure, maiores.
                        Assumenda deleniti inventore esse in voluptatem ut veritatis? Fugiat reiciendis fugit
                        dolore unde pariatur assumenda voluptatibus quas beatae illum, inventore!</p>
                    <div class="banner-sabermais">
                        <button class="btn-sabermais"></button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="banner-imagem w-100" src="imgs/desktop/cabecalho4.jpg"
                    alt="Livro O Velho que Pensava que Fugia">
                <div class="carousel-caption d-none d-sm-block">
                    <h5 class="banner-titulo">O Velho que Pensava que Fugia</h5>
                    <p class="banner-texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                        est cumque delectus, quis assumenda, labore quod architecto mollitia nobis molestias,
                        dolorem laborum? Nobis debitis perspiciatis quibusdam doloremque, tempora autem.
                        Laudantium, iste distinctio totam doloremque maiores nihil aspernatur unde vero?</p>
                    <div class="banner-sabermais">
                        <button class="btn-sabermais"></button>
                    </div>
                </div>
            </div>
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
                                aria-expanded="false" onclick="style">
                                Livros
                            </a>
                            <ul class="dropdown-menu my-4 shadow">
                                <li><a class="dropdown-item pb-2" href="senhora_amor_guerra.html">Senhora Do
                                        Amor e Da Guerra</a>
                                </li>
                                <li><a class="dropdown-item pb-2" href="#">O Caracol Estrábico</a></li>
                                <li><a class="dropdown-item pb-2" href="#">O Coleccionador de
                                        Amnésias</a></li>
                                <li><a class="dropdown-item" href="#">O Velho que Pensava que Fugia</a>
                                </li>
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
            <button type="button" data-bs-target="#area-banner-mobile" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#area-banner-mobile" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#area-banner-mobile" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#area-banner-mobile" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="banner-imagem" src="imgs/mobile/cabecalho1.jpg"
                    alt="Livro Senhora do Amor e da Guerra">
                <div class="carousel-caption">
                    <p class="banner-novidade">Novidade</p>
                    <h5 class="banner-titulo">Senhora do Amor e da Guerra</h5>
                    <p class="banner-texto">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi
                        fuga excepturi consequatur, maxime eum sapiente a? Placeat, temporibus rem quas
                        recusandae, sapiente voluptas fugiat dignissimos fuga modi numquam sunt, culpa ex! Natus
                        dolor eveniet ducimus possimus mollitia.</p>
                    <div class="banner-sabermais">
                        <button class="btn-sabermais"></button>
                    </div>
                </div>

            </div>
            <div class="carousel-item">
                <img class="banner-imagem" src="imgs/mobile/cabecalho2.jpg" alt="Livro O Caracol Estrábico">
                <div class="carousel-caption">
                    <h5 class="banner-titulo">O Caracol Estrábico</h5>
                    <p class="banner-texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ducimus
                        ullam eos necessitatibus sequi aut enim accusamus! Quaerat vero eum quos eveniet nisi
                        tempora non qui natus officiis! Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit. Quisquam, nisi!</p>
                    <div class="banner-sabermais">
                        <button class="btn-sabermais"></button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="banner-imagem" src="imgs/mobile/cabecalho3.jpg"
                    alt="Livro O Coleccionador de Amnésias">
                <div class="carousel-caption">
                    <h5 class="banner-titulo">O Coleccionador de Amnésias</h5>
                    <p class="banner-texto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem
                        molestias dolorum dolore veniam aspernatur, delectus commodi pariatur! Iure, maiores.
                        Assumenda deleniti inventore esse in voluptatem ut veritatis?</p>
                    <div class="banner-sabermais">
                        <button class="btn-sabermais"></button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="banner-imagem" src="imgs/mobile/cabecalho4.jpg"
                    alt="Livro O Velho que Pensava que Fugia">
                <div class="carousel-caption">
                    <h5 class="banner-titulo">O Velho que Pensava que Fugia</h5>
                    <p class="banner-texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                        est cumque delectus, quis assumenda, labore quod architecto mollitia nobis molestias,
                        dolorem laborum? Nobis debitis perspiciatis quibusdam doloremque, tempora autem.</p>
                    <div class="banner-sabermais">
                        <button class="btn-sabermais"></button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</header>