<main>
    <div class="container-fluid caixa">
        <div class="row justify-content-center">

            <div class="col-12 p-4">

                <?php if (!isset($_POST["editar"])) : ?>
                    <div class="t1 mb-3">Alterar Senha</div>

                    <form action="" method="POST">

                        <input type="hidden" name="editar" value="<?= $usuario["id"] ?>">
                        <input class="mb-3" type="password" name="senha" placeholder="Senha Actual" required="required">
                        <br>
                        <input class="mb-3" type="password" name="nova_senha" placeholder="Nova Senha" required="required">
                        <br>
                        <input class="mb-3" type="password" name="conf_nova_senha" placeholder="Confirme Nova Senha" required="required">
                        <br>
                        <input class="btn" type="submit" value="EDITAR">

                    </form>

                <?php elseif ($_POST["nova_senha"] != $_POST["conf_nova_senha"]) : ?>

                    <div class="titulo">Os campos para a nova senha estão diferentes, tente novamente.</div>

                    <a href="<?= $url_backoffice; ?>configuracoes">
                        <button class="btn mt-3">VOLTAR</button>
                    </a>

                <?php elseif (password_verify($_POST["senha"], $usuario["senha"])) : ?>

                    <div class="t1">Senha alterada com sucesso!</div>

                    <a href="<?= $url_backoffice; ?>configuracoes">
                        <button class="btn mt-3">VOLTAR</button>
                    </a>

                <?php else : ?>
                    <div class="titulo text-danger">Senha atual incorrecta!</div>


                    <a href="<?= $url_backoffice; ?>inicio">
                        <?php session_destroy(); ?>
                        <button class="btn mt-3">VOLTAR</button>
                    </a>


                <?php endif; ?>
            </div>


        </div>
    </div>
</main>