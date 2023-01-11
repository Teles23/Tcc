<?php
include_once "../pages/header.php";

?>
<title>Editar Perfil | Epalco</title>
</head>

<body>
    <?php
    include("../pages/navbar-perfil.php")
    ?>
    <?php
    include("../pages/usuario.php")
    ?>

    <main>
        <div class="destaques" style="width: auto;">
            <fieldset>
                <legend> Informações pessoais</legend>
                <form action="" method="post">
                    <div class="row g-2">
                        <div class="form-floating ">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Nome">
                            <label for="floatingInput" class="label">Nome Completo</label>
                        </div>
                        <div class="col-md">
                            <div class="form-floating ">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Usuario">
                                <label for="floatingInput" class="label">Nome de Usuário</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating ">
                                <input type="date" class="form-control" id="floatingInput"
                                    placeholder="Data de nascimento">
                                <label for="floatingInput" class="label">Data de nascimento</label>
                            </div>
                        </div>
                        <div class="form-floating ">
                            <input type="email" class="form-control" id="floatingInput" placeholder="Email">
                            <label for="floatingInput" class="label">E-mail</label>
                        </div>
                        <div class="form-floating ">
                            <input type="email" class="form-control" id="floatingInput" placeholder="Email">
                            <label for="floatingInput" class="label">Repita o E-mail</label>
                        </div>
                        <div class="col-md-2">
                            <div class="form-floating">
                                <input type="tel" onkeypress="return event.charCode >= 45 && event.charCode <= 57"
                                    class="form-control" id="txtCep" name="txtCep" placeholder="Cep">
                                <label for="txtCep" class="label">CEP</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="txtRua" name="rua" placeholder="Endereco">
                                <label for="txtRua" class="label">Rua</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col-md-2">
                            <div class="form-floating mb-2">
                                <input type="tel" onkeypress="return event.charCode >= 45 && event.charCode <= 59"
                                    class="form-control" id="floatingInput" placeholder="Nº">
                                <label for="floatingInput" class="label">Nº</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="txtBairro" name="bairro"
                                    placeholder="Bairro">
                                <label for="txtBairro" class="label">Bairro</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="txtCidade" name="cidade"
                                    placeholder="Cidade">
                                <label for="txtCidade" class="label">Cidade</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="txtEstado" name="estado"
                                    placeholder="Estado">
                                <label for="txtEstado" class="label">Estado</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 " style="text-align: right;">
                        <button type="submit" class="btn btn-primary">Prosseguir</button>
                    </div>
                </form>
            </fieldset>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="../assets/js/javascript.js"></script>
</body>