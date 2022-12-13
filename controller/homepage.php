<?php
    require_once("model/model.php");

    function homepage() {
        $recipes = getRecipes();

        require("view/homepage.php");
    }
?>