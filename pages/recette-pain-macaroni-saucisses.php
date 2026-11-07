<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pain de macaronis aux saucisses - La Cuisine</title>
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
                <h1>Pain de macaronis aux saucisses</h1>
                <p>Pour 6 personnes. Prise au frais: quelques heures. Recette de 1955, tirée du livret "Hot Dogs".</p>
                <div class="row g-4">
                    <section class="col-md-6">
                        <div class="encadre">
                            <h2>Ingrédients</h2>
                            <ul>
                                <li>240 ml de lait</li>
                                <li>1 sachet de gélatine en poudre neutre</li>
                                <li>1 oeuf</li>
                                <li>4 tasses de macaronis cuits (environ 560 g)</li>
                                <li>120 ml de mayonnaise</li>
                                <li>2 cuillères à café de moutarde</li>
                                <li>1 cuillère à café de sel</li>
                                <li>1 trait de Tabasco</li>
                                <li>100 g de fromage fondu râpé</li>
                                <li>4 saucisses à hot-dog et demie</li>
                            </ul>
                        </div>
                    </section>
                    <section class="col-md-6">
                        <div class="encadre">
                            <h2>Ustensiles</h2>
                            <ul>
                                <li>Une grande casserole et une passoire</li>
                                <li>Un bain-marie</li>
                                <li>Un fouet</li>
                                <li>Une cuillère en bois</li>
                                <li>Une râpe à fromage</li>
                                <li>Un moule à cake (23 x 13 cm)</li>
                                <li>Un pinceau et de l'huile pour le moule</li>
                                <li>Un couteau</li>
                            </ul>
                        </div>
                    </section>
                </div>
                <section>
                    <h2>Galerie</h2>
                    <div id="carouselMacaroniSaucisses" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../images/pain-macaroni-saucisses-1.jpg" class="d-block w-100 photo-carousel" alt="Salade de macaronis à la mayonnaise dans un bol bleu">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/pain-macaroni-saucisses-2.jpg" class="d-block w-100 photo-carousel" alt="Salade de macaronis crémeuse">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/pain-macaroni-saucisses-3.jpg" class="d-block w-100 photo-carousel" alt="Saucisses en train de griller sur une plaque">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselMacaroniSaucisses" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselMacaroniSaucisses" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </section>
                <section>
                    <h2>Préparation</h2>
                    <ol>
                        <li>Faire cuire les macaronis dans une grande casserole d'eau salée, les égoutter et les laisser refroidir.</li>
                        <li>Verser le lait dans le haut du bain-marie, saupoudrer la gélatine et laisser reposer 5 minutes.</li>
                        <li>Incorporer l'oeuf au fouet.</li>
                        <li>Poser le récipient sur l'eau bouillante du bain-marie.</li>
                        <li>Remuer sans arrêt jusqu'à ce que le mélange épaississe légèrement et nappe la cuillère.</li>
                        <li>Retirer du feu.</li>
                        <li>Ajouter les macaronis, la mayonnaise, la moutarde, le sel, le Tabasco et le fromage râpé, puis bien mélanger.</li>
                        <li>Huiler le moule à cake au pinceau.</li>
                        <li>Étaler la moitié de la préparation aux macaronis dans le moule.</li>
                        <li>Poser 3 saucisses entières dans la longueur, à un bout du moule, en les espaçant d'environ 2 cm.</li>
                        <li>Couper la dernière saucisse entière en deux. Utiliser ces deux moitiés, ainsi que la demi-saucisse restante, pour remplir l'autre bout du moule.</li>
                        <li>Recouvrir avec le reste des macaronis et tasser fermement.</li>
                        <li>Laisser prendre au réfrigérateur plusieurs heures.</li>
                        <li>Démouler sur un plat et couper en tranches pour admirer les saucisses.</li>
                    </ol>
                </section>
                <section>
                    <h2>Commentaire</h2>
                    <p>Les testeurs l'ont décrit comme "horriblement crémeux", avec un arrière-goût de mayonnaise à en pleurer. Conseil de la blogueuse: supprimer soit le fromage, soit la mayonnaise. Ou les deux. Ou la recette.</p>
                </section>
                <section>
                    <h2>Un peu d'histoire</h2>
                    <p>Cette recette vient d'un livret de 1955 entièrement consacré aux hot-dogs. Dans les années 1950, les saucisses de Francfort étaient bon marché et faciles à trouver, et les éditeurs rivalisaient d'imagination pour les glisser dans tous les plats possibles.</p>
                    <p>Le principe du "pain" en gelée permettait de préparer le plat à l'avance et de le servir froid, en tranches, lors des repas d'été ou des buffets.</p>
                </section>
                <section>
                    <h2>Astuces</h2>
                    <ul>
                        <li>Bien égoutter et refroidir les macaronis avant de les mélanger à la crème.</li>
                        <li>Ne jamais arrêter de remuer au bain-marie, sinon l'oeuf cuit en morceaux.</li>
                        <li>Couper les tranches avec un couteau trempé dans l'eau chaude pour qu'elles restent nettes.</li>
                        <li>La blogueuse qui l'a testée conseille de supprimer le fromage ou la mayonnaise. Elle a sûrement raison.</li>
                    </ul>
                </section>
                <section>
                    <h2>Note</h2>
                    <?php
                        $note = 0;
                        include "../components/etoiles.php";
                    ?>
                </section>
                <?php
                    $commentaires = [
                        [
                            "pseudo" => "Sandrine la gourmande",
                            "note" => 0,
                            "texte" => "Quand j'ai coupé la première tranche, les saucisses m'ont fait coucou. Je n'étais pas prête."
                        ],
                        [
                            "pseudo" => "Jean-Mi BBQ",
                            "note" => 1,
                            "texte" => "Une étoile pour le courage de la saucisse, qui n'avait rien demandé."
                        ],
                        [
                            "pseudo" => "Lucas, 19 ans, étudiant",
                            "note" => 3,
                            "texte" => "Ça tient une semaine au frigo et ça coûte trois euros. Je ne juge pas, je survis."
                        ]
                    ];
                    include "../components/commentaires.php";
                ?>
            </article>
            <?php
                $fichier = "recette-pain-macaroni-saucisses.php";
                include "../components/autres-recettes.php";
            ?>
        </main>
        <?php
            include "../components/footer.php";
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
