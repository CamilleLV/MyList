<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="./Assets/Images/Logo_MyList.png" />
    <link rel="stylesheet" type="text/css" href="Assets/CSS/homepage.css">
    <link rel="stylesheet" type="text/css" href="Assets/CSS/commun.css">
    <link rel="stylesheet" type="text/css" href="Assets/CSS/swiper-bundle.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />

    <title>Accueil | MyList</title>
</head>

<body onload="diaporama()"> <!-- diaporama() provenant d'index.js aka programme inutile qui affiche dans les classiques le tableau -->
    <h2> Bienvenue sur MyList ! </h2>

    <form id="searchbox" action="index.php" method="get">
        <input name=titre type="search" size="15" placeholder="Rechercher…">
        <input name="action" id="button-submit" type="submit" value="Rechercher">
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
                        </div>
                        </a>';
            } ?>
          
        </div>
      </div>
      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <div class="swiper-pagination"></div>
    </div>

    <script src="Assets/JS/swiper-bundle.min.js"></script>
    <script src="Assets/JS/index.js"></script>
  </body>
</body>

</html>