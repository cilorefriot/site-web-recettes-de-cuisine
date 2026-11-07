<section class="commentaires">
    <h2>Commentaires</h2>
    <p>Avis imaginaires, écrits pour rire.</p>
    <?php
        foreach ($commentaires as $numero => $commentaire) {
            if ($numero > 0) {
                echo "<hr>";
            }
    ?>
    <div class="commentaire">
        <h3><?php echo $commentaire["pseudo"]; ?></h3>
        <?php
            $note = $commentaire["note"];
            include "../components/etoiles.php";
        ?>
        <p><?php echo $commentaire["texte"]; ?></p>
    </div>
    <?php
        }
    ?>
</section>
