<div class="perfil-content container">
        <div class="perfil-identificacao flex-container">
            <?php
            foreach ($results as $post) : ?>
            <div class="perfil-foto">
                <a href="">
                    <img src="<?= $post["image"] ?>" alt="perfil-foto-mini" width="150" height="150" name="image" class="foto-usuario">
                </a>
            </div>
            <?php endforeach; ?>
            <div>
                <h2 style="text-transform: capitalize;">
                    <?php echo $_SESSION['nome']; ?>
                </h2>
            </div>
        </div>