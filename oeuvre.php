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
        $sqlQuery = 'SELECT * FROM films2';
        $recipesStatement = $mysqlClient->prepare($sqlQuery);
        $recipesStatement->execute();
        $recipes = $recipesStatement->fetchAll();
    ?>
    <?php
        //j'utilise urlPage car il sont tous différent
        //et en titre il y a deux fois "la vie est belle"
        $urlPage = $_GET["urlPage"];

        foreach ($recipes as $recipe) {
            if ($recipe["urlPage"] == $urlPage){
                echo '  <h2>title :'.$recipe["title"].'</h2>
                        <p>urlPage :'.$recipe["urlPage"].'</p>
                        <p>duree :'.$recipe["duree"].'</p>
                        <div><img src='.$recipe["urlImg"].'></div>
                        <p>date_sortie :'.$recipe["date_sortie"].'</p>
                        <p>réalisateur :'.$recipe["realisateur"].'</p>
                        <p>cast_0 :'.$recipe["cast_0"].'</p>
                        <p>cast_1 :'.$recipe["cast_1"].'</p>
                        <p>cast_2 :'.$recipe["cast_2"].'</p>
                        <p>synopsis :'.$recipe["synopsis"].'</p>
                        <p>note_spectateur :'.$recipe["note_spectateurs"].'</p>';
            }
        }
    ?>

</body>
</html>