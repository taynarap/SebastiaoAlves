<main id="corpo">

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

                <img class="d-block mx-auto foto-autor mb-4" src="<?= $autor["imagem"]; ?>" alt="Fotografia Sebastião Alves">

                <div id="textoCurto" class="px-3 px-sm-1 d-block d-sm-none texto">
                    <?= substr($autor["texto"], 0, 1000); ?>
                </div>

                <div id="textoCompleto" class="px-3 px-sm-1 d-none d-sm-block texto">
                    <?= $autor["texto"]; ?>
                </div>

                <div class="d-flex d-sm-none justify-content-center">
                    <button onclick="verMais()" id="btnvermais"></button>
                </div>

                <div class="d-flex justify-content-center">
                    <button onclick="verMais()" class="d-none" id="btnvermenos">Ver Menos</button>
                </div>

                <a class="d-flex btn-voltar-autor">
                    <button class="btn-voltar" onclick="history.back()"></button>
                </a>

            </div>
        </div>
    </div>

</main>