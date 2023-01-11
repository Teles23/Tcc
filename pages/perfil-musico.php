<?php
include_once "../pages/header.php";

?>
<title>Perfil | Epalco</title>
</head>

<body>
    <?php
    include("../pages/navbar-perfil.php")
    ?>
    <?php
    include("../pages/usuario.php")
    ?>

    <main>
        <div class="destaques" style="width:auto; display:grid;row-gap:59px;">
            <div class="telas-destaques">
                <div class="tela1 telas">
                    <iframe width="100%" height="100%"
                        src="https://www.youtube.com/embed/U3ASj1L6_sY?controls=0&amp;start=110"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="tela2 telas">
                    <iframe width="100%" height="100%"
                        src="https://www.youtube.com/embed/2Vv-BfVoq4g?controls=0&amp;start=25"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="tela3 telas">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/JPJjwHAIny4?start=34"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="info">
                <div id="perfilDoUsuario">
                    <h1>
                        Sobre Mim <?php //echo $_SESSION['nome'] 
                                    ?>
                    </h1>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy
                    text ever since the 1500s, when an unknown printer took a galley
                    of type and scrambled it to make a type specimen book. It has
                    survived not only five centuries, but also the leap into electronic
                    typesetting, remaining essentially unchanged. It was popularised in
                    the 1960s with the release of Letraset sheets containing Lorem
                    lpsum passages, and more recently with desktop publishing
                    software like Aldus PageMaker including versions of Lorem Ipsum.

                </div>
                <div class="botoes-destaques">
                    <button class="botao1 botoes"></button>
                    <button class="botao2 botoes"></button>
                    <button class="botao3 botoes"></button>
                    <button class="botao4 botoes"></button>
                    <button class="botao5 botoes"></button>
                    <button class="botao5 botoes"></button>
                </div>
            </div>
            <!-- <div class="col-12 " style="text-align: right;">
                <button type="submit" class="btn btn-primary">Prosseguir</button>
            </div> -->

        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="../assets/js/javascript.js"></script>
</body>