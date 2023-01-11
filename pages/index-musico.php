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
            <div class="nome-usuario">
                <div class="nome-usuario1">
                    <?php echo $_SESSION['nome']; ?>
                </div>
                <div
                    style="color:rgba(0,0,0,0.6); font-size:1rem; font-weight:400; text-align:left; margin-left: 1.8rem;">
                    <?php echo $_SESSION['perfil']; ?>
                </div>
            </div>
            <?php endforeach; ?>

            <div class="user">
                <div class="conteudo-usuario" style="border-top: none;">
                    <strong>
                        <p>Agenda</p>
                    </strong>
                </div>
                <div class="conteudo-usuario" style="border-top: none;">
                    <p>Seguidores</p>
                </div>
                <div class="conteudo-usuario" style="border-top: none;">
                    <p>Instrumentos mais tocados</p>
                </div>
                <div class="conteudo-usuario">
                    <p>Itens salvos</p>
                </div>
                <div class="conteudo-usuario" style="border-top: none;">
                    <p>Grupos</p>
                </div>
                <div class="conteudo-usuario">
                    <p>Meus contatos</p>
                </div>
                <div class="conteudo-usuario" style="border-radius:0 0 0.8rem 0.8rem;">
                    <p>Configurações</p>
                </div>
            </div>
        </div>

        <main>
            <div class="destaques" style="max-width: 614px; overflow:auto">
                <div class="index">
                    <div class="feed-index">
                        <div class="publi">
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
                <div>
                    <button class="linha">
                        <hr>
                    </button>
                </div>

            </div>

        </main>


        <div class="perfil-identificacao flex-container">
            <iframe
                src="https://calendar.google.com/calendar/embed?height=250&wkst=1&bgcolor=%23AD1457&ctz=America%2FSao_Paulo&showNav=1&showTitle=0&showPrint=0&showTabs=0&showCalendars=1&showTz=0&src=cHQuYnJhemlsaWFuI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=cHQtYnIuYnJhemlsaWFuI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb202ODRiNmM3Y0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%230B8043&color=%230B8043&color=%23202124"
                style="border-width:0" width="210" height="225" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="../assets/js/javascript.js"></script>
</body>