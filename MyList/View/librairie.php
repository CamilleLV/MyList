<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./Assets/Images/Logo_MyList.png" />
    <link rel="stylesheet" type="text/css" href="./Assets/CSS/index.css">
    <link rel="stylesheet" type="text/css" href="./Assets/CSS/toutespages.css">
    <title>Librairie | MyList</title>
</head>

<body>
    <form id="searchbox" action="index.php" method="get">
        <input name=titre type="search" size="15" placeholder="Rechercher…">
        <input name="action" id="button-submit" type="submit" value="search"> <!--name="s"-->
    </form>
    <h3> Tous les Films : </h3>
    <div id="recommandations" class="">
        <section>
            <ul class="carousel">
                <?php
                //On affiche chaque film un par un
                foreach ($recipes as $recipe) {
                    echo '<li>
                            <div class="films_titres_et_oeuvres" style=" width: 175px; height: 260px; border: 1px solid black; background-color: #ffff">
                                <a href="index.php?action=oeuvre&id=' . $recipe["id"] . '">
                                    <div class="films_oeuvres"style="height: 80%;
                                    width: 100%;background-image: url(' . $recipe["url_img"] . '); background-position: center; background-size: 175px 200px;">
                                    </div>
                                    <h5 class="films_titres"style=" font-size: 10px">' . $recipe["title"] . '</h5>
                                </a>
                            </div>
                            </li>';
                }
                ?>
            </ul>
        </section>
        <script src="Assets/JS/index.js"></script>
</body>

</html>