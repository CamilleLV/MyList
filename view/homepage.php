<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../Assets/CSS/index.css">
    <link rel="stylesheet" type="text/css" href="../Assets/CSS/commun.css">
    <title>Accueil | MyList</title>
</head>

<body onload="diaporama()">
    <header>
        <nav>
            <a href="index.html"><img id="logoMyList" src="../Assets/Images/Logo_MyList.png" alt="Logo MyList"
                    width="100   " height="100"></a>
            <img id="personnage" src="../Assets/Images/Personnage.png" alt="Logo personnage" width="100" height="100">

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

    <form id="searchbox" method="get" action="search">
        <input name="q" type="text" size="15" placeholder="Type here…">
        <input id="button-submit" type="submit" value="Search">
    </form>

    <h3> Les Classiques : </h3>
    <div id="classiques" class="">
        <?php
            //On affiche chaque film un par un
            foreach ($recipes as $recipe) {
                echo '<li>
                        <a href="index.php?action=oeuvre&id='.$recipe["id"].'"><img src='.$recipe["url_img"].'></a>
                    </li>';
            }
        ?>
    </div>
    <h3> Recommandations : </h3>
    <div id="recommandations" class="">
        
    </div>

    <h3> </h3>
    <footer>
        <h3>Nous contacter: </h3>
    </footer>
</body>

</html>