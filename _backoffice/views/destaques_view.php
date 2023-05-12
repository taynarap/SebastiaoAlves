<main>
    <div class="container-fluid caixa">
        <div class="row justify-content-center table-responsive">
            <table class="col-12 table table-striped mb-4 align-middle">
                <thead>
                    <tr>
                        <th>IMAGEM</th>
                        <th>TÍTULO</th>
                        <th>OBSERVAÇÃO</th>
                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($destaques as $d) : ?>

                        <tr>
                            <td><img src="<?= $d["imagem"]; ?>" style="width: 100px"></td>
                            <td><?= $d["titulo"]; ?></td>
                            <td><?= $d["observacao"]; ?></td>

                            <td>
                                <a href="<?= $url_backoffice; ?>editarDestaques/<?= $d["id"] ?>">
                                    <button class="btn mb-2">Editar</button>
                                </a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</main>