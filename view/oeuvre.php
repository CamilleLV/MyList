<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>oeuvre</title>
</head>
<body>
    <?php
        foreach ($recipes as $recipe) {
            if ($recipe["id"] == $id){
                echo '  <h2>title :'.$recipe["title"].'</h2>
                        <div><img src='.$recipe["url_img"].'></div>';
            }
        }
    ?>

</body>
</html>