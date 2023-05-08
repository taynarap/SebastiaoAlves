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