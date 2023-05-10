<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice <?= ($rotas[1] != "") ? " - " . ucfirst($rotas[1]) : ""; ?></title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href=<?= $url_base . "_backoffice/public/css/styles.css"; ?>>

    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>
</head>

<body class="text-center">

    <!-- IMAGEM DO BODY ORIGINAL DE: <a href="https://br.freepik.com/fotos-gratis/boa-mesa-de-negocios-em-fundo-preto_10148355.htm#page=2&query=desk&position=3&from_view=search&track=sph">Imagem de denamorado</a> no Freepik-->

    <header class="mt-3 mb-4 <?= ($rotas[1] == "" || $rotas[1] == "sair") ? "d-none" : ""; ?>">
        <div class="container-fluid caixa mt-3 mb-4">
            <div class="row">
                <div class="col-12">
                    <p class="t1 p-5 mb-0">BACKOFFICE SEBASTIÃO ALVES</p>
                </div>
            </div>

            <div class="row">
                <nav class="navbar navbar-expand-md">
                    <div class="container-fluid justify-content-center">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rotas[1] == "inicio") ? "active" : ""; ?>" aria-current="page" href="<?= $url_backoffice; ?>inicio">INÍCIO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  <?= ($rotas[1] == "carousel" || $rotas[1] == "editarCarousel" || $rotas[1] == "apagarCarousel"|| $rotas[1] == "novoCarousel") ? "active" : ""; ?>" href="<?= $url_backoffice; ?>carousel">CAROUSEL</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rotas[1] == "home" || $rotas[1] == "editarHome") ? "active" : ""; ?>" href="<?= $url_backoffice; ?>home">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rotas[1] == "autor" || $rotas[1] == "editarAutor") ? "active" : ""; ?>" href="<?= $url_backoffice; ?>autor">AUTOR</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rotas[1] == "livros" || $rotas[1] == "editarLivros" || $rotas[1] == "apagarLivros") ? "active" : ""; ?>" href="<?= $url_backoffice; ?>livros">LIVROS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rotas[1] == "destaques" || $rotas[1] == "editarDestaques") ? "active" : ""; ?>" href="<?= $url_backoffice; ?>destaques">DESTAQUES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rotas[1] == "imprensa" || $rotas[1] == "editarImprensa" || $rotas[1] == "apagarImprensa") ? "active" : ""; ?>" href="<?= $url_backoffice; ?>imprensa">IMPRENSA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rotas[1] == "contactos" || $rotas[1] == "editarContactos") ? "active" : ""; ?>" href="<?= $url_backoffice; ?>contactos">CONTACTOS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rotas[1] == "redes" || $rotas[1] == "editarRedes") ? "active" : ""; ?>" href="<?= $url_backoffice; ?>redes">REDES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rotas[1] == "configuracoes" || $rotas[1] == "editarConfiguracoes") ? "active" : ""; ?>" href="<?= $url_backoffice; ?>configuracoes">CONFIGURAÇÕES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rotas[1] == "sair") ? "active" : ""; ?>" href="<?= $url_backoffice; ?>sair">SAIR</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>