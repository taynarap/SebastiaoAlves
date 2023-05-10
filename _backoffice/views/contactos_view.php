<main>
    <div class="container-fluid caixa">
        <div class="row justify-content-center">

            <div class="col-12 p-4">

                <div class="t1 mb-3">Telefone</div>

                <p><?= $contactos["telefone"]; ?></p>

                <hr>

                <div class="t1 mb-3">Morada</div>

                <p><?= $contactos["morada"]; ?></p>

                <hr>

                <div class="t1 mb-3">Email</div>

                <p><?= $contactos["email"]; ?></p>

                <hr>

                <div class="t1 mb-3">Horário</div>

                <p><?= $contactos["horario"]; ?></p>

                <hr>

                <a href="#">
                    <button class="btn">EDITAR CONTACTOS</button>
                </a>

            </div>

        </div>
    </div>
</main>