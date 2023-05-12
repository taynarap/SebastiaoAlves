<main>
    <div class="container-fluid caixa">
        <div class="row justify-content-center">
            <div class="col-12 p-4">
                <?php if (!isset($_POST["editar"])) : ?>
                    <div class="t1 mb-3">Editar Livro - (<?= $livro_especifico["titulo"]; ?>)</div>

                    <a target="popup" href="<?= $url_base; ?>filemanager/tinyfilemanager.php" onclick="window.open('<?= $url_base; ?>filemanager/tinyfilemanager.php', 'popup', 'width=750,height=550'); return false;">
                        <button class="btn">Buscar Link de Imagem</button>
                    </a>

                    <form action="" method="POST">
                        <input type="hidden" name="editar" value="<?= $id; ?>">
                        <input class="mb-3 mt-2 w-75" type="text" name="imagem" value="<?= $livro_especifico["imagem"]; ?>">
                        <br>
                        <input class="mb-3 w-75" type="text" name="titulo" value="<?= $livro_especifico["titulo"]; ?>">
                        <br>
                        <input class="mb-3 w-75" type="text" name="observacao" value="<?= $livro_especifico["observacao"]; ?>">
                        <br>
                        <textarea maxlength="10" id="texto" name="texto"><?= $livro_especifico["texto"]; ?></textarea>
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#texto'))
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>
                        <br>
                        <label class="titulo" for="destaques">Destaque na página Home: </label>
                        <br>
                        <select name="destaques">
                            <option value="0" <?= ($livro_especifico["destaques"] == 0) ? "selected" : ""; ?>>Não</option>
                            <option value="1" <?= ($livro_especifico["destaques"] == 1) ? "selected" : ""; ?>>Sim</option>
                        </select>

                        <br>
                        <input class="btn mt-3" type="submit" value="EDITAR">
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