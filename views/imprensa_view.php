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
    <?php foreach ($imprensa as $i) : ?>
        <div id="noticia-area" class="container">
            <div id="noticia-caixa" class="row d-flex justify-content-center">
                <div class="col-10">

                    <div class="row">
                        <div class="t1 px-0">
                            Lançamento | <?= $i["titulo"]; ?>
                        </div>

                        <div class="linha-lancamento"></div>

                    </div>

                    <div class="row d-flex justify-content-end data-publicacao">
                        <?= $i["data_publicacao"]; ?>
                    </div>

                    <div id="livro-img">
                        <img class="w-100" src="<?= $i["imagem"]; ?>" alt="Livro Senhora do Amor e da Guerra">
                    </div>

                    <div class="row m-0 p-0 d-flex flex-row justify-content-end">
                        <div class="col-12 p m-0  pt-4">
                            <?= $i["texto"]; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid caixa-separadora"></div>
    <?php endforeach; ?>

    <?php require_once("templates/paginacao.php"); ?>

</main>