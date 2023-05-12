<main>
    <div class="container-fluid caixa">
        <div class="row justify-content-center">
            <table class="col-12 table table-striped mb-4 p-4 align-middle">
                <thead>
                    <tr>
                        <th>IMAGEM</th>
                        <th>TÍTULO</th>
                        <th>TEXTO</th>
                        <th>DATA ACTUALIZAÇÃO</th>
                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($carousel as $c) : ?>

                        <tr>
                            <td><img src="<?= $c["img_desktop"]; ?>" style="width: 200px"></td>
                            <td><?= $c["titulo"]; ?></td>
                            <td><?= substr($c["texto"], 0, 100); ?>...</td>
                            <td>Login: <?= ucfirst($c["login_atual"]); ?><br>Data: <?= $c["ultima_atualizacao"]; ?></td>

                            <td>
                                <a href="<?= $url_backoffice; ?>editarCarousel/<?= $c["id"] ?>">
                                    <button class="btn mb-2">Editar</button>
                                </a>
                                <br>
                                <a href="<?= $url_backoffice; ?>apagarCarousel/<?= $c["id"] ?>">
                                    <button class="btn">Apagar</button>
                                </a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>

            <a href="<?= $url_backoffice; ?>novoCarousel">
                <button class="btn mb-3">CRIAR NOVO BANNER</button>
            </a>
        </div>
    </div>
</main>