<main>

    <!-- AREA DO TITULO -->

    <div id="area-titulo" class="container-fluid">
        <div id="titulo-caixa" class="row offset-md-1 shadow">

            <div class="col menu-selecionado">
                <div id="titulo" class="t1">Autor</div>
                <div id="subtitulo" class="t1">Sobre Mim</div>
            </div>
        </div>
    </div>

    <!-- AREA TEXTO -->

    <div id="area-texto" class="container">
        <div id="texto-caixa" class="row">

            <div class="col-12">

                <img class="d-block mx-auto foto-autor" src="<?= $autor["imagem"]; ?>" alt="Fotografia Sebastião Alves">

                <p class="p paragrafo px-3 px-sm-1">
                    <?= $autor["texto"]; ?>
                </p>

                <a class="d-flex d-sm-none justify-content-center" href="...">
                    <button class="btn-vermais btn-vermais-autor"></button>
                </a>


                <a class="d-flex justify-content-center" href="index.html">
                    <button class="btn-voltar btn-voltar-autor"></button>
                </a>

            </div>
        </div>
    </div>

</main>