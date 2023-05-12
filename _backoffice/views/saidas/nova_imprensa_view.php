<main>
    <div class="container-fluid caixa">
        <div class="row justify-content-center">
            <div class="col-12 p-4">
                <?php if (!isset($_POST["titulo"])) : ?>

                    <div class="t1 mb-3">Criar Nova Imprensa</div>

                    <a target="popup" href="<?= $url_base; ?>filemanager/tinyfilemanager.php" onclick="window.open('<?= $url_base; ?>filemanager/tinyfilemanager.php', 'popup', 'width=750,height=550'); return false;">
                        <button class="btn">Buscar Link de Imagem</button>
                    </a>

                    <form action="" method="POST">

                        <input class="mb-3 mt-3 w-50" type="text" name="imagem" require placeholder="Imagem">
                        <br>

                        <input class="mb-3 w-50" type="text" name="titulo" require placeholder="Título">
                        <br>

                        <input class="mb-3 w-50" type="text" name="data_publicacao" require placeholder="Data da Publicação">
                        <br>

                        <textarea class="mb-3 w-50" maxlength="10" id="texto" name="texto" require placeholder="Texto"></textarea>
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#texto'))
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>
                        <br>
                        <input class="btn mt-3" type="submit" value="Adicionar">

                    </form>

                <?php else : ?>

                    <div class="t1">Imprensa criada com sucesso!</div>

                    <a href="<?= $url_backoffice; ?>imprensa">
                        <button class="btn mt-3">VOLTAR</button>
                    </a>

                <?php endif; ?>

            </div>
        </div>
    </div>
</main>