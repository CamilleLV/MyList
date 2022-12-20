<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="Assets/Images/Logo_MyList.png" />
    <link rel="stylesheet" type="text/css" href="Assets/CSS/index.css">
    <link rel="stylesheet" type="text/css" href="Assets/CSS/commun.css">
    <title><?php 
    /**
     * Voir si cela affiche bien le titre de l'oeuvre de la page car le chargement se fait en-dessous.
     */
    echo '  <h2>title :'.$recipe["title"].'</h2> '?> | MyList</title>
</head>
<body>
    <?php
        foreach ($recipes as $recipe) {
            if ($recipe["id"] == $id){
                echo '  <h2>title :'.$recipe["title"].'</h2>
                        <div><img src='.$recipe["url_img"].'></div>
                        <p>id : '.$recipe["id"].'</p>
                        <p>date_sortie : '.$recipe["date_sortie"].'</p>
                        <p>duree : '.$recipe["duree"].'</p>
                        <ul>
                            <h2>genre</h2>
                            <li>'.$recipe["genre_1"].'</li>
                            <li>'.$recipe["genre_2"].'</li>
                            <li>'.$recipe["genre_3"].'</li>
                        </ul>
                        <p>realisateur : '.$recipe["realisateur"].'</p>
                        <ul>
                            <h2>acteur</h2>
                            <li>'.$recipe["acteur_1"].'</li>
                            <li>'.$recipe["acteur_2"].'</li>
                            <li>'.$recipe["acteur_3"].'</li>
                        </ul>
                        <p>synopsis : '.$recipe["synopsis"].'</p>
                        <p>note_spectateur : '.$recipe["note_spectateurs"].'</p>';
            }
        }
    ?>

</body>
</html>