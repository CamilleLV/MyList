<?php

function getRecipes(): array
{
    try {
        // On se connecte à MySQL
        $host = 'mysql:host=localhost;dbname=sae;charset=utf8';
        $user = 'root';
        $passworld = '';
        $mysqlClient = new PDO($host, $user, $passworld);
    } catch (Exception $e) {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : ' . $e->getMessage());
    }

    // Si tout va bien, on peut continuer
    // On récupère tout le contenu de la table recipes
    $sqlQuery = 'SELECT * FROM films';
    $recipesStatement = $mysqlClient->prepare($sqlQuery);
    $recipesStatement->execute();
    $recipes = $recipesStatement->fetchAll();

    return $recipes;
}

function getRandomRecipes(): array
{
    try {
        // On se connecte à MySQL
        $host = 'mysql:host=localhost;dbname=sae;charset=utf8';
        $user = 'root';
        $passworld = '';
        $mysqlClient = new PDO($host, $user, $passworld);
    } catch (Exception $e) {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : ' . $e->getMessage());
    }

    // Si tout va bien, on peut continuer
    // On récupère tout le contenu de la table recipes
    $sqlQuery = 'SELECT * FROM films ORDER BY RAND() LIMIT 500';
    $recipesStatement = $mysqlClient->prepare($sqlQuery);
    $recipesStatement->execute();
    $recipes = $recipesStatement->fetchAll();

    return $recipes;
}

function getLessRecipes(): array
{
    try {
        // On se connecte à MySQL
        $host = 'mysql:host=localhost;dbname=sae;charset=utf8';
        $user = 'root';
        $passworld = '';
        $mysqlClient = new PDO($host, $user, $passworld);
    } catch (Exception $e) {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : ' . $e->getMessage());
    }

    // Si tout va bien, on peut continuer
    // On récupère tout le contenu de la table recipes
    $sqlQuery = 'SELECT * FROM films ORDER BY RAND() LIMIT 49';
    $recipesStatement = $mysqlClient->prepare($sqlQuery);
    $recipesStatement->execute();
    $recipes = $recipesStatement->fetchAll();

    return $recipes;
}

function getOneRecipe($terme): array
{
    try {
        // On se connecte à MySQL
        $host = 'mysql:host=localhost;dbname=sae;charset=utf8';
        $user = 'root';
        $passworld = '';
        $mysqlClient = new PDO($host, $user, $passworld);
    } catch (Exception $e) {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : ' . $e->getMessage());
    }

    $terme = "%" . $terme . "%";
    // Si tout va bien, on peut continuer

    // On récupère tout le contenu de la table recipes
    $sqlQuery = "SELECT * FROM films WHERE title LIKE :terme
    OR realisateur LIKE :terme
    OR acteur_1 LIKE :terme
    OR acteur_2 LIKE :terme
    OR acteur_3 LIKE :terme
    OR genre_1 LIKE :terme
    OR genre_2 LIKE :terme
    OR genre_3 LIKE :terme
    OR synopsis LIKE :terme
    ORDER BY title ASC";
    $recipesStatement = $mysqlClient->prepare($sqlQuery);
    // Étape 4 : lier les paramètres de la requête à leurs valeurs
    $recipesStatement->bindParam(":terme", $terme);
    $recipesStatement->execute();
    $recipe = $recipesStatement->fetchAll();

    return $recipe;
}

function recommandationTag($tags_reference)
{
    try {
        // On se connecte à MySQL
        $host = 'mysql:host=localhost;dbname=sae;charset=utf8';
        $user = 'root';
        $passworld = '';
        $mysqlClient = new PDO($host, $user, $passworld);
    } catch (Exception $e) {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : ' . $e->getMessage());
    }
    // Si tout va bien, on peut continuer

    // On récupère tout le contenu de la table recipes
    $sqlQuery = "SELECT * FROM films WHERE genre_1 or genre_2 or genre_3 LIKE :tags";
    $recipesStatement = $mysqlClient->prepare($sqlQuery);
    // Étape 4 : lier les paramètres de la requête à leurs valeurs
    $recipesStatement->bindParam(":tags", $tags_reference);
    $recipesStatement->execute();
    $recipe = $recipesStatement->fetchAll();

    return $recipe;

}


function recupListUser()
{

    /*chdir("../");
    require('./registration/config.php');*/
    //session_start();

    if (isset($_SESSION['id_user'])) {
        $id_user = $_SESSION['id_user'];
        $host = 'mysql:host=localhost;dbname=sae;charset=utf8';
        $user = 'root';
        $passworld = '';
        $mysqlClient = new PDO($host, $user, $passworld);
        $query = "SELECT * FROM films, film_liker WHERE film_liker.id = films.id";
        $stmt = $mysqlClient->prepare($query);
        $stmt->execute();
        //echo "true";

        $values = $stmt->fetchAll();
        return $values;
    }
}

//function recoRealisateur()                        N'ai pas encore finie ni utilisée.
//{

    /*chdir("../");
    require('./registration/config.php');
    session_start();

    if (isset($_SESSION['id_user'])) {
        $id_user = $_SESSION['id_user'];
        $host = 'mysql:host=localhost;dbname=sae;charset=utf8';
        $user = 'root';
        $passworld = '';
        $mysqlClient = new PDO($host, $user, $passworld);
        $query = "SELECT * FROM films, film_liker WHERE film_liker.id = films.id";
        $stmt = $mysqlClient->prepare($query);
        $stmt->execute();
        //echo "true";

        $values = $stmt->fetchAll();
        return $values;
    }
}*/

function verifIDFilm($id)
{
    //session_start();
    $id_film = $id;

    if (isset($_SESSION['id_user'])) {
        $host = 'mysql:host=localhost;dbname=sae;charset=utf8';
        $user = 'root';
        $passworld = '';

        $mysqlClient = new PDO($host, $user, $passworld);
        $query = "SELECT * FROM film_liker WHERE film_liker.id = :id_film";
        $stmt = $mysqlClient->prepare($query);
        $stmt->bindParam(":id_film", $id_film);
        $stmt->execute();

        $valVerif = $stmt->fetchAll();

        if ($valVerif != null) {
            return 1;
        } else {
            return 0;
        }
    }

}

?>