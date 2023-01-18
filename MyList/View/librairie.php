<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./Assets/Images/Logo_MyList.png" />
    <link rel="stylesheet" type="text/css" href="Assets/CSS/toutespages.css">
    <link rel="stylesheet" type="text/css" href="Assets/CSS/librairie.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" type="text/css" href="Assets/CSS/swiper-bundle.min.css">

    <title>Librairie | MyList</title>
</head>

<body>
    <h2> </h2>

    <form id="searchbox" action="index.php" method="get">
        <input name=titre type="search" size="15" placeholder="Rechercher…">
        <input name="action" id="button-submit" type="submit" value="Rechercher">
    </form>

    <h3>Comédie</h3>
    <div class="container swiper">
        <div class="slide-container">
            <div class="card-wrapper swiper-wrapper">

            <?php
                //On affiche chaque film un par un
                $nb_film = 0;
            foreach ($recipes as $recipe) {
                if (($nb_film < 14)) {
                    if (($recipe["genre_1"] == "Comédie") || ($recipe["genre_2"] == "Comédie") || ($recipe["genre_3"] == "Comédie")) {
                        $nb_film++;
                        echo '
              <div class="card swiper-slide">
                        <a href="index.php?action=oeuvre&id=' . $recipe["id"] . '">
                            <div class="image-box">
                                <img src="' . $recipe["url_img"] . '" alt="" />
                            </div>
                            <div class="details">
                                <div class="name-job">
                                    <h3 class="name">' . $recipe["title"] . '</h3>
                                </div>
                            </div>
                        </a>
                </div>';
                    }
                }
            } ?>

            </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>

    <h3>Action</h3>
    <div class="container swiper">
        <div class="slide-container">
            <div class="card-wrapper swiper-wrapper">

            <?php
                //On affiche chaque film un par un
                $nb_film = 0;
            foreach ($recipes as $recipe) {
                if (($nb_film < 14)) {
                    if (($recipe["genre_1"] == "Action") || ($recipe["genre_2"] == "Action") || ($recipe["genre_3"] == "Action")) {
                        $nb_film++;
                        echo '
              <div class="card swiper-slide">
                        <a href="index.php?action=oeuvre&id=' . $recipe["id"] . '">
                            <div class="image-box">
                                <img src="' . $recipe["url_img"] . '" alt="" />
                            </div>
                            <div class="details">
                                <div class="name-job">
                                    <h3 class="name">' . $recipe["title"] . '</h3>
                                </div>
                            </div>
                        </a>
                </div>';
                    }
                }
            } ?>

            </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>

    <h3>Animation</h3>
    <div class="container swiper">
        <div class="slide-container">
            <div class="card-wrapper swiper-wrapper">

            <?php
                //On affiche chaque film un par un
                $nb_film = 0;
            foreach ($recipes as $recipe) {
                if (($nb_film < 14)) {
                    if (($recipe["genre_1"] == "Animation") || ($recipe["genre_2"] == "Animation") || ($recipe["genre_3"] == "Animation")) {
                        $nb_film++;
                        echo '
              <div class="card swiper-slide">
                        <a href="index.php?action=oeuvre&id=' . $recipe["id"] . '">
                            <div class="image-box">
                                <img src="' . $recipe["url_img"] . '" alt="" />
                            </div>
                            <div class="details">
                                <div class="name-job">
                                    <h3 class="name">' . $recipe["title"] . '</h3>
                                </div>
                            </div>
                        </a>
                </div>';
                    }
                }
            } ?>

            </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>

    <script src="./Assets/JS/swiper-bundle.min.js"></script>
    <script src="./Assets/JS/index.js"></script>
</body>

</html>