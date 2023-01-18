<header>
    <nav>
        <a href="index.php"><img id="logoMyList" src="Assets/Images/Logo_MyList.png" alt="Logo MyList" width="100   "
                height="100"></a>

        <a href="index.php?action=userPage"><img id="personnage" src="Assets/Images/Personnage.png"
                alt="Logo personnage" width="110" height="100"></a>

        <ul style="padding:0;">
            <li>
                <h1><a href="index.php?action=librairie">Librairie</a></h1>
                <h1><a href="suggerer_oeuvre.html">Suggérer une oeuvre</a></h1>
                <?php
                // Initialiser la session
                //session_start();
                // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
                if (!isset($_SESSION["username"])) {
                    echo '<h1><a href="registration/login.php">Connexion</a></h1>';
                } else{
                    echo '<h1><a href="registration/logout.php">Déconnexion</a></h1>';
                }
                ?>
            </li>
        </ul>
    </nav>
</header>