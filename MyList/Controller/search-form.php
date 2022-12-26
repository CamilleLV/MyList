<?php
    require_once("Model/model.php");

    function rechercher(string $terme/** Peut-être mettre le contenu de la barre de recherche pour pouvoir afficher ensuite dans
    * verif-form toutes les valeurs intégrant la recherche */) {
        $recipes = getRecipes();
        $terme = $terme; //A surement changer aussi ducoup
        require("View/header.php");
        require("View/verif-form.php");
    }
?>