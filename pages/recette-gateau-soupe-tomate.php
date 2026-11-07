<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gâteau au chocolat à la soupe de tomate</title>
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
            <article>
                <h1>Gâteau au chocolat à la soupe de tomate</h1>
                <p>Pour un grand moule (23 x 33 cm) ou deux moules ronds. Cuisson: 35 à 40 minutes.</p>
                <div class="row g-4">
                    <section class="col-md-6">
                        <div class="encadre">
                            <h2>Ingrédients</h2>
                            <ul>
                                <li>220 g de farine</li>
                                <li>400 g de sucre</li>
                                <li>75 g de cacao en poudre</li>
                                <li>2 cuillères à café de bicarbonate de soude</li>
                                <li>1 cuillère à café de levure chimique</li>
                                <li>1 cuillère à café de sel</li>
                                <li>2 oeufs</li>
                                <li>1 boîte de soupe de tomate concentrée (environ 300 g)</li>
                                <li>240 ml de beurre</li>
                                <li>120 ml d'huile</li>
                                <li>1 cuillère à café d'extrait de vanille</li>
                            </ul>
                        </div>
                    </section>
                    <section class="col-md-6">
                        <div class="encadre">
                            <h2>Ustensiles</h2>
                            <ul>
                                <li>Un saladier</li>
                                <li>Un batteur électrique</li>
                                <li>Un ouvre-boîte</li>
                                <li>Un moule rectangulaire (23 x 33 cm) ou deux mules ronds</li>
                                <li>Un couteau</li>
                                <li>Une grille à pâtisserie</li>
                                <li>Un four</li>
                            </ul>
                        </div>
                    </section>
                </div>
                <section>
                    <h2>Galerie</h2>
                    <div id="carouselGateauTomate" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../images/gateau-soupe-tomate-1.jpg" class="d-block w-100 photo-carousel" alt="Part de gâteau au chocolat sur une assiette blanche">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/gateau-soupe-tomate-2.jpg" class="d-block w-100 photo-carousel" alt="Boîtes de soupe de tomate Campbell's">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/gateau-soupe-tomate-3.jpg" class="d-block w-100 photo-carousel" alt="Parts de gâteau au chocolat sur un plateau">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselGateauTomate" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselGateauTomate" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </section>
                <section>
                    <h2>Préparation</h2>
                    <ol>
                        <li>Préchauffer le four à 180°C.</li>
                        <li>Beurrer ou huiler et fariner le(s) moule(s).</li>
                        <li>Tamiser ensemble la farine, le sucre, le cacao, le bicarbonate, la levure et le sel dans le saladier.</li>
                        <li>Ajouter les oeufs.</li>
                        <li>Ajouter la soupe de tomate, sans la diluer.</li>
                        <li>Ajouter le beurre, l'huile et la vanille.</li>
                        <li>Battre à vitesse moyenne pendant 6 minutes, jusqu'à obtenir une pâte lisse.</li>
                        <li>Verser la pâte dans le moule, en laissant de la place: elle double presque de volume à la cuisson.</li>
                        <li>Enfourner pour 35 à 40 minutes. Avec des moules ronds, vérifier la cuisson dès 30 minutes.</li>
                        <li>Planter la pointe d'un couteau au centre: elle doit ressortir sèche.</li>
                        <li>Laisser à température ambiante 10 minutes dans le moule, puis démouler sur une grille.</li>
                        <li>Laisser refroidir complètement avant de découper ou de garnir.</li>
                    </ol>
                </section>
                <section>
                    <h2>Commentaire</h2>
                    <p>La surprise du lot: ce gâteau est vraiment délicieux, moelleux et très chocolaté, et il reste moelleux plusieurs jours. Personne ne devine la soupe de tomate.</p>
                </section>
                <section>
                    <h2>Un peu d'histoire</h2>
                    <p>Les gâteaux à la soupe de tomate deviennent à la mode dans les années 1930. On les appelait souvent "mystery cakes", les gâteaux mystère, car personne ne devinait l'ingrédient secret.</p>
                    <p>La marque Campbell's a ensuite popularisé une version au chocolat, au début des années 1950. La soupe de tomate apporte de l'humidité et un peu d'acidité, un peu comme le beurre: le résultat est un gâteau très moelleux, sans aucun goût de tomate.</p>
                </section>
                <section>
                    <h2>Astuces</h2>
                    <ul>
                        <li>Utiliser de la soupe de tomate concentrée, pas de la soupe prête à boire.</li>
                        <li>Pas de beurre ? Mélanger 240 ml de lait avec 1 cuillère à soupe de jus de citron et laisser reposer 5 minutes.</li>
                        <li>Le gâteau est assez solide pour être coupé en deux et garni de crème.</li>
                        <li>Ne dites l'ingrédient secret qu'après la dégustation.</li>
                    </ul>
                </section>
                <section>
                    <h2>Note</h2>
                    <?php
                        $note = 5;
                        include "../components/etoiles.php";
                    ?>
                </section>
                <?php
                    $commentaires = [
                        [
                            "pseudo" => "Chloé pâtissière",
                            "note" => 5,
                            "texte" => "J'ai dit l'ingrédient secret après le dessert. Ma belle-mère m'a demandé la recette quand même."
                        ],
                        [
                            "pseudo" => "Marco",
                            "note" => 5,
                            "texte" => "Je cherchais une soupe, j'ai trouvé un gâteau. Meilleure erreur de ma vie."
                        ],
                        [
                            "pseudo" => "Paulette, 82 ans",
                            "note" => 4,
                            "texte" => "Ma mère le faisait déjà. Elle ne nous a jamais dit pourquoi il y avait une boîte de soupe vide dans la poubelle."
                        ]
                    ];
                    include "../components/commentaires.php";
                ?>
            </article>
            <?php
                $fichier = "recette-gateau-soupe-tomate.php";
                include "../components/autres-recettes.php";
            ?>
        </main>
        <?php
            include "../components/footer.php";
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
