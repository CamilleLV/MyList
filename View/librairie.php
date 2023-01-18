<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./Assets/Images/Logo_MyList.png" />
    <link rel="stylesheet" type="text/css" href="./Assets/CSS/librairie.css">
    <link rel="stylesheet" type="text/css" href="./Assets/CSS/commun.css">
    <title>Librairie | MyList</title>
</head>

<body>
    <form id="searchbox" action="index.php" method="get">
        <input name=titre type="search" size="15" placeholder="Rechercher…">
        <input name="action" id="button-submit" type="submit" value="search"> <!--name="s"-->
    </form>
    <section>
        <h1>Comédie</h1>
        <ul class="carousel">
            <?php
            //On affiche chaque film un par un
            foreach ($recipes as $recipe) {
                if (($recipe["genre_1"] == "Comédie") || ($recipe["genre_2"] == "Comédie") || ($recipe["genre_3"] == "Comédie")) {
                    echo '  
                        <li>
                            <div class="films_titres_et_oeuvres">
                                <a href="index.php?action=oeuvre&id=' . $recipe["id"] . '">
                                        <img class = "image" src='.$recipe["url_img"].'>
                                    <h5>' . $recipe["title"]. '</h5>
                                </a>
                            </div>
                        </li>';
                }
            }
            ?>
        </ul>
    </section>
</body>

</html>