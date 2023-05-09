<div class="mb-4 d-flex justify-content-center">
    <form action="" method="POST">
        <button class="btn-imprensa-esq" name="pagina_atual" value="<?= ($pagina_atual > 1) ? ($pagina_atual - 1) : 1; ?>"></button>

        <?php for ($i = 1; $i <= $total_paginas; $i++) : ?>
            <button class="btn-pagina active" style="<?= ($i == $pagina_atual) ? "color: var(--dourado-B1);" : "";  ?>" name="pagina_atual" value="<?= $i; ?>"><?= $i; ?></button>
        <?php endfor; ?>

        <button class="btn-imprensa-dir" name="pagina_atual" value="<?= ($pagina_atual < $total_paginas) ? ($pagina_atual + 1) : $total_paginas; ?>"></button>
    </form>
</div>