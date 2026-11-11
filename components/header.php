        <header>
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.php">La Cuisine</a>
                    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navMenu">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link <?php if ($page == "accueil") { echo "active"; } ?>" href="../index.php">Accueil</a></li>
                            <li class="nav-item"><a class="nav-link <?php if ($page == "recettes") { echo "active"; } ?>" href="../pages/recettes.php">Recettes</a></li>
                            <li class="nav-item"><a class="nav-link <?php if ($page == "a-propos") { echo "active"; } ?>" href="../pages/a-propos.php">A propos</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
