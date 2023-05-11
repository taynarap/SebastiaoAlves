<main>
    <div class="container-fluid caixa">
        <div class="row justify-content-center">
            <div class="col-12 p-4">
                <?php if (!isset($_POST["editar"])) : ?>
                    <div class="t1 mb-3">Editar Redes Sociais</div>

                    <form action="" method="POST">
                        <input type="hidden" name="editar" value="<?= $id; ?>">
                        <p class="titulo">Instagram</p>
                        <input class="mb-3 w-75" type="text" name="instagram" value="<?= $redes["instagram"]; ?>">
                        <br>
                        <p class="titulo">Facebook</p>
                        <input class="mb-3 w-75" type="text" name="facebook" value="<?= $redes["facebook"]; ?>">
                        <br>
                        <p class="titulo">LinkedIn</p>
                        <input class="mb-3 w-75" type="text" name="linkedin" value="<?= $redes["linkedin"]; ?>">
                        <br>
                        <br>
                        <input class="btn" type="submit" value="EDITAR">

                    </form>

                <?php else : ?>

                    <div class="t1">Redes Sociais editadas com sucesso!</div>

                    <a href="<?= $url_backoffice; ?>redes">
                        <button class="btn mt-3">VOLTAR</button>
                    </a>

                <?php endif; ?>

            </div>
        </div>
    </div>
</main>