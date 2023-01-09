<?php
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="Assets/Images/Logo_MyList.png" />
    <link rel="stylesheet" href="../Assets/CSS/oeuvre.css">
    <!--<link rel="stylesheet" type="text/css" href="Assets/CSS/index.css">-->
    <link rel="stylesheet" type="text/css" href="Assets/CSS/commun.css">
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
                
                    <button id="ajouterFilm" class="button-24" role="button">' . $infoButton . '</button>
                
                <p>' . $recipe["synopsis"] . '</p>
        
            </div>
            <div class="gauche">
                <img src=' . $recipe["url_img"] . ' style="width:300px;height:411px;">
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

    /*if(isset($_POST['submit'])) {
    try {
    // On se connecte à MySQL
    $host = 'mysql:host=localhost;dbname=sae;charset=utf8';
    $user = 'root';
    $passworld = '';
    $mysqlClient = new PDO($host, $user, $passworld);
    } catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
    }
    
    // Si tout va bien, on peut continuer
    
    /* On récupère l'action de suppression
    $sqlQuery = 'SELECT * FROM films';
    $stmt = $mysqlClient->prepare($sqlQuery);
    $stmt->execute();
    
    $id_user = $_POST['ID_USER'];
    $id_film = $_POST['ID_FILM'];
    
    $query = "DELETE FROM `film_liker` WHERE id_user =':id_user' AND id =':id_film'";
    $stmt = $mysqlClient->prepare($sqlQuery);
    $stmt->bindParam(":id_user", $id_user);
    $stmt->bindParam(":id_film", $id_film);
    $stmt->execute();
    
    }*/

    ?>

    <script src="Assets/JS/index.js"></script>
</body>

</html>