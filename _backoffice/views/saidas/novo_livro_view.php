<main>
    <div class="container-fluid caixa">
        <div class="row justify-content-center">
            <div class="col-12 p-4">
                <?php if (!isset($_POST["titulo"])) : ?>

                    <div class="t1 mb-3">Criar Novo Livro</div>

                    <a target="popup" href="<?= $url_base; ?>filemanager/tinyfilemanager.php" onclick="window.open('<?= $url_base; ?>filemanager/tinyfilemanager.php', 'popup', 'width=750,height=550'); return false;">
                        <button class="btn">Buscar Link de Imagem</button>
                    </a>

                    <form action="" method="POST">
                        <input class="mb-3 mt-3 w-50" type="text" name="imagem" required placeholder="Imagem">
                        <br>

                        <input class="mb-3 w-50" type="text" name="titulo" required placeholder="Título">
                        <br>

                        <input class="mb-3 w-50" type="text" name="observacao" placeholder="Observação">
                        <br>

                        <textarea class="mb-3" maxlength="10" id="texto" name="texto" placeholder="Texto"></textarea>
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
                            <option value="0">Não</option>
                            <option value="1">Sim</option>
                        </select>

                        <br>
                        <input class="btn mt-3" type="submit" value="Adicionar">

                    </form>

                <?php else : ?>

                    <div class="t1">Livro criado com sucesso!</div>

                    <a href="<?= $url_backoffice; ?>livros">
                        <button class="btn mt-3">VOLTAR</button>
                    </a>

                <?php endif; ?>

            </div>
        </div>
    </div>
</main>