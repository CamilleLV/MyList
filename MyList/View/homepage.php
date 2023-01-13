<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="./Assets/Images/Logo_MyList.png" />
    <link rel="stylesheet" type="text/css" href="./Assets/CSS/index.css">
    <link rel="stylesheet" type="text/css" href="./Assets/CSS/commun.css">
    <link rel="stylesheet" type="text/css" href="./Assets/CSS/swiper-bundle.min.css">

    <title>Accueil | MyList</title>
</head>

<body>
    <h2> Bienvenue sur MyList ! </h2>

    <form id="searchbox" action="index.php" method="get">
        <input name=titre type="search" size="15" placeholder="Rechercher…">
        <input name="action" id="button-submit" type="submit" value="search">
    </form>

    <h3> Les Classiques : </h3>
    <div id="classiques" class="">
    </div>
    <h3> Recommandations : </h3>
    <div id="recommandations" class="">
        <section>
            <h1>Tous Les Films</h1>

            <div class="container swiper">
                <div class="slide-container">
                    <div class="card-wrapper swiper-wrapper">

                        <?php
                        foreach ($recipes as $recipe) {
                            echo '
                        <a href="index.php?action=oeuvre&id=' . $recipe["id"] . '">
                        <div class="card swiper-slide">
                            <div class="image-box">
                                <img src="' . $recipe["url_img"] . '" alt="" />
                            </div>
                            <div class="details">
                                <div class="name-job">
                                    <h3 class="name">' . $recipe["title"] . '</h3>
                                </div>
                            </div>
                        </div>
                        </a>';
                        } ?>


                    </div>
                </div>
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>

            </div>


            <!--<ul class="carousel">
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
            </ul>-->
        </section>
    </div>
    <script src="./Assets/JS/index.js"></script>
    <script src="./Assets/JS/swiper-bundle.min.js"></script>

</body>

</html>