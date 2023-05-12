<main>
    <div class="container-fluid caixa">
        <div class="row justify-content-center">
            <div class="col-12 p-4">
                <?php if (!isset($_POST["editar"])) : ?>
                    <div class="t1">Editar Destaque (<?= $id; ?>)</div>

                    <form action="" method="POST">
                        <br>
                        <input type="hidden" name="editar" value="<?= $id; ?>">
                        <div class="titulo mb-2">LIVRO DO DESTAQUE</div>
                        <select name="destaque">
                            <?php foreach ($livros as $l) : ?>
                                <option value="<?= $l["id"]; ?>" <?= ($destaque_especifico["id"] == $l["id"]) ? "selected" : ""; ?>><?= $l["titulo"]; ?></option>
                            <?php endforeach; ?>
                        </select>

                        <br>
                        <div class="titulo mt-4 mb-2">OBSERVAÇÃO DO LIVRO</div>
                        <input class="mb-3 mb-2 w-50" type="text" name="observacao" value="<?= $destaque_especifico["observacao"]; ?>">
                        <br>
                        <input class="btn" type="submit" value="EDITAR">

                    </form>

                <?php else : ?>

                    <div class="t1">Destaque editado com sucesso!</div>

                    <a href="<?= $url_backoffice; ?>destaques">
                        <button class="btn mt-3">VOLTAR</button>
                    </a>

                <?php endif; ?>

            </div>
        </div>
    </div>
</main>