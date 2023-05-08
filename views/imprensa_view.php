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

                </div>
            </div>
        </div>

        <div class="container-fluid caixa-separadora"></div>
    <?php endforeach; ?>

    <!-- <?php require_once("templates/paginacao.php"); ?> -->

    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item setas s-esquerda me-5"><img src="imgs/desktop/setaesquerda1.svg" onmouseover="this.src='imgs/desktop/setaesquerda2.svg'" onmouseout="this.src='imgs/desktop/setaesquerda1.svg'" alt="Página Anterior"></li>
            <li class="page-item"><a class="page-link num me-2 active" href="#">1</a></li>
            <li class="page-item"><a class="page-link num me-2" href="#">2</a></li>
            <li class="page-item"><a class="page-link num" href="#">3</a></li>
            <li class="page-item setas s-direita ms-5"><img src="imgs/desktop/setadireita1.svg" onmouseover="this.src='imgs/desktop/setadireita2.svg'" onmouseout="this.src='imgs/desktop/setadireita1.svg'" alt="Página Seguinte"></li>
        </ul>
    </nav>

</main>