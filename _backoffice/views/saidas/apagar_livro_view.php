<main>
    <div class="container-fluid caixa">
        <div class="row justify-content-center">
            <div class="col-12 p-4">

                <?php if (!isset($_POST["apagar"])) : ?>

                    <form action="" method="POST">

                        <div class="t1">Tem certeza que desejas apagar o livro (<?= $id; ?>)?</div>

                        <button class="btn mt-2" name="apagar" value="<?= $id; ?>">SIM</button>

                        <a href="<?= $url_backoffice; ?>livros">
                            <button class="btn mt-2" type="button">NÃO</button>
                        </a>

                    </form>

                <?php else : ?>

                    <div class="t1">Livro apagado com sucesso!</p>

                        <a href="<?= $url_backoffice; ?>livros">
                            <button class="btn mt-2">VOLTAR</button>
                        </a>

                    <?php endif; ?>

                    </div>
            </div>
        </div>
</main>