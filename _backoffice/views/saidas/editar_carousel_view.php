<main>
    <div class="container-fluid caixa">
        <div class="row justify-content-center">
            <div class="col-12 p-4">
                <?php if (!isset($_POST["editar"])) : ?>
                    <div class="t1">Editar Carousel Item (<?= $id; ?>)</div>

                    <a target="popup" href="<?= $url_base; ?>filemanager/tinyfilemanager.php" onclick="window.open('<?= $url_base; ?>filemanager/tinyfilemanager.php', 'popup', 'width=750,height=550'); return false;">
                        <button class="btn mt-3">Buscar Link de Imagem</button>
                    </a>

                    <form action="" method="POST">
                        <input type="hidden" name="editar" value="<?= $id; ?>">
                        <input class="mb-2 mt-2 w-75" type="text" name="img_desktop" value="<?= $carousel_especifico["img_desktop"]; ?>">
                        <br>
                        <input class="mb-2 w-75" type="text" name="img_mobile" value="<?= $carousel_especifico["img_mobile"]; ?>">
                        <br>
                        <input class="mb-2 w-75" type="text" name="titulo" value="<?= $carousel_especifico["titulo"]; ?>">
                        <br>
                        <input class="mb-2 w-75" type="text" name="observacao" value="<?= $carousel_especifico["observacao"]; ?>">
                        <br>
                        <textarea class="mb-3 w-50" maxlength="10" id="texto" name="texto"><?= $carousel_especifico["texto"]; ?></textarea>
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#texto'))
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>
                        <br>
                        <input class=" mb-2 w-75" type="text" name="saber_mais" value="<?= $carousel_especifico["saber_mais"]; ?>">
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