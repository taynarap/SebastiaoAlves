<main>
    <div class="container-fluid caixa">
        <div class="row justify-content-center">
            <div class="col-12 p-4">
                <?php if (!isset($_POST["titulo"])) : ?>

                    <div class="t1 mb-3">Criar Novo Carousel</div>

                    <a target="_blank" href="<?= $url_base; ?>filemanager/tinyfilemanager.php">
                        <button>Gestor de Ficheiros</button>
                    </a>

                    <form action="" method="POST">

                        <input class="mb-3 mt-3 w-50" type="text" name="img_desktop" require placeholder="Imagem para Desktop">
                        <br>

                        <input class="mb-3 w-50" type="text" name="img_mobile" require placeholder="Imagem para Mobile">
                        <br>

                        <input class="mb-3 w-50" type="text" name="titulo" require placeholder="Título">
                        <br>

                        <input class="mb-3 w-50" type="text" name="observacao" require placeholder="Observação">
                        <br>

                        <textarea class="mb-3 w-50" maxlength="10" id="texto" name="texto" require placeholder="Texto do Carousel"></textarea>
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#texto'))
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>
                        <br>
                        <input class="mb-3 w-50" type="text" name="saber_mais" require placeholder="Link Saber Mais">
                        <br>
                        <input class="btn mt-3" type="submit" value="Adicionar">

                    </form>

                <?php else : ?>

                    <div class="t1">Carousel criado com sucesso!</div>

                    <a href="<?= $url_backoffice; ?>carousel">
                        <button class="btn mt-3">VOLTAR</button>
                    </a>

                <?php endif; ?>

            </div>
        </div>
    </div>
</main>