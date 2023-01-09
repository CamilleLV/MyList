<?php
    require_once("Model/model.php");

    function homepage() {
        $recipes = getLessRecipes();
        require("View/header.php");
        require("View/homepage.php");
    }
?>