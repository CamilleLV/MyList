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

    $terme = "%".$terme."%";
    // Si tout va bien, on peut continuer

    // On récupère tout le contenu de la table recipes
    $sqlQuery = "SELECT * FROM films WHERE title LIKE :title";
    $recipesStatement = $mysqlClient->prepare($sqlQuery);
    // Étape 4 : lier les paramètres de la requête à leurs valeurs
    $recipesStatement->bindParam(":title", $terme);
    $recipesStatement->execute();
    $recipe = $recipesStatement->fetchAll();

    return $recipe;
}
?>