<?php

require_once("Model/model.php");
function userPage()
{
    $values = recupListUser();
    require("./View/header.php");
    require("./registration/userPage.php");
}

?>