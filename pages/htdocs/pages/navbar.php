<?php
?>
<header>
    <nav class="navbar navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="../index.php" target="_self"> <img src="../assets/img/nome.png" alt="" width="80px"
                    height="40px"></a>
            <form class="justify-content-start">
                <a href="../pages/login.php" target="_self"> <button class="btn btn-sm btn-outline-secondary"
                        type="button">Login</button></a>
                <a href="../pages/cadastro.php" target="_self" rel="noopener noreferrer"><button
                        class="btn btn-sm btn-outline-secondary" type="button">Cadastre-se</button></a>
            </form>
            <div class="offcanvas offcanvas-start  text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Artistas</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Categorias
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#">Bateristas</a></li>
                                <li><a class="dropdown-item" href="#">Cantores</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Algo a mais!</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>