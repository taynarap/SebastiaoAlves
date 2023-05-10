<main>
    <div class="container-fluid caixa">
        <div class="row justify-content-center">
            <table class="col-12 table table-striped mb-4 p-4">
                <thead>
                    <tr>
                        <th>IMAGEM</th>
                        <th>TITULO</th>
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
                            <td><?= substr($c["texto"], 0, 150); ?>...</td>
                            <td>10/02/2023</td>

                            <td>
                                <a href="<?= $url_backoffice; ?>editar/<?= $c["id"] ?>">
                                    <button class="btn mt-3 mb-2">Editar</button>
                                </a>
                                <br>
                                <a href="<?= $url_backoffice; ?>apagar/<?= $c["id"] ?>">
                                    <button class="btn">Apagar</button>
                                </a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>

            <a href="#">
                <button class="btn mb-3">CRIAR NOVO BANNER</button>
            </a>

            </table>
        </div>
    </div>
</main>