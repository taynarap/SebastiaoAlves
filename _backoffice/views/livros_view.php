<main>
    <div class="container-fluid caixa">
        <div class="row justify-content-center table-responsive">
            <table class="col-12 table table-striped mb-4 align-middle">
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
                    <?php foreach ($livros as $l) : ?>

                        <tr>
                            <td><img src="<?= $l["imagem"]; ?>" style="width: 100px"></td>
                            <td><?= $l["titulo"]; ?></td>
                            <td><?= substr($l["texto"], 0, 100); ?>...</td>
                            <td>Login: <?= ucfirst($l["login_atual"]); ?><br>Data: <?= ($l["ultima_atualizacao"] == "") ? "--- Sem Edições Anteriores---" : $l["ultima_atualizacao"]; ?></td>

                            <td>
                                <a href="<?= $url_backoffice; ?>editarLivro/<?= $l["id"] ?>">
                                    <button class="btn mb-2">Editar</button>
                                </a>
                                <br>
                                <a href="<?= $url_backoffice; ?>apagarLivro/<?= $l["id"] ?>">
                                    <button class="btn">Apagar</button>
                                </a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>

            <a href="<?= $url_backoffice; ?>novoLivro">
                <button class="btn mb-3">ADICIONAR NOVO LIVRO</button>
            </a>

        </div>
    </div>
</main>