<div class="perfil-content container">
    <div class="perfil-identificacao flex-container">
        <?php
        foreach ($results as $post) : ?>
        <div class="perfil-foto">
            <a href="../pages/index-musico.php?id=<?= $id ?>">
                <img src="<?= $post["image"] ?>" alt="" width="150" height="150" name="image" class="foto-usuario">
            </a>
        </div>
        <?php endforeach; ?>
        <div class="user">
            <div class="conteudo-usuario" style="border-top: none; border-radius:0.8rem 0.8rem 0 0;">
                <h2 style="text-transform: capitalize;">
                    <?php echo $_SESSION['nome']; ?>
                </h2>
                <p><?php echo $_SESSION['perfil']; ?></p>
            </div>
            <div class="conteudo-usuario">
                <p>Instrumentos mais tocados</p>
            </div>
            <div class="conteudo-usuario">
                <p>Itens salvos</p>
            </div>
            <div class="conteudo-usuario" style="border-radius:0 0 0.8rem 0.8rem;">
                <p>Meus contatos</p>
            </div>
        </div>
        <div class="user">
            <div class="conteudo-usuario">
                <button> + Monte sua Equipe</button>
            </div>
        </div>
    </div>