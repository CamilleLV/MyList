<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>oeuvre</title>
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
    <?php
        $titre = $_GET["titre"];

        foreach ($recipes as $recipe) {
            if ($recipe["title"] == $titre){
                echo '  <h2>'.$recipe["title"].'</h2>
                        <p>'.$recipe["urlPage"].'</p>
                        <p>'.$recipe["duree"].'</p>
                        <div><img src='.$recipe["urlImg"].'></div>
                        <p>'.$recipe["date"].'</p>
                        <p>'.$recipe["realisateur"].'</p>
                        <p>'.$recipe["cast/0"].'</p>
                        <p>'.$recipe["cast/1"].'</p>
                        <p>'.$recipe["cast/2"].'</p>
                        <p>'.$recipe["synopsis"].'</p>
                        <p>'.$recipe["note-spectateurs"].'</p>';
            }
        }
    ?>

</body>
</html>