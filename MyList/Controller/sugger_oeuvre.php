<?php

require_once("Model/model.php");
function sugOeuvre()
{
    $values = recupListUser();
    require("./View/header.php");
    require("./View/suggerer_oeuvre.php");
    require("./View/footer.php");
}

?>