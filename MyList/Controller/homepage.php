<?php
    require_once("Model/model.php");

    function homepage() {
        $recipes = getRecipes();

        require("View/homepage.php");
    }
?>