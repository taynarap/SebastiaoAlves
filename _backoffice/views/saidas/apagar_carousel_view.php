<main>
    <div class="container-fluid caixa">
        <div class="row justify-content-center">
            <div class="col-12 p-4">

                <?php if (!isset($_POST["apagar"])) : ?>

                    <form action="" method="POST">

                        <div class="t1">Tem certeza que desejas apagar o item (<?= $id; ?>)?</div>

                        <button class="btn" name="apagar" value="<?= $id; ?>">SIM</button>

                        <a href="<?= $url_backoffice; ?>carousel">
                            <button class="btn" type="button">NÃO</button>
                        </a>

                    </form>

                <?php else : ?>

                    <div class="t1">Carousel apagado com sucesso!</p>

                        <a href="<?= $url_backoffice; ?>carousel">
                            <button class="btn mt-3">VOLTAR</button>
                        </a>

                    <?php endif; ?>

                    </div>
            </div>
        </div>
</main>