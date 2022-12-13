<?php
    require_once("model/model.php");

    function oeuvre(string $id) {
        $recipes = getRecipes();
        $id = $id;
        require("view/oeuvre.php");
    }
?>