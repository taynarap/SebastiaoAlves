
<main>
    <div class="container-fluid caixa">

        <div class="row d-flex justify-content-center">

            <div class="col-12 mt-4 p-4">
                <strong>Bem-vindo(a) <?= ucfirst($_SESSION["usuario"]["login"]); ?>!</strong>

                <p class="mt-2">Data do último acesso: <?= $_SESSION["ultimo_acesso"]; ?></p>
            </div>
        </div>

    </div>
</main>