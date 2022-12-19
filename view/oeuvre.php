<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>oeuvre</title>
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