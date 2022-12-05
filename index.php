<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style_index.css">
    </head>
    <body>
        <?php
            try
            {
                // On se connecte à MySQL
                $host = 'mysql:host=localhost;dbname=sae;charset=utf8';
                $user = 'root';
                $passeworld = '';
                $mysqlClient = new PDO($host, $user, $passeworld);
            }
            catch(Exception $e)
            {
                // En cas d'erreur, on affiche un message et on arrête tout
                    die('Erreur : '.$e->getMessage());
            }

            // Si tout va bien, on peut continuer

            // On récupère tout le contenu de la table recipes
            $sqlQuery = 'SELECT * FROM films2';
            $recipesStatement = $mysqlClient->prepare($sqlQuery);
            $recipesStatement->execute();
            $recipes = $recipesStatement->fetchAll();
        ?>
        <section>
            <h1>tout les films</h1>
            <ul class="carousel">
                <?php
                //On affiche chaque film un par un
                foreach ($recipes as $recipe) {
                    echo '<li>
                            <h2>'.$recipe["title"].'</h2>
                            <a href="oeuvre.php?urlPage='.$recipe["urlPage"].'"><img src='.$recipe["urlImg"].' class="agrandir_oeuvre"></a>
                        </li>';
                }
                ?>
            </ul>
        </section>
        <section>
            <h1>films avec une img</h1>
            <ul class="carousel">
                <?php
                //On affiche chaque film un par un
                foreach ($recipes as $recipe) {
                    if ($recipe["urlImg"] !== "noImg.jpg"){
                        echo '<li>
                                <h2>'.$recipe["title"].'</h2>
                                <a href="oeuvre.php?urlPage='.$recipe["urlPage"].'"><img src='.$recipe["urlImg"].' class="agrandir_oeuvre"></a>
                            </li>';
                    }
                }
                ?>
            </ul>
        </section>
        <section>
            <h1>films avec une note > ou = à 4,5</h1>
            <ul class="carousel">
                <?php
                //On affiche chaque film un par un
                foreach ($recipes as $recipe) {
                    if ($recipe["note_spectateurs"] > "4,4"){
                        echo '<li>
                                <h2>'.$recipe["title"].'</h2>
                                <a href="oeuvre.php?urlPage='.$recipe["urlPage"].'"><img src='.$recipe["urlImg"].' class="agrandir_oeuvre"></a>
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
                    $x = rand(0, count($recipe));
                    foreach ($recipes as $recipe) {
                        if ($i === $x){
                            echo '<li>
                                    <h2>'.$recipe["title"].'</h2>
                                    <a href="oeuvre.php?urlPage='.$recipe["urlPage"].'"><img src='.$recipe["urlImg"].' class="agrandir_oeuvre"></a>
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