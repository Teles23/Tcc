<?php
include_once "../config/connection.php";
include('../admin/session.php');

$id = $_GET['id'];
$stmt = $conectar->prepare("SELECT image FROM users where id=:id");
$stmt->execute(array('id' => $id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);


?>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #303030;">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#"><img src="../assets/img/logo.png" alt="" width="30" height="30"></a>
            <a href="../index.php" target="_self"> <img src="../assets/img/teste.png" alt="" width="80px"
                    height="40px"></a>
            <button class="navbar-toggler  dropdown-toggle dropdown-toggle-split" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav nav-mobile">
                    <li class="nav-item flex-container nav-perfil">
                        <a class="nav-link active" aria-current="page" href="../pages/index-musico.php?id=<?= $id ?>"><i
                                class="fa-solid fa-house-chimney"></i></a>
                    </li>
                    <li class="nav-item flex-container nav-perfil">
                        <a class="nav-link" href="#"><i class="fa-regular fa-calendar-days"></i>
                            <span
                                class="position-absolute translate-middle bg-primary border border-light rounded-circle"
                                style="padding: 0.3rem;"></span>
                        </a>
                    </li>
                    <li class="nav-item flex-container nav-perfil">
                        <a class="nav-link" href="../pages/contrato.php?id=<?= $id ?>"><i
                                class="fa-solid fa-message"></i></a>
                    </li>
                    <li class="nav-item flex-container nav-perfil">
                        <a class="nav-link position-relative" href="#"><i class="fa-solid fa-bell"></i></a>
                    </li>
                    <li class="nav-item dropdown flex-container nav-perfil">
                        <?php foreach ($results as $post) : ?>
                        <a target="_self" class="nav-link navbar-brand" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="text-transform: capitalize;"> <img src="<?= $post["image"] ?>"
                                alt="" width="40" height="40" class="perfil-nav"></a>
                        <?php endforeach; ?>
                        <ul class="dropdown-menu-dark dropdown-menu">
                            <li><a class="dropdown-item" href="../pages/perfil-musico.php?id=<?= $id ?>">Perfil</a></li>
                            <li><a class="dropdown-item" href="../pages/editar-musico.php?id=<?= $id ?>">Editar</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="?sair">Sair</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>