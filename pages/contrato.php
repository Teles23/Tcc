<?php
include_once "../pages/header.php";

?>
<title>Termo de Contrato | Epalco</title>
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
                <a href="../pages/index-musico.php?id=<?= $id ?>">
                    <img src="<?= $post["image"] ?>" alt="" width="150" height="150" name="image" class="foto-usuario">
                </a>
            </div>
            <div class="nome-usuario">
                <div class="nome-usuario1">
                    <?php echo $_SESSION['nome']; ?>
                </div>
                <div style="color:rgba(0,0,0,0.6); font-size:1rem; font-weight:400;margin-left: 1.8rem;">
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
            <div class=" destaques ">
                <div class="destaques-contrato">
                    <h1>Contrato de Prestação de Serviço</h1>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy
                    text ever since the 1500s, when an unknown printer took a galley
                    of type and scrambled it to make a type specimen book. It has
                    survived not only five centuries, but also the leap into electronic
                    typesetting, remaining essentially unchanged. It was popularised in
                    the 1960s with the release of Letraset sheets containing Lorem
                    lpsum passages, and more recently with desktop publishing
                    software like Aldus PageMaker including versions of Lorem Ipsum.
                    It is a long established fact that a reader will be distracted by the
                    readable content of a page when looking at its layout. The point of
                    of letters, as opposed to using 'Content here, content here',
                    making it look like readable English. Many desktop publishing
                    packages and web page editors now use Lorem Ipsum as their
                    default model text, and a search for 'lorem ipsum' will uncover
                    many web sites still in their infancy. Various versions have evolved
                    over the years, sometimes by accident, sometimes on purpose
                    (injected humour and the like).
                    Contrary to popular belief, Lorem Ipsum is not simply random text.
                    It has roots in a piece of classical Latin literature from 45 BC,
                    making it over 2000 years old. Richard McClintock, a Latin
                    professor at Hampden-Sydney College in Virginia, looked up one of
                    the more obscure Latin words, consectetur, from a Lorem Ipsum
                    passage, and going through the cites of the word in classical
                    literature, discovered the undoubtable source. Lorem Ipsum
                    comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum
                    et Malorum" (The Extremes of Good and Evil) by Cicero, written in
                    45 BC. This book is a treatise on the theory of ethics, very popular
                    during the Renaissance. The first line of Lorem Ipsum, "Lorem
                    ipsum dolor sit amet..", comes from a line in section 1.10.32.
                </div>
            </div>
        </main>

        <div class="perfil-identificacao flex-container" style="justify-content: end;">
            <button onclick="window.print()" class="botao1 no-print"><span>Aceitar Contrato</span></button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="../assets/js/javascript.js"></script>
</body>