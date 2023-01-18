<?php
require_once("Model/model.php");


function library()
{
    $recipes = getRandomRecipes();
    require("View/header.php");
    require("View/librairie.php");
    require("View/footer.php");
}

?>