<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style_index.css">
    </head>
    <body>
        <section>
            <h1>tout les films</h1>
            <ul class="carousel">
                <?php
                    //On affiche chaque film un par un
                    foreach ($recipes as $recipe) {
                        echo '<li>
                                <h2>'.$recipe["title"].'</h2>
                                <a href="index.php?action=oeuvre&id='.$recipe["id"].'"><img src='.$recipe["url_img"].' class="agrandir_oeuvre"></a>
                            </li>';
                    }
                ?>
            </ul>
        </section>
        <section>
            <h1>films avec une note = à 5</h1>
            <ul class="carousel">
                <?php
                    //On affiche chaque film un par un
                    foreach ($recipes as $recipe) {
                        if (($recipe["note_spectateurs"] === "5,0") && ($recipe["note_spectateurs"] !== "")){
                            echo '<li>
                                    <h2>'.$recipe["title"].'</h2>
                                    <a href="index.php?action=oeuvre&id='.$recipe["id"].'"><img src='.$recipe["url_img"].' class="agrandir_oeuvre"></a>
                                </li>';
                        }
                    }
                ?>
            </ul>
        </section>
        <section>
            <h1> 10 films aléatoire</h1>
            <!-- on peut avoir plusieur fois le même film-->
            <ul class="carousel">
                <?php
                    //On affiche chaque film un par un
                    $nb_film = 0;
                    while ($nb_film !== 10) {
                        $i = 0;
                        $x = rand(0, count($recipes));
                        foreach ($recipes as $recipe) {
                            if ($i === $x){
                                echo '<li>
                                        <h2>'.$recipe["title"].'</h2>
                                        <a href="index.php?action=oeuvre&id='.$recipe["id"].'"><img src='.$recipe["url_img"].' class="agrandir_oeuvre"></a>
                                    </li>';
                                $nb_film++;
                            }
                            $i++;
                        }
                    }
                ?>
            </ul>
        </section>
    </body>
</html>