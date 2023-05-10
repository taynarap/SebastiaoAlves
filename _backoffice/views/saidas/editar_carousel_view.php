<main>
    <div class="container-fluid caixa">
        <div class="row justify-content-center">
            <div class="col-12 p-4">
                <?php if (!isset($_POST["editar"])) : ?>
                    <form action="" method="POST">

                        <div class="t1">Editar Carousel Item (<?= $id; ?>)</div>
                        <br>
                        <input type="hidden" name="editar" value="<?= $id; ?>">
                        <input class="mb-2 w-75" type="text" name="img_desktop" value="<?= $carousel_especifico["img_desktop"]; ?>">
                        <br>
                        <input class="mb-2 w-75" type="text" name="img_mobile" value="<?= $carousel_especifico["img_mobile"]; ?>">
                        <br>
                        <input class="mb-2 w-75" type="text" name="titulo" value="<?= $carousel_especifico["titulo"]; ?>">
                        <br>
                        <input class="mb-2 w-75" type="text" name="texto" value="<?= $carousel_especifico["texto"]; ?>">
                        <br>
                        <input class="mb-2 w-75" type="text" name="saber_mais" value="<?= $carousel_especifico["saber_mais"]; ?>">
                        <br>
                        <input class="btn" type="submit" value="EDITAR">

                    </form>

                <?php else : ?>

                    <div class="t1">Carousel editado com sucesso!</div>

                    <a href="<?= $url_backoffice; ?>carousel">
                        <button class="btn mt-3">VOLTAR</button>
                    </a>

                <?php endif; ?>

            </div>
        </div>
    </div>
</main>