<main>
    <div class="container-fluid caixa">
        <div class="row justify-content-center">
            <div class="col-12 p-4">
                <?php if (!isset($_POST["editar"])) : ?>
                    <div class="t1">Editar Livro (<?= $id; ?>)</div>

                    <a target="_blank" href="<?= $url_base; ?>filemanager/tinyfilemanager.php">
                        <button>Buscar Link de Imagem</button>
                    </a>

                    <form action="" method="POST">
                        <br>
                        <input type="hidden" name="editar" value="<?= $id; ?>">
                        <input class="mb-2 w-75" type="text" name="imagem" value="<?= $livro_especifico["imagem"]; ?>">
                        <br>
                        <input class="mb-2 w-75" type="text" name="titulo" value="<?= $livro_especifico["titulo"]; ?>">
                        <br>
                        <textarea class="mb-3 w-50" maxlength="10" id="texto" name="texto" value="<?= $livro_especifico["texto"]; ?>"></textarea>
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

                    <div class="t1">Livro editado com sucesso!</div>

                    <a href="<?= $url_backoffice; ?>livros">
                        <button class="btn mt-3">VOLTAR</button>
                    </a>

                <?php endif; ?>

            </div>
        </div>
    </div>
</main>