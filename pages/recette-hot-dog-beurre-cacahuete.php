<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hot-dog au beurre de cacahuète - La Cuisine</title>
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
                <h1>Hot-dog au beurre de cacahuète</h1>
                <p>Pour 4 personnes. Préparation: 10 minutes. Cuisson: 10 minutes environ. Recette "Dixie Dog" tirée du "Big Boy Barbecue Book".</p>
                <div class="row g-4">
                    <section class="col-md-6">
                        <div class="encadre">
                            <h2>Ingrédients</h2>
                            <ul>
                                <li>4 saucisses à hot-dog</li>
                                <li>4 cuillères à soupe de beurre de cacahuète</li>
                                <li>4 tranches de bacon</li>
                                <li>4 pains à hot-dog</li>
                            </ul>
                        </div>
                    </section>
                    <section class="col-md-6">
                        <div class="encadre">
                            <h2>Ustensiles</h2>
                            <ul>
                                <li>Un barbecue ou gril</li>
                                <li>Un couteau</li>
                                <li>Une petite cuillère ou couteau à tartiner</li>
                                <li>Une pince de cuisine</li>
                                <li>Des cure-dents</li>
                                <li>Des assiettes</li>
                            </ul>
                        </div>
                    </section>
                </div>
                <section>
                    <h2>Galerie</h2>
                    <div id="carouselHotDogCacahuete" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../images/hot-dog-cacahuete-1.jpg" class="d-block w-100 photo-carousel" alt="Saucisse enroulée de bacon dans un pain à hot-dog">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/hot-dog-cacahuete-2.jpg" class="d-block w-100 photo-carousel" alt="Pot de beurre de cacahuète">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/hot-dog-cacahuete-3.jpg" class="d-block w-100 photo-carousel" alt="Hot-dog au bacon garni">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselHotDogCacahuete" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselHotDogCacahuete" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </section>
                <section>
                    <h2>Préparation</h2>
                    <ol>
                        <li>Allumer le barbecue ou préchauffer le gril.</li>
                        <li>Fendre chaque saucisse dans la longueur, sans la couper complètement.</li>
                        <li>Ouvrir les saucisses et tartiner les faces coupées de beurre de cacahuète.</li>
                        <li>Refermer les saucisses.</li>
                        <li>Enrouler une tranche de bacon autour de chaque saucisse.</li>
                        <li>Fixer les extrémités du bacon avec des cure-dents.</li>
                        <li>Poser les saucisses sur le gril.</li>
                        <li>Faire griller jusqu'à ce que le bacon soit cuit à votre goût, en retournant une fois avec la pince.</li>
                        <li>Pendant ce temps, ouvrir les pains et les faire griller quelques instants.</li>
                        <li>Retirer les cure-dents.</li>
                        <li>Glisser une saucisse dans chaque pain et servir aussitôt.</li>
                    </ol>
                </section>
                <section>
                    <h2>Commentaire</h2>
                    <p>Le beurre de cacahuète a tendance à fondre et à couler avant que le bacon soit cuit: du bacon précuit et des cure-dents limitent les dégâts.</p>
                </section>
                <section>
                    <h2>Un peu d'histoire</h2>
                    <p>Le "Dixie Dog" vient du "Big Boy Barbecue Book", un livre de recettes de barbecue américain du milieu du XXe siècle. À cette époque, le barbecue au jardin devenait un loisir populaire dans les banlieues des États-Unis, et les livres de cuisine proposaient des dizaines de façons de transformer un simple hot-dog.</p>
                    <p>Le beurre de cacahuète, lui, était déjà un incontournable des placards américains. L'idée de l'associer au bacon et à la saucisse reste, encore aujourd'hui, assez audacieuse.</p>
                </section>
                <section>
                    <h2>Astuces</h2>
                    <ul>
                        <li>Utiliser du bacon précuit: il cuit plus vite que le beurre de cacahuète ne fond.</li>
                        <li>Bien fixer le bacon avec les cure-dents, sinon le beurre de cacahuète coule dans le barbecue.</li>
                        <li>Prévoir des serviettes: c'est un plat qui colle.</li>
                        <li>Garder un hot-dog classique sous la main pour les invités moins aventureux.</li>
                    </ul>
                </section>
                <section>
                    <h2>Note</h2>
                    <?php
                        $note = 2;
                        include "../components/etoiles.php";
                    ?>
                </section>
                <?php
                    $commentaires = [
                        [
                            "pseudo" => "Brandon_Barbecue",
                            "note" => 4,
                            "texte" => "Sucré, salé, gras, collant. Tout ce que mon médecin m'interdit, dans un seul pain."
                        ],
                        [
                            "pseudo" => "Hélène",
                            "note" => 1,
                            "texte" => "Le beurre de cacahuète a fondu dans le barbecue. Le barbecue sent la cacahuète depuis trois mois."
                        ],
                        [
                            "pseudo" => "Tonton Gérard",
                            "note" => 2,
                            "texte" => "J'en ai mangé un. Puis j'ai regardé le deuxième longtemps. Puis je suis parti."
                        ]
                    ];
                    include "../components/commentaires.php";
                ?>
            </article>
            <?php
                $fichier = "recette-hot-dog-beurre-cacahuete.php";
                include "../components/autres-recettes.php";
            ?>
        </main>
        <?php
            include "../components/footer.php";
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
