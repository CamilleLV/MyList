<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="./Assets/Images/Logo_MyList.png" />
    <link rel="stylesheet" type="text/css" href="./Assets/CSS/index.css">
    <link rel="stylesheet" type="text/css" href="./Assets/CSS/toutespages.css">
    <title>Recherche | MyList</title>
</head>
<!-- J'ai essayé de faire via un tuto, que j'ai adapter à nos infos, la balise php ci-dessous est la version de 
la branche d'adrien d'affichage et la balise encore dessous est celle du tuto. Ca produit une erreur le resultat et j'ai peur que
 ce soit la façon de faire qui bloque, peut etre faut-il utiliser l index.php pour pouvoir effectuer la recherche ? -->

<body>
    <h3>Résultats correspondant à la recherche "<?php echo $terme;?>" : </h3>
    <?php

    //On affiche le ou les film(s) en question
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
</body>

</html>