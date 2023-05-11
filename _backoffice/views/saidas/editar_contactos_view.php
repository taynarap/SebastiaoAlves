<main>
    <div class="container-fluid caixa">
        <div class="row justify-content-center">
            <div class="col-12 p-4">
                <?php if (!isset($_POST["editar"])) : ?>
                    <div class="t1 mb-3">Editar Contactos</div>

                    <form action="" method="POST">
                        <input type="hidden" name="editar" value="<?= $id; ?>">
                        <p class="titulo">Telefone</p>
                        <input class="mb-3 w-75" type="text" name="telefone" value="<?= $contactos["telefone"]; ?>">
                        <br>
                        <p class="titulo">Morada</p>
                        <input class="mb-3 w-75" type="text" name="morada" value="<?= $contactos["morada"]; ?>">
                        <br>
                        <p class="titulo">Email</p>
                        <input class="mb-3 w-75" type="text" name="email" value="<?= $contactos["email"]; ?>">
                        <br>
                        <p class="titulo">Horário</p>
                        <input class="mb-3 w-75" type="text" name="horario" value="<?= $contactos["horario"]; ?>">
                        <br>
                        <br>
                        <input class="btn" type="submit" value="EDITAR">

                    </form>

                <?php else : ?>

                    <div class="t1">Contactos editados com sucesso!</div>

                    <a href="<?= $url_backoffice; ?>contactos">
                        <button class="btn mt-3">VOLTAR</button>
                    </a>

                <?php endif; ?>

            </div>
        </div>
    </div>
</main>