<?php

    function getRecipes(): array 
    {
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
            $sqlQuery = 'SELECT * FROM films_1';
            $recipesStatement = $mysqlClient->prepare($sqlQuery);
            $recipesStatement->execute();
            $recipes = $recipesStatement->fetchAll();

            return $recipes;
    }
?>