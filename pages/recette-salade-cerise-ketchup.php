<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Salade en gelée cerise-ketchup - La Cuisine</title>
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
                <h1>Salade en gelée cerise-ketchup</h1>
                <p>Pour 6 personnes. Prise au frais: quelques heures. Recette de 1964, tirée du livre "Favorite Recipes From Home Economics Teachers".</p>
                <div class="row g-4">
                    <section class="col-md-6">
                        <div class="encadre">
                            <h2>Ingrédients</h2>
                            <ul>
                                <li>1 sachet de gelée parfum cerise</li>
                                <li>120 ml de ketchup</li>
                                <li>240 ml d'eau bouillante</li>
                                <li>60 g de céleri haché</li>
                                <li>120 g de noix hachées</li>
                                <li>12 petites olives noires</li>
                            </ul>
                        </div>
                    </section>
                    <section class="col-md-6">
                        <div class="encadre">
                            <h2>Ustensiles</h2>
                            <ul>
                                <li>Une bouilloire</li>
                                <li>Un verre doseur</li>
                                <li>Un saladier</li>
                                <li>Une cuillère en bois</li>
                                <li>Un couteau et planche à découper</li>
                                <li>Un moule à gelée ou moule à savarin</li>
                                <li>Un grand plat de service</li>
                            </ul>
                        </div>
                    </section>
                </div>
                <section>
                    <h2>Galerie</h2>
                    <div id="carouselCeriseKetchup" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../images/salade-cerise-ketchup-1.jpg" class="d-block w-100 photo-carousel" alt="Salade en gelée rouge démoulée sur des feuilles de laitue">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/salade-cerise-ketchup-2.jpg" class="d-block w-100 photo-carousel" alt="Couronne de gelée rouge et crème servie à table">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/salade-cerise-ketchup-3.jpg" class="d-block w-100 photo-carousel" alt="Bouteille de ketchup">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselCeriseKetchup" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselCeriseKetchup" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </section>
                <section>
                    <h2>Préparation</h2>
                    <ol>
                        <li>Faire bouillir l'eau dans la bouilloire.</li>
                        <li>Verser le sachet de gelée dans le saladier, puis ajouter l'eau bouillante.</li>
                        <li>Remuer pendant environ 2 minutes, jusqu'à ce que la gelée soit complètement dissoute.</li>
                        <li>Laisser refroidir à température ambiante, sans laisser la gelée prendre.</li>
                        <li>Pendant ce temps, laver le céleri et le hacher finement.</li>
                        <li>Hacher grossièrement les noix.</li>
                        <li>Égoutter les olives noires.</li>
                        <li>Incorporer le ketchup à la gelée refroidie et bien mélanger.</li>
                        <li>Ajouter le céleri, les noix et les olives.</li>
                        <li>Verser la préparation dans le moule.</li>
                        <li>Placer au réfrigérateur plusieurs heures, jusqu'à ce que la gelée soit bien ferme.</li>
                        <li>Pour démouler, tremper quelques secondes le moule dans l'eau chaude, puis le retourner sur le plat de service.</li>
                    </ol>
                </section>
                <section>
                    <h2>Commentaire</h2>
                    <p>La personne qui l'a testée a jugé qu'elle avait "le goût d'une mauvaise idée". Le croquant du céleri et des noix est agréable, mais les olives noires dans une gelée sucrée, c'est trop. Le mélange rappelle vaguement un hot-dog d'été.</p>
                </section>
                <section>
                    <h2>Un peu d'histoire</h2>
                    <p>Dans les années 1950 et 1960, les salades en gelée étaient très à la mode aux États-Unis. On y emprisonnait à peu près tout: fruits, légumes, viande, poisson… La gelée permettait de faire des plats spectaculaires avec des restes, à une époque où le réfrigérateur devenait courant dans les cuisines.</p>
                    <p>Cette recette vient d'un recueil de 1964 rassemblant les recettes favorites de professeurs d'économie domestique. Autrement dit, des personnes dont le métier était d'apprendre à cuisiner aux autres.</p>
                </section>
                <section>
                    <h2>Astuces</h2>
                    <ul>
                        <li>Ne pas verser le ketchup dans la gelée encore brûlante: laisser refroidir avant.</li>
                        <li>Huiler très légèrement le moule pour faciliter le démoulage.</li>
                        <li>Si les olives noires vous font peur, la recette reste tout aussi étrange sans elles.</li>
                        <li>Servir bien froid, idéalement à des invités qui ne savent pas ce qu'il y a dedans.</li>
                    </ul>
                </section>
                <section>
                    <h2>Note</h2>
                    <?php
                        $note = 1;
                        include "../components/etoiles.php";
                    ?>
                </section>
                <?php
                    $commentaires = [
                        [
                            "pseudo" => "Mamie Ginette",
                            "note" => 1,
                            "texte" => "J'en ai servi au repas de Noël. Depuis, plus personne ne vient au repas de Noël."
                        ],
                        [
                            "pseudo" => "Kevin_du_33",
                            "note" => 2,
                            "texte" => "Le céleri croque, les olives surprennent, le ketchup tremble. C'est une expérience, pas un plat."
                        ],
                        [
                            "pseudo" => "Chef Bernard",
                            "note" => 0,
                            "texte" => "J'ai démoulé la gelée, elle m'a regardé. Je l'ai remise au frigo et j'ai déménagé."
                        ]
                    ];
                    include "../components/commentaires.php";
                ?>
            </article>
            <?php
                $fichier = "recette-salade-cerise-ketchup.php";
                include "../components/autres-recettes.php";
            ?>
        </main>
        <?php
            include "../components/footer.php";
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
