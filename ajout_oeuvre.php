<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ajout_oeuvre</title>
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
        $sqlQuery = 'INSERT INTO films(title, urlPage, duree, urlImg, /*date,*/ realisateur, /*cast/0, cast/1, cast/2,*/ synopsis/*, note-spectateurs*/) VALUES(:title,:urlPage,:duree,:urlImg/*,:date*/,:realisateur/*,:cast/0,:cast/1,:cast/2*/,:synopsis/*,:note-spectateur*/);';
        $recipesStatement = $mysqlClient->prepare($sqlQuery);
        $recipesStatement->execute([
            'title' => $_GET['title'],
            'urlPage' => $_GET['urlPage'],
            'duree' => $_GET['duree'],
            'urlImg' => $_GET['urlImg'],
            //'date' => $_GET['date'],
            'realisateur' => $_GET['realisateur'],
            //'cast/0' => $_GET['cast/0'],
            //'cast/1' => $_GET['cast/1'],
            //'cast/2' => $_GET['cast/2'],
            'synopsis' => $_GET['synopsis'],
            //'note-spectateur' => $_GET['note-spectateur']
        ]);
        /*
        très gros problèmes
        date, cast,et - sont des mots unutilisable dans la requete SQL
        */
    ?>
    <p>oeuvre envoyée</p>
</body>
</html>