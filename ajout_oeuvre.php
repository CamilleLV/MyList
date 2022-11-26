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

        // On insere toutes les donnees
        $sqlQuery = 'INSERT INTO films2(title, urlPage, duree, urlImg, date_sortie, realisateur, cast_0, cast_1, cast_2, synopsis, note_spectateurs) VALUES(:title,:urlPage,:duree,:urlImg,:date_sortie,:realisateur,:cast_0,:cast_1,:cast_2,:synopsis,:note_spectateur);';
        $recipesStatement = $mysqlClient->prepare($sqlQuery);
        $recipesStatement->execute([
            'title' => $_GET['title'],
            'urlPage' => $_GET['urlPage'],
            'duree' => $_GET['duree'],
            'urlImg' => $_GET['urlImg'],
            'date_sortie' => $_GET['date_sortie'],
            'realisateur' => $_GET['realisateur'],
            'cast_0' => $_GET['cast_0'],
            'cast_1' => $_GET['cast_1'],
            'cast_2' => $_GET['cast_2'],
            'synopsis' => $_GET['synopsis'],
            'note_spectateur' => $_GET['note_spectateur']
        ]);
    ?>
    <p>oeuvre envoyée</p>
</body>
</html>