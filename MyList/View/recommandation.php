<?php
// Initialiser la session
//session_start();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if (!isset($_SESSION["username"])) {
	header("Location: ./registration/login.php");
	exit();
}
?>
<!DOCTYPE html>
<html>

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
<h3>Les Recommandations</h3>
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
                                </a>
                        </div>';
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