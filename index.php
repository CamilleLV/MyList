<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>
        <?php
            try
            {
                // On se connecte à MySQL
                $mysqlClient = new PDO('mysql:host=localhost;dbname=sae;charset=utf8', 'root', '');
            }
            catch(Exception $e)
            {
                // En cas d'erreur, on affiche un message et on arrête tout
                    die('Erreur : '.$e->getMessage());
            }

            // Si tout va bien, on peut continuer

            // On récupère tout le contenu de la table recipes
            $sqlQuery = 'SELECT * FROM oeuvre';
            $recipesStatement = $mysqlClient->prepare($sqlQuery);
            $recipesStatement->execute();
            $recipes = $recipesStatement->fetchAll();

            // On affiche chaque recette une à une
            foreach ($recipes as $recipe) {
                echo '<p>'.$recipe['titre'].'</p>';
                echo '<img src="'.$recipe['photo'].'">';
                echo "<br>";
            }
        ?>
    </body>
</html>