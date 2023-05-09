<div class="container-fluid caixa">
    <div class="row justify-content-center">
        <table class="col-12 table table-striped mb-4">
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
                            <form action="carousel_saida.php">
                                <input type="hidden" name="accao" value="editar">
                                <button class="btn" name="id" value="<?= $c["id"]; ?>">Editar</button>
                            </form>
                            <br>
                            <form action="">
                                <input type="hidden" name="accao" value="apagar">
                                <button class="btn" name="id" value="<?= $c["id"]; ?>">Apagar</button>
                            </form>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
        <form action="novo_carousel.php">
            <input type="hidden" name="accao" value="novo">
            <button class="btn mb-3" name="id" value="<?= $c["id"]; ?>" style="width: 100px">Novo</button>
        </form>

        </table>
    </div>
</div>