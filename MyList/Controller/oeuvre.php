<?php
    require_once("Model/model.php");
    require_once("Model/recupListUser");
    function oeuvre(string $id) {
        $recipes = getRecipes();
        //$id_user = recupIdUser();
        require("View/header.php");
        require("View/oeuvre.php");
    }
?>