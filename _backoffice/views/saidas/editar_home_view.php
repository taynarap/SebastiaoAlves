<main>
    <div class="container-fluid caixa">
        <div class="row justify-content-center">
            <div class="col-12 p-4">
                <?php if (!isset($_POST["editar"])) : ?>
                    <div class="t1">Editar Home</div>

                    <a target="_blank" href="<?= $url_base; ?>filemanager/tinyfilemanager.php">
                        <button>Buscar Link de Imagem</button>
                    </a>

                    <form action="" method="POST">
                        <input type="hidden" name="editar" value="<?= $id; ?>">
                        <input class="mb-2 w-75" type="text" name="img_autor" value="<?= $home["img_autor"]; ?>">
                        <br>
                        <textarea class="mb-3 w-50" maxlength="10" id="texto" name="texto" value="<?= $home["texto_ultimos_livros"]; ?>"></textarea>
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#texto'))
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>
                        <br>
                        <input class="btn" type="submit" value="EDITAR">

                    </form>

                <?php else : ?>

                    <div class="t1">Home editada com sucesso!</div>

                    <a href="<?= $url_backoffice; ?>home">
                        <button class="btn mt-3">VOLTAR</button>
                    </a>

                <?php endif; ?>

            </div>
        </div>
    </div>
</main>