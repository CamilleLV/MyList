<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../Assets/Images/Logo_MyList.png" />
    <link rel="stylesheet" type="text/css" href="../Assets/CSS/index.css">
    <link rel="stylesheet" type="text/css" href="../Assets/CSS/commun.css">
    <title>Accueil | MyList</title>
</head>

<body onload="diaporama()">
    <header>
        <nav>
            <a href="index.php"><img id="logoMyList" src="../Assets/Images/Logo_MyList.png" alt="Logo MyList"
                    width="100   " height="100"></a>
            <div id="acces_profil">
                <img id="personnage" src="../Assets/Images/Personnage.png" alt="Logo personnage" width="100"
                    height="100">
                <ul>
                    <li><a href="#">Modifier le profil</a></li>
                    <li><a href="#">Ma liste</a></li>
                    <li><a href="#">Deconnexion</a></li>
                </ul>
            </div>

            <ul style="padding:0;">
                <li>
                    <h1><a href="librairie.html">Librairie</a></h1>
                </li>
                <li>
                    <h1><a href="suggerer_oeuvre.html">Suggérer une oeuvre</a></h1>
                </li>
            </ul>
        </nav>
    </header>

    <h2> Bienvenue sur MyList ! </h2>

    <!-- input tag --
    <input id="searchbar" onkeyup="recherche()" type="text" name="search" placeholder="Rechercher une oeuvre">
    <input id= "button-submit" type="submit" value="OK !">-->
    <style>
        #searchbox {
            background: #d8d8d8;
            border: 4px solid #e8e8e8;
            padding: 20px 10px;
            width: 30%;
            margin: auto;
        }

        input:focus::-webkit-input-placeholder {
            color: transparent;
        }

        input:focus:-moz-placeholder {
            color: transparent;
        }

        input:focus::-moz-placeholder {
            color: transparent;
        }

        #searchbox input {
            outline: none;
        }

        #searchbox input[type="text"] {
            background: url(http://2.bp.blogspot.com/-xpzxYc77ack/VDpdOE5tzMI/AAAAAAAAAeQ/TyXhIfEIUy4/s1600/search-dark.png) no-repeat 10px 6px #fff;
            border-width: 1px;
            border-style: solid;
            border-color: #fff;
            font: bold 12px Arial, Helvetica, Sans-serif;
            color: #bebebe;
            width: 65%;
            padding: 8px 15px 8px 30px;
        }

        #button-submit {
            background: #D89E5A;
            border-width: 0px;
            padding: 9px 0px;
            width: 23%;
            cursor: pointer;
            font: bold 12px Arial, Helvetica;
            color: #fff;
            text-shadow: 0 1px 0 #555;
        }

        #button-submit:hover {
            background: #7B562B;
        }

        #button-submit:active {
            background: #553f26;
            outline: none;
        }

        #button-submit::-moz-focus-inner {
            border: 0;
        }
    </style>

    <form id="searchbox" method="get" action="search">
        <input name="q" type="text" size="15" placeholder="Type here…">
        <input id="button-submit" type="submit" value="Search">
    </form>

    <h3> Les Classiques : </h3>
    <div id="classiques" class="">
        <!-- TEST D'affichage d'une image venant de la base de donnée d'allociné
            <img src="https://fr.web.img2.acsta.net/c_310_420/pictures/15/10/13/15/12/514297.jpg" height="200px">
        -->

    </div>
    <h3> Recommandations : </h3>
    <div id="recommandations" class="">

        <?php
        try {
            // On se connecte à MySQL
            $host = 'mysql:host=localhost;dbname=sae;charset=utf8';
            $user = 'root';
            $passeworld = '';
            $mysqlClient = new PDO($host, $user, $passeworld);
        } catch (Exception $e) {
            // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : ' . $e->getMessage());
        }

        // Si tout va bien, on peut continuer
        
        // On récupère tout le contenu de la table recipes
        $sqlQuery = 'SELECT * FROM films';
        $recipesStatement = $mysqlClient->prepare($sqlQuery);
        $recipesStatement->execute();
        $recipes = $recipesStatement->fetchAll();
        ?>
        <section>
            <h1>Tous Les Films</h1>
            <ul class="carousel">
                <?php
                //On affiche chaque film un par un
                foreach ($recipes as $recipe) {
                    echo '<li>
                            <div class="films_titres_et_oeuvres" style=" width: 175px; height: 260px; border: 1px solid black; background-color: #ffff">
                                <div class="films_oeuvres"style="height: 80%;
                                width: 100%;background-image: url(' . $recipe["url_img"] . '); background-position: center; background-size: 175px 200px;">
                                </div>
                                <h5 class="films_titres"style=" font-size: 10px">' . $recipe["title"] . '</h5>
                            </div>
                            </li>';
                }
                ?>
            </ul>
        </section>
    </div>

    <h3> </h3>
    <footer>
        <h3>Nous contacter: </h3>
    </footer>


    <script src="../Assets/JS/index.js"></script>
</body>

</html>