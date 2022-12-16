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
                    <h2>Conte com o e-Palco para encontrar o seu lugar nos palcos da vida </h2>
                </div>
                <div class="card-img">
                    <img src="./assets/img/artista-01.png" alt="O microfone está aberto para você fazer o show!">
                </div>
            </div>
        </section>
        <section>
            <div class="content flex-container reverse">
                <div class="text">
                    <h1>Nosso setlist é como música para o seu negócio!</h1>
                    <h2>Lorem, ipsum dolor sit amet consectetur </h2>
                </div>
                <div class="card-img">
                    <img src="./assets/img/cantor1.jpg" alt="">
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