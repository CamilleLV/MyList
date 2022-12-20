<?php
    require_once("Model/model.php");

    function oeuvre(string $id) {
        $recipes = getRecipes();
        $id = $id;
        require("View/oeuvre.php");
    }
?>