<?php
include_once "../pages/header.php";
include('../admin/session.php');
?>
<title>Perfil</title>
</head>

<body>
    <?php
    include_once "../pages/navbar-perfil.php"
    ?>
    <div class="perfil-content container">
        <div class="perfil-identificacao flex-container">
            <div class="perfil-foto">
                <a href="">
                    <img src="" alt="" width="150" height="150" class="foto-usuario">
                </a>
            </div>
            <div>
                <h2 style="text-transform: capitalize;">
                    <?php echo $_SESSION['nome']; ?>
                </h2>
            </div>
        </div>
        <main>
            <div class="destaques">
                <fieldset>
                    <legend> Informações pessoais</legend>
                    <form action="" method="post">
                        <div class="row g-2">
                            <div class="form-floating ">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Nome">
                                <label for="floatingInput">Nome Completo</label>
                            </div>
                            <div class="col-md">
                                <div class="form-floating ">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Usuario">
                                    <label for="floatingInput">Nome de Usuário</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating ">
                                    <input type="date" class="form-control" id="floatingInput" placeholder="Data de nascimento">
                                    <label for="floatingInput">Data de nascimento</label>
                                </div>
                            </div>
                            <div class="form-floating ">
                                <input type="email" class="form-control" id="floatingInput" placeholder="Email">
                                <label for="floatingInput">E-mail</label>
                            </div>
                            <div class="form-floating ">
                                <input type="email" class="form-control" id="floatingInput" placeholder="Email">
                                <label for="floatingInput">Repita o E-mail</label>
                            </div>
                            <div class="col-md-2">
                                <div class="form-floating">
                                    <input type="tel" onkeypress="return event.charCode >= 45 && event.charCode <= 57" class="form-control" id="txtCep" name="txtCep" placeholder="Cep">
                                    <label for="txtCep">CEP</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="txtRua" name="rua" placeholder="Endereco">
                                    <label for="txtRua">Rua</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md-2">
                                <div class="form-floating mb-2">
                                    <input type="tel" onkeypress="return event.charCode >= 45 && event.charCode <= 59" class="form-control" id="floatingInput" placeholder="Nº">
                                    <label for="floatingInput">Nº</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="txtBairro" name="bairro" placeholder="Bairro">
                                    <label for="txtBairro">Bairro</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="txtCidade" name="cidade" placeholder="Cidade">
                                    <label for="txtCidade">Cidade</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="txtEstado" name="estado" placeholder="Estado">
                                    <label for="txtEstado">Estado</label>
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="../assets/js/javascript.js"></script>
</body>