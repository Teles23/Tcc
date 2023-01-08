<?php
include_once "../config/connection.php";
include('../admin/session.php');

$id = $_GET['id'];
$stmt = $conectar->prepare("SELECT image FROM users where id=:id");
$stmt->execute(array('id' => $id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);


?>
<header>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#"><img src="../assets/img/logo.png" alt="" width="30" height="30"></a>
            <a href="../index.php" target="_self"> <img src="../assets/img/nome.png" alt="" width="80px"
                    height="40px"></a>
            <button class="navbar-toggler  dropdown-toggle dropdown-toggle-split" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav nav-mobile">
                    <li class="nav-item dropdown flex-container nav-perfil">
                        <?php foreach ($results as $post) : ?>
                        <a target="_self" class="nav-link dropdown-toggle navbar-brand" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" style="text-transform: capitalize;"> <img
                                src="<?= $post["image"] ?>" alt="" width="40" height="40" class="perfil-nav"></a>
                        <?php endforeach; ?>
                        <ul class="dropdown-menu-dark dropdown-menu">
                            <li><a class="dropdown-item" href="#">Perfil</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="?sair">Sair</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item flex-container nav-perfil">
                        <a class="nav-link active" aria-current="page" href="#"><i
                                class="fa-solid fa-house-chimney"></i></a>
                    </li>
                    <li class="nav-item flex-container nav-perfil">
                        <a class="nav-link" href="#"><i class="fa-regular fa-calendar-days"></i></a>
                    </li>
                    <li class="nav-item flex-container nav-perfil">
                        <a class="nav-link" href="#"><i class="fa-solid fa-message"></i></a>
                    </li>
                    </li>
                    <li class="nav-item flex-container nav-perfil">
                        <a class="nav-link position-relative" href="#"></span><i class="fa-solid fa-bell"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>