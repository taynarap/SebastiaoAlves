<main>
    <div class="container-fluid caixa">
        <div class="row justify-content-center table-responsive">
            <table class="col-12 table table-striped mb-4 align-middle">
                <thead>
                    <tr>
                        <th>IMAGEM</th>
                        <th>TÍTULO</th>
                        <th>TEXTO</th>
                        <th>DATA PUBLICAÇÃO</th>
                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($imprensa as $i) : ?>

                        <tr>
                            <td><img src="<?= $i["imagem"]; ?>" style="max-width: 200px; max-height: 150px"></td>
                            <td><?= $i["titulo"]; ?></td>
                            <td><?= ($i["texto"] == "") ? "--- SEM TEXTO ---" : (substr($i["texto"], 0, 100) . "..."); ?></td>
                            <td><?= $i["data_publicacao"]; ?></td>
                            <td>
                                <a href="<?= $url_backoffice; ?>editarImprensa/<?= $i["id"] ?>">
                                    <button class="btn mb-2">Editar</button>
                                </a>
                                <br>
                                <a href="<?= $url_backoffice; ?>apagarImprensa/<?= $i["id"] ?>">
                                    <button class="btn">Apagar</button>
                                </a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>

            <a href="<?= $url_backoffice; ?>novaImprensa">
                <button class="btn mb-3">ADICIONAR NOVA IMPRENSA</button>
            </a>

        </div>
    </div>
</main>