<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Recettes - La Cuisine</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600&family=Nunito:wght@400;700&display=swap">
        <link rel="stylesheet" href="../styles/styles.css">
    </head>
    <body>
        <?php
            $page = "recettes";
            include "../components/header.php";
        ?>
        <main class="container">
            <h1>Toutes les recettes</h1>
            <div class="row g-4">
                <?php
                    include "../data/recettes.php";
                    foreach ($recettes as $recette) {
                ?>
                <article class="col-md-6">
                    <div class="carte-recette">
                        <h2><a href="<?php echo $recette["fichier"]; ?>"><?php echo $recette["titre"]; ?></a></h2>
                        <img src="../images/<?php echo $recette["image"]; ?>" class="photo-carte" alt="<?php echo $recette["alt"]; ?>" width="300" height="200">
                        <p><?php echo $recette["resume"]; ?></p>
                        <?php
                            $note = $recette["note"];
                            include "../components/etoiles.php";
                        ?>
                    </div>
                </article>
                <?php
                    }
                ?>
            </div>
        </main>
        <?php
            include "../components/footer.php";
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
