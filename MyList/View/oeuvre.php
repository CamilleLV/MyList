<?php
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="Assets/Images/Logo_MyList.png" />
    <link rel="stylesheet" href="../Assets/CSS/oeuvre.css">
    <link rel="stylesheet" type="text/css" href="Assets/CSS/toutespages.css">
    <title>
        <?php
        /**
         * Traitement par ligne nécessaire pour l'affichage des données.
         */
        foreach ($recipes as $recipe) {
            if ($recipe["id"] == $id) {
                echo '' . $recipe["title"] . ' ' ?> | MyList
            </title><?php
            }
        }
        ?>


</head>

<body>
    <?php

    /*Insérer ici un if cherchant à savoir si l'utilisateur doit voir un bouton ajouter ou supprimer de sa liste.
    foreach ($values as $val) {
    if ($val["id"] == $id) {
    }
    }
    */

    $valVerif = verifIDFilm($id);

    if ($valVerif == 1) {
        $infoButton = "Supprimer de ma Liste";
    } else {
        $infoButton = "Ajouter à ma Liste";
    }

    /**
     * Traitement par ligne nécessaire pour l'affichage des données.
     */
    foreach ($recipes as $recipe) {
        if ($recipe["id"] == $id) {

            echo '<div class="droite">
                <h2>' . $recipe["title"] . '</h2>
                
                ';
                
                if(!isset($_SESSION["username"])) {
                    echo '<I style=" font-size : 20px; ">(Pour ajouter cette oeuvre à votre liste,<a href="registration/login.php"> connectez-vous !</a></I>';
                }else{
                    echo '<button id="ajouterFilm" class="button-24" role="button">' . $infoButton . '</button>';
                }
            echo'
                <p>' . $recipe["synopsis"] . '</p>
        
            </div>
            <div class="gauche">
                <img src=' . $recipe["url_img"] . ' style="width:300px;height:411px;">
                <h2>Informations générales</h2>
                <ul>
                    <p><b>Réalisateur :</b> ' . $recipe["realisateur"] . '</p>
                    <p><b>Date de sortie :</b> ' . $recipe["date_sortie"] . ' </p>
                    <p><b>Durée :</b> ' . $recipe["duree"] . ' </p>
                    <p><b>Note des spectateurs :</b> ' . $recipe["note_spectateurs"] . '</p>
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

    <script src="Assets/JS/oeuvreAddFilm.js"></script>
</body>

</html>