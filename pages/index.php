<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>La Cuisine</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600&family=Nunito:wght@400;700&display=swap">
        <link rel="stylesheet" href="../styles/styles.css">
    </head>
    <body>
        <?php
            $page = "accueil";
            include "../components/header.php";
        ?>
        <main class="container">
            <h1>Bienvenue sur La Cuisine</h1>
            <section>
                <p>La Cuisine rassemble des recettes improbables, tirées de livres et de magazines de cuisine américains. Gelée au ketchup, hot-dog au beurre de cacahuète, gâteau à la soupe de tomate… Tout est détaillé étape par étape.</p>
                <p><a href="recettes.php">Voir toutes les recettes</a></p>
            </section>
            <section>
                <h2>Nos recettes</h2>
                <div id="carouselAccueil" class="carousel slide">
                    <div class="carousel-inner">
                        <?php
                            include "../data/recettes.php";
                            foreach ($recettes as $numero => $recette) {
                        ?>
                        <div class="carousel-item <?php if ($numero == 0) { echo "active"; } ?>">
                            <a href="<?php echo $recette["fichier"]; ?>">
                                <img src="../images/<?php echo $recette["image"]; ?>" class="d-block w-100 photo-carousel" alt="<?php echo $recette["alt"]; ?>">
                            </a>
                            <p class="legende-carousel"><?php echo $recette["titre"]; ?></p>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselAccueil" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="visually-hidden">Précédent</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselAccueil" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="visually-hidden">Suivant</span>
                    </button>
                </div>
            </section>
            <div class="row g-4">
                <section class="col-md-6">
                    <div class="encadre">
                        <h2>Le coup de coeur</h2>
                        <p><a href="recette-gateau-soupe-tomate.php">Gâteau au chocolat à la soupe de tomate</a></p>
                        <?php
                            $note = 5;
                            include "../components/etoiles.php";
                        ?>
                        <p>Moelleux et très chocolaté, personne ne devine l'ingrédient secret.</p>
                    </div>
                </section>
                <section class="col-md-6">
                    <div class="encadre">
                        <h2>Le saviez-vous ?</h2>
                        <p>Dans les années 1950 et 1960, les salades en gelée étaient à la mode aux États-Unis: on y emprisonnait des fruits, des légumes, de la viande et même poisson.</p>
                        <p>C'est de la que viennent la <a href="recette-salade-cerise-ketchup.php">salade cerise-ketchup</a> et le <a href="recette-pain-macaroni-saucisses.php">pain de macaronis aux saucisses</a>.</p>
                    </div>
                </section>
            </div>
        </main>
        <?php
            include "../components/footer.php";
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
