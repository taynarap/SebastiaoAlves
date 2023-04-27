<?php

require_once("GLOBAIS.php");

$pagina_atual = "home";

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
        <link rel="stylesheet" href="css/home.css">

        <!--JQUERY-->
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"
            integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    </head>

    <body class="px-0">

        <!-- CABEÇALHO  -->
        <?php require("componentes/header.php"); ?>

        <!-- HOME  -->

        <!-- BEM-VINDO AUTOR  -->

        <div id="bemvindo-area" class="container-fluid">
            <div id="bemvindo-caixa" class="row offset-md-1 shadow-sm">

                <div class="col-auto">
                    <img id="bemvindo-img" src="imgs/desktop/FOTO-editada.jpg" alt="Foto de Sebastião Alves">
                </div>

                <div class="col-md col-12 bemvindo-texto mx-md-5  px-0">
                    <div class="bemvindo-titulo t1">Bem-Vindo ao Meu Website</div>

                    <div class="bemvindo-paragrafo p">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, aliquid sequi! A, fugiat
                        explicabo aspernatur aliquid minus, necessitatibus voluptate quis quos deleniti tenetur fuga,
                        illum nisi eligendi vel pariatur modi perferendis accusantium. Suscipit ex odio quo culpa natus
                        molestiae, incidunt aliquam enim omnis iure harum, minus doloribus dignissimos doloremque
                        nesciunt quia nam repellendus? Ratione doloribus inventore aspernatur dolore. Alias repudiandae
                        saepe laborum aspernatur, facere iure labore eligendi ipsa non enim cum quibusdam, quia eos?
                        Quam, molestiae sint eaque distinctio aperiam, nesciunt, qui minus tempore magnam officia
                        maiores? Sapiente debitis dicta tempora, iure explicabo incidunt aliquid tempore, illo dolorem
                        recusandae, ratione adipisci beatae harum expedita ab distinctio a placeat. Dolorum illum
                        officiis fuga fugiat laboriosam soluta earum ducimus labore, a culpa placeat, natus nam dolores
                        suscipit voluptatibus cum similique at quidem aspernatur assumenda. Sint, maiores repellendus
                        omnis praesentium obcaecati architecto cupiditate temporibus ea fugiat natus iusto doloribus
                        amet ipsum consequuntur modi mollitia?
                    </div>

                    <a href="autor.html">
                        <button class="btn-sabermais bemvindo-btn"></button>
                    </a>

                </div>
            </div>
        </div>




        <!-- ULTIMOS LIVROS  -->
        <div class="container-fluid">
            <div id="ultimoslivros-area" class="row">
                <div class="col-12 col-sm">
                    <div id="ultimoslivros-titulo" class="t1">Últimos Livros</div>
                    <div id="ultimoslivros-texto" class="p">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam distinctio inventore aliquid
                        doloremque qui earum beatae,
                        culpa eaque maiores nemo quasi vero optio quaerat voluptates dolorum sapiente repellendus?
                        Accusamus inventore quidem
                        distinctio adipisci at molestias doloremque architecto aspernatur amet atque! Cumque veritatis
                        ratione illo
                        consequuntur, numquam, quos ducimus minima beatae molestiae, a in odit nostrum? Voluptate fugiat
                        debitis assumenda,
                        perferendis reiciendis enim ipsa magni accusantium saepe recusandae, quisquam sequi. Animi, a.
                        Culpa quasi quam
                        inventore, repellat quibusdam quia asperiores voluptates reiciendis optio repellendus molestias
                        beatae architecto,
                        voluptatem dignissimos provident doloribus! Deleniti velit autem perspiciatis vitae. Vel ad
                        nobis accusantium unde sunt
                        neque ipsam voluptatem. Assumenda soluta inventore temporibus nisi ex.
                    </div>
                </div>
            </div>
        </div>

        <!-- IMAGENS LIVROS EM DESTAQUE -->

        <div class="container">
            <div id="destaques-area" class="row d-flex justify-content-center mx-auto gap-5 gap-md-0">

                <div class="col-12 col-12 d-flex justify-content-center gap-4 flex-wrap">

                    <div class="card">
                        <img src="imgs/desktop/livro1.jpg" class="card-img-top" alt="Livro Senhora do Amor e da Guerra">
                        <div class="card-body">
                            <h5 id="destaques-titulo" class="card-title t1">Senhora do Amor e da Guerra</h5>
                            <p id="destaques-categoria" class="card-text">Novidade</p>
                            <p id="destaques-paragrafo" class="card-text p">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Animi numquam ad maxime accusamus voluptatibus error molestiae at.
                                doloribus voluptatem sequi quibusdam!</p>
                            <div class="destaques-botao">
                                <button class="btn-sabermais"></button>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <img src="imgs/desktop/livro2.jpg" class="card-img-top"
                            alt="Livro O Velho que Pensava que Fugia">
                        <div class="card-body">
                            <h5 id="destaques-titulo" class="card-title t1">O Velho que Pensava que Fugia</h5>
                            <p id="destaques-categoria" class="card-text">Mais Vendido</p>
                            <p id="destaques-paragrafo" class="card-text p">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Reprehenderit
                                cupiditate repellat eos. Tempora dicta similique debitis nostrum deleniti iste ducimus
                                sit
                                illo!</p>
                            <div class="destaques-botao">
                                <button class="btn-sabermais"></button>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="imgs/desktop/livro3.jpg" class="card-img-top" alt="Livro Coleccionador de Amnésias">
                        <div class="card-body">
                            <h5 id="destaques-titulo" class="card-title t1">Coleccionador de Amnésias</h5>
                            <p id="destaques-categoria" class="card-text">Em Promoção</p>
                            <p id="destaques-paragrafo" class="card-text p">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Officia aut iste quo rem laudantium odio suscipit cupiditate, aperiam
                                facilis, cum quis neque natus error.</p>
                            <div class="destaques-botao">
                                <button class="btn-sabermais"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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