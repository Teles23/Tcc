<div class="perfil-content container">
    <div class="perfil-identificacao flex-container">
        <?php
        foreach ($results as $post) : ?>
        <div class="perfil-foto">
            <a href="../pages/index-musico.php?id=<?= $id ?>">
                <img src="<?= $post["image"] ?>" alt="" width="150" height="150" name="image" class="foto-usuario">
            </a>
        </div>
        <div class="nome-usuario">
            <div class="nome-usuario1">
                <?php echo $_SESSION['nome']; ?>
            </div>
            <div style="color:rgba(0,0,0,0.6); font-size:1rem; font-weight:400; text-align:left; margin-left: 1.8rem;">
                <?php echo $_SESSION['perfil']; ?>
            </div>
        </div>
        <?php endforeach; ?>

        <div class="user">
            <div class="conteudo-usuario" style="border-top: none;">
                <strong>
                    <p>Agenda</p>
                </strong>
            </div>
            <div class="conteudo-usuario" style="border-top: none;">
                <p>Seguidores</p>
            </div>
            <div class="conteudo-usuario" style="border-top: none;">
                <p>Instrumentos mais tocados</p>
            </div>
            <div class="conteudo-usuario">
                <p>Itens salvos</p>
            </div>
            <div class="conteudo-usuario" style="border-top: none;">
                <p>Grupos</p>
            </div>
            <div class="conteudo-usuario">
                <p>Meus contatos</p>
            </div>
            <div class="conteudo-usuario" style="border-radius:0 0 0.8rem 0.8rem;">
                <p>Configurações</p>
            </div>
        </div>

        <!-- <div class="user">
            <div class="conteudo-usuario">
                <button> + Monte sua Equipe</button>
            </div>
        </div> -->
    </div>