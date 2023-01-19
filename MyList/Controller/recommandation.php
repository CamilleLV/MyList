<?php
require_once("Model/model.php");

function recommandation()
{
    $recipes = recommandationTag();
    require("View/header.php");
    require("View/recommandation.php");
    require("View/footer.php");
}
?>