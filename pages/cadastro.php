<?php
include_once "../pages/header.php";
?>
<title>Cadastro</title>
</head>

<body>
    <main class="pagformulario flex-container">
        <?php
        include_once "../pages/navbar.php";
        ?>
        <article class="form-login">
            <div class="flex-container">
                <img class="mb-4 " src="../assets/img/logo.png" alt="" width="70" height="70">
            </div>
            <div>
                <h3 class="h3">Cadastra-se</h3>
                <p class="">Faça sua conta agora e se conecte com nossos parceiros</p>
            </div>
            <form action="../admin/cad_userOk.php" method="POST" id="form_cadastro">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="perfil" id="inlineRadio1" value="Músico" checked>
                    <label class="form-check-label" for="inlineRadio1">Músico</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="perfil" id="inlineRadio2" value="Contratante">
                    <label class="form-check-label" for="inlineRadio2">Contratante</label>
                </div>
                <div class=" form-floating mb-3 col">
                    <input type="text" class="form-control" placeholder="Nome" name="nome" id="nome" >
                    <label for="exampleInputEmail">Nome</label>
                </div>
                <div class="form-group form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Seu email" >
                    <label for="exampleInputEmail1">Endereço de email</label>
                </div>
                <div class="row">
                    <div class="form-group col form-floating ">
                        <input name="senha" type="password" class="form-control" id="senha" placeholder="Senha" minlength="6">
                        <label for="exampleInputPassword1" class="password">Senha</label>
                    </div>
                    <div class="form-group col form-floating ">
                        <input name="confirme_senha" type="password" class="form-control" id="confirme_senha" placeholder="Confirme sua senha" minlength="6">
                        <label for="exampleInputPassword2" class="password">Confirme sua senha</label>
                    </div>
                    <div id="passwordHelpBlock" class="form-text mb-3">
                        Mínimo de 6 caracteres com letras e números.
                    </div>
                    <p><input type="button" class="btn btn-outline-secondary" id="mostrar" value="Mostrar Senha" onclick="mostrarsenha()"></p>
                </div>
                <div class="col-12 " style="display:grid;margin-top:10px">
                    <button type="submit" class="btn frm-botao btn-primary" id="cad-btn" >Cadastrar-se</button>
                </div>
            </form>
        </article>
    </main>
    <script src="../assets/js/funcoes.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="../assets/js/javascript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>