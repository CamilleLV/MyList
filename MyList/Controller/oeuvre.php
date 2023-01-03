<?php
    require_once("Model/model.php");

    function oeuvre(string $id) {
        $recipes = getRecipes();
        require("View/header.php");
        require("View/oeuvre.php");
    }
?>