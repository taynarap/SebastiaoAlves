<main>
    <!-- BEM-VINDO AUTOR  -->

    <div id="bemvindo-area" class="container-fluid">
        <div id="bemvindo-caixa" class="row offset-md-1 shadow-sm">

            <div class="col-auto">
                <img id="bemvindo-img" src="<?= $home["img_autor"]; ?>" alt="Foto de Sebastião Alves">
            </div>

            <div class="col-md col-10 bemvindo-texto mx-md-5 mt-5 px-0">
                <div class="bemvindo-titulo t1">Bem-Vindo ao Meu Website</div>

                <div class="bemvindo-paragrafo p">
                    <?= substr($autor["texto"], 0, 1100); ?> ...
                </div>

                <div>
                    <a href="autor">
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
                        <?= $home["texto_ultimos_livros"]; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- IMAGENS LIVROS EM DESTAQUE -->

        <div class="container">
            <div id="destaques-area" class="row d-flex justify-content-center mx-auto gap-5 gap-md-5">

                <?php for($i = 0; $i <= 2; $i++) : ?>
                    <?php $l = $livro_destaque[$i]; ?>
                    <div class="card">
                        <img class="destaques-img" src="<?= $l["imagem"]; ?>" alt="Destaque">
                        <div class="card-body">
                            <div id="destaques-titulo"><?= $l["titulo"]; ?></div>
                            <div id="destaques-categoria" class="mt-2"><?= $l["observacao"]; ?></div>
                            <div id="destaques-paragrafo" class="mt-2">
                                <?= substr($l["texto"], 0, 100); ?>...
                            </div>
                            <div class="destaques-botao">
                                <a href="<?= $url_base; ?>livro/<?= $l["id"]; ?>">
                                    <div class="btn-sabermais"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>

            </div>
        </div>
    </div>
</main>