<section class="autres-recettes">
    <h2>Les autres recettes</h2>
    <ul>
        <?php
            include "../data/recettes.php";
            foreach ($recettes as $recette) {
                if ($recette["fichier"] != $fichier) {
        ?>
        <li><a href="<?php echo $recette["fichier"]; ?>"><?php echo $recette["titre"]; ?></a></li>
        <?php
                }
            }
        ?>
    </ul>
</section>
