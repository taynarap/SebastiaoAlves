<main>
    <div class="container-fluid caixa">
        <div class="row justify-content-center">

            <div class="col-12 p-4">

                <div class="t1 mb-3">Imagem do autor da página Autor</div>

                <img src="<?= $autor["imagem"]; ?>" alt="">

                <hr>

                <div class="t1 mb-3">Texto do "Últimos Livros" da página Autor</div>

                <p><?= $autor["texto"]; ?></p>

                <hr>

                <a href="#">
                    <button class="btn">EDITAR AUTOR</button>
                </a>

            </div>

        </div>
    </div>
</main>