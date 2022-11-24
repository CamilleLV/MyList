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
            $sqlQuery = 'SELECT * FROM films';
            $recipesStatement = $mysqlClient->prepare($sqlQuery);
            $recipesStatement->execute();
            $recipes = $recipesStatement->fetchAll();
        ?>
            <section>
            <h1>film</h1>
            <ul class="carousel">
                <?php
                //On affiche chaque recette une à une
                foreach ($recipes as $recipe) {
                    echo '<li>
                            <h2>'.$recipe["title"].'</h2>
                            <a href="oeuvre.php"><img src='.$recipe["urlImg"].' class="agrandir_oeuvre"></a>
                        </li>';

                    /*echo '<p>'.$recipe['title'].'</p>';
                    echo '<img src="'.$recipe['urlImg'].'">';
                    echo "<br>";*/
                }
                ?>
            </ul>
        </section>
    </body>
</html>