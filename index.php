<?php
include_once "./pages/header.php";
?>
<title>E-palco</title>
</head>

<body>
    <main>
        <?php
        include_once "./pages/navbar.php";
        ?>
        <section style="padding:0 0 30px;">
            <div id="carouselExample " class="carousel carousel slide " data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" id="slide-1" data-bs-interval="15000">
                        <img src="./assets/img/slide-home/fundo-01.png" class="w-100 d-block" alt="">
                    </div>
                    <div class="carousel-item" id="slide-2" data-bs-interval="15000">
                    <img src="./assets/img/slide-2.jpg" class="w-100 d-block" alt="">
                    </div>
                    <div class="carousel-item" id="slide-3" data-bs-interval="15000">
                    <img src="./assets/img/slide-3.png" class="w-100 d-block" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="content flex-container">
                <div class="text">
                    <h1>Este é o seu espaço!</h1>
                    <h2>Conte com o e-Palco para encontrar o seu lugar nos palcos da vida</h2>

                    <!-- Primeiro Modal -->
                    <!-- Botão para acionar modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado">
                    Saiba como!
                    </button>

                    <!-- Modal 1 -->
                    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="TituloModalCentralizado">Músicos habilidosos, sejam muito bem vindos ao e-Palco!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                            <div class="modal-body">
                            <p>O mercado para aqueles que decidiram viver da música parece um grande desafio - e é! Além do talento, que é pré-requisito para quem almeja o sucesso, o músico precisa de uma combinação de fatores que está além do seu alcance, e uma delas é a oportunidade.</p>

                            <p>Muitos artistas em começo de carreira tem dificuldades para encontrar um contratante para se apresentarem. E os motivos são vários: os donos de eventos, principalmente de bares e restaurantes, não se interessam inicialmente por músicos e bandas independentes. E quando oferecem uma oportunidade, ela é disputada por dezenas de candidatos.</p> 

                            <p>As oportunidades no ramo de shows e eventos são difíceis de se encontrar. Isso pode desanimar o músico a continuar na carreira. Entretanto, o e-Palco veio para abrir as portas para o seu talento.</p>

                            <p>A nossa plataforma vai disponibilizar para você, profissional da música, uma lista de eventos com a possibilidade de filtrá-las pelo tamanho do público, localização, valor e habilidade musical. Basta você pesquisar, acertar os detalhes, aceitar a proposta e pronto: você já se apresentar e fazer renda.</p>

                            <p>Com o e-Palco, o show vai continuar!</p>

                            </div>
                        </div>
                    </div>
                    </div>
                
                                        
            </div>
            <div class="card-img">
                <img src="./assets/img/artista-01.png" alt="O microfone está aberto para você fazer o show!">
            </div>
        </div>
        </section>
        <section>
            <div class="content flex-container reverse">
                <div class="text">
                    <h1>Fazemos o ritmo que agita<br>o seu negócio!</h1>
                    <h2>Conte com o e-Palco para montar a sua playlist.</h2>
                </div>
                <div class="card-img">
                    <img src="./assets/img/cont-01.png" alt="">
                </div>
            </div>
        </section>
        <section>
            <div class="content flex-container">
                <div class="text">
                    <h1>De mãos dadas com todos!</h1>
                    <h2>O e-Palco junta o melhor dos dois mundos e com a gente, você vai fazer um bom negócio.</h2>
                </div>
                <div class="card-img">
                    <img src="./assets/img/cantor1.jpg" alt="">
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="./assets/js/javascript.js"></script>
</body>

</html>