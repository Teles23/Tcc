<?php
include_once "../pages/header.php";

?>
<title>Feed | Epalco</title>
</head>

<body>
    <?php
    include("../pages/navbar-perfil.php")
    ?>
    <div class=" container chat">
        <div class="perfil-identificacao flex-container">
            <?php
            foreach ($results as $post) : ?>
            <div class="perfil-foto">
                <a href="">
                    <img src="<?= $post["image"] ?>" alt="" width="150" height="150" name="image" class="foto-usuario">
                </a>
            </div>
            <?php endforeach; ?>
            <div class="user">
                <div class="conteudo-usuario" style="border-top: none; border-radius:0.8rem 0.8rem 0 0;">
                    <h2 style="text-transform: capitalize;">
                        <?php echo $_SESSION['nome']; ?>
                    </h2>
                    <p><?php echo $_SESSION['perfil']; ?></p>
                </div>
                <div class="conteudo-usuario">
                    <p>Instrumentos mais tocados</p>
                </div>
                <div class="conteudo-usuario">
                    <p>Itens salvos</p>
                </div>
                <div class="conteudo-usuario" style="border-radius:0 0 0.8rem 0.8rem;">
                    <p>Meus contatos</p>
                </div>
            </div>
        </div>

        <main>
            <div class="destaques" style="max-width: 614px; overflow:auto">
                <div class="index">
                    <div class="feed-index">
                        <div class="publi">
                            <a href="../pages/index-musico.php?id=<?= $id ?>">
                                <div style="margin-right: 0.8rem;line-height: 0;">
                                    <img src="<?= $post["image"] ?>" alt="" width="48" height="48" name="image"
                                        class="foto-usuario">
                                </div>
                            </a>
                            <button id="buton-publi">
                                <span>Começar Publicação</span>
                            </button>
                        </div>

                    </div>
                    <div class="inputs">
                        <button class="btn-input">
                            <li-icon><i class="fa-solid fa-image"></i></li-icon>
                            <span id="btn-text">Foto</span>

                        </button>
                        <button class="btn-input">
                            <li-icon><i class="fa-brands fa-youtube"></i></li-icon>
                            <span id="btn-text">Video</span>

                        </button>
                        <button class="btn-input">
                            <li-icon><i class="fa-solid fa-microphone"></i></li-icon>
                            <span id="btn-text">Audio</span>

                        </button>
                        <button class="btn-input">
                            <li-icon><i class="fa-solid fa-newspaper"></i></li-icon>
                            <span id="btn-text">Escrever Artigo</span>

                        </button>

                    </div>
                </div>
            </div>

        </main>


        <div class="perfil-identificacao flex-container" style="justify-content: end;">

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="../assets/js/javascript.js"></script>
</body>