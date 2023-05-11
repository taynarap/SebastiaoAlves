<main>
    <div class="container-fluid caixa">
        <div class="row justify-content-center">

            <div class="col-12 p-4">

                <div class="t1 mb-3">Instagram</div>

                <p><?= $redes["instagram"]; ?></p>

                <hr>

                <div class="t1 mb-3">Facebook</div>

                <p><?= $redes["facebook"]; ?></p>

                <hr>

                <div class="t1 mb-3">LinkedIn</div>

                <p><?= $redes["linkedin"]; ?></p>

                <hr>

                <a href="<?= $url_backoffice; ?>editarRedes">
                    <button class="btn">EDITAR REDES SOCIAIS</button>
                </a>

            </div>

        </div>
    </div>
</main>