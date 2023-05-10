<main>
    <div class="container-fluid caixa mt-5">

        <div class="row d-flex justify-content-center">

            <div class="col-12 mt-4 p-4">

                <h3 class="t1">Login</h3>

                <?php if (isset($_POST["login"])) : ?>
                    <p class="text-danger">Login inválido, tente novamente.</p>
                <?php endif; ?>


                <form action="" method="POST">

                    <input type="text" name="login" placeholder="Login" required="required">
                    <br><br>
                    <input type="password" name="senha" placeholder="Senha" required="required">
                    <br><br>
                    <input class="btn" type="submit" value="ENTRAR">

                </form>
            </div>
        </div>
    </div>
</main>