<?php
include_once "../pages/header.php";
?>
<title>Login</title>
</head>

<body>
    <main class="pagformulario">
        <?php
        include_once "../pages/navbar.php";
        ?>
        <article class="form-login">
            <form action="../admin/logar.php" method="POST">
                <div class="logo-img">
                    <img class="mb-4 " src="../assets/img/logo.png" alt="" width="70" height="70">
                </div>
                <h3 class="h3">Entrar</h3>
                <div class="mb-3 form-floating">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                    <label for="formGroupExampleInput" class="form-label">Email</label>
                </div>
                <div class="mb-1 form-floating">
                    <input type="password" class="form-control mb-5" name="senha" id="senha" placeholder="Senha" minlength="6" required>

                    <label for="formGroupExampleInput2" class="form-label">Senha</label>
                </div>
                <p style="position: relative ; top: -20px;"><input type="button" class="btn btn-outline-secondary" id="mostrar" value="Mostrar Senha" onclick="mostrarsenha()"></p>
                <div class="col-12 " style="display:grid;margin-bottom:5px">
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </div>
            </form>
            <div id="passwordHelpBlock" class="form-text mb-3">
                Ainda não faz parte da nossa plataforma? <a href="../pages/cadastro.php " target="_self"> Cadastre-se
                    aqui!</a>
            </div>
        </article>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="../assets/js/javascript.js"></script>
    <script src="../assets/js/funcoes.js"></script>
</body>

</html>