<p>
    <span class="etoiles">
        <?php
            for ($i = 1; $i <= 5; $i++) {
                if ($i <= $note) {
                    echo "★";
                } else {
                    echo "☆";
                }
            }
        ?>
    </span>
    <?php echo $note; ?> / 5
</p>
