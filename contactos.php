<?php

require_once("GLOBAIS.php");

$pagina_atual = "contactos";

?>

<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contactos</title>

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
            crossorigin="anonymous"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/contactos.css">
    </head>

    <body>

        <!-- CABEÇALHO  -->
        <?php require("componentes/header.php"); ?>

        <!-- AREA MAIN -->

        <main>

            <!-- AREA DO TITULO -->

            <div id="area-titulo" class="container-fluid">
                <div id="titulo-caixa" class="row offset-md-1 shadow">

                    <div class="col menu-selecionado">
                        <div id="titulo" class="t1">Contactos</div>
                        <div id="subtitulo" class="t1">Pode contactar-me através do e-mail ou telefone</div>
                    </div>
                </div>
            </div>

            <!-- AREA TEXTO -->

            <div id="area-texto" class="container text-center">

                <div class="row d-flex justify-content-center">
                    <div class="col-md-3 col-12">
                        <div class="contactos-titulo-main">
                            Telefone
                        </div>

                        <div class="contactos-texto-main">
                            +351 123 456 789
                        </div>
                    </div>

                    <div class="col-md-3 col-12 contacto">
                        <div class="contactos-titulo-main">
                            Morada
                        </div>
                        <div class="contactos-texto-main">
                            Lorem ipsum dolor sit amet, 12 <br>
                            1234-543 Lorem
                        </div>
                    </div>

                    <div class="col-md-3 col-12 contacto">
                        <div class="contactos-titulo-main">
                            Email
                        </div>
                        <div class="contactos-texto-main">
                            lorem@lorem.pt
                        </div>
                    </div>

                </div>

                <div class="row linha-main"></div>

                <div class="row justify-content-center">
                    <div>
                        <div class="contactos-titulo-main">
                            Horário
                        </div>
                        <div class="contactos-texto-main">
                            De Segunda a Sexta das 00:00h às 00:00h
                        </div>
                    </div>

                </div>
            </div>

        </main>


        <!-- RODAPE  -->
        <?php require_once("componentes/footer.php"); ?>
    </body>

</html>