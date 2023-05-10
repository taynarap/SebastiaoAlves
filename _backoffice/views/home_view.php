<main>
    <div class="container-fluid caixa">
        <div class="row justify-content-center">

            <div class="col-12 p-4">

                <div class="t1 mb-3">Imagem do autor da página Home</div>

                <img src="<?= $home["img_autor"]; ?>" alt="">

                <hr>

                <div class="t1 mb-3">Texto do "Últimos Livros" da página Home</div>

                <p><?= $home["texto_ultimos_livros"]; ?></p>

                <hr>

                <a href="<?= $url_backoffice; ?>editarHome">
                    <button class="btn">EDITAR HOME</button>
                </a>

            </div>

        </div>
    </div>
</main>