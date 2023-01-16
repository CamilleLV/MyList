<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="Assets/Images/Logo_MyList.png" />
    <link rel="stylesheet" href="Assets/CSS/oeuvre.css">
    <!--<link rel="stylesheet" type="text/css" href="Assets/CSS/index.css">-->
    <link rel="stylesheet" type="text/css" href="Assets/CSS/toutespages.css">

    <title><?php
    /**
     * Voir si cela affiche bien le titre de l'oeuvre de la page car le chargement se fait en-dessous.
     */
    foreach ($recipes as $recipe) {
        if ($recipe["id"] == $id) {
            echo '' . $recipe["title"] . ' ' ?> | MyList</title><?php
        }
    }
                   ?>


</head>

<body>
    <?php
    foreach ($recipes as $recipe) {
        if ($recipe["id"] == $id) {
            echo '<div class="droite">
                <h2>' . $recipe["title"] . '</h2>
                <p>' . $recipe["synopsis"] . '</p>
        
            </div>
            <div class="gauche">
                <img src=' . $recipe["url_img"] . '>
                <ul>
                    <p>Réalisateur : ' . $recipe["realisateur"] . '</p>
                    <p>Date de sortie : ' . $recipe["date_sortie"] . ' </p>
                    <p>Durée : ' . $recipe["duree"] . ' </p>
                    <p>Note des spectateurs : ' . $recipe["note_spectateurs"] . '</p>
                </ul>
                <h2>Genre(s)</h2>
                <ul>
                    <li>' . $recipe["genre_1"] . '</li>
                    <li>' . $recipe["genre_2"] . '</li>
                    <li>' . $recipe["genre_3"] . '</li>
                </ul>
                <h2>Acteur(s)/Actrice(s)</h2>
                <ul>
                    <li>' . $recipe["acteur_1"] . '</li>
                    <li>' . $recipe["acteur_2"] . '</li>
                    <li>' . $recipe["acteur_3"] . '</li>
                </ul>
            </div>';
        }
    }
    ?>

</body>

</html>