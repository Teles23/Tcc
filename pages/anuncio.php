<?php
include_once "../pages/header.php";

?>
<title>Editar Anúncio</title>
</head>

<body>
    <?php
    include("../pages/navbar-perfil.php")
    ?>
    <?php
    include("../pages/usuario.php")
    ?>

        <main>
            <div class="destaques">
                <div class="row justify-content-start">
                    <div class="col-9">

                        <fieldset>
                            <legend> Editar Anúncio</legend>
                            <form action="" method="post">
                                <div class="row g-2">
                                    <!-- o Campo das Imagens do Anuncio -->
                                    <div class="row align-items-start" id="evento-img">
                                        <div class="col"><img src="../assets/img/logo.png" id="evento-img-mini" class="evento-img-mini rounded mx-auto d-block" alt="..."></div>
                                        <div class="col"><img src="../assets/img/logo.png" id="evento-img-mini" class="evento-img-mini rounded mx-auto d-block" alt="..."></div>
                                        <div class="col"><img src="../assets/img/logo.png" id="evento-img-mini" class="evento-img-mini rounded mx-auto d-block" alt="..."></div>
                                    </div>
                                    <!-- Texto do Anuncio -->
                                    <div class="form-floating ">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Titulo">
                                        <label for="floatingInput">Digite o Título do Evento</label>
                                    </div>
                                    <div class="row-md">
                                        <div class="form">
                                            <textarea name="texto-evento" class="form-control" id="floatingInput" placeholder="Digite aqui a descrição do evento"></textarea>

                                        </div>
                                    </div>
            
                                
                            </form>
                        </fieldset>
                    </div>
                    <div class="col-3"> 
                        <div class="row justify-content-start">
                            <div style="text-align: center;" class="align-self-start">
                                <h5>VALOR DO EVENTO:</h5>
                                <h2>R$ $$$$$$</h2>
                            </div>
                            <div style="text-align: center;" class="align-self-start" >
                                    <h5>VALORVOCÊ VAI RECEBER:</h5>
                                    <h2>R$ $$$$$$</h2>
                            </div>

                            <div style="text-align: center;" class="align-items-end">
                                <button type="submit" class="btn btn-primary">Atualizar</button>
                            </div>
                        </div>
                    </div>
                </div>
                    
            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="../assets/js/javascript.js"></script>
</body>