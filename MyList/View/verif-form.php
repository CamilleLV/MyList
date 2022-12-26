<?php
try {
    $bdd = new PDO("mysql:host=localhost;dbname=sae", "root", "");
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die("Une erreur a été trouvée : " . $e->getMessage());
}
$bdd->query("SET NAMES UTF8");


if (isset($_GET["s"]) and $_GET["s"] === "OK") {
    $_GET["q"] = htmlspecialchars($_GET["q"]); //pour sécuriser le formulaire contre les failles html
    $terme = $_GET["q"];
    $terme = trim($terme); //pour supprimer les espaces dans la requête de l'internaute
    $terme = strip_tags($terme); //pour supprimer les balises html dans la requête

    if (isset($terme)) {
        $terme = strtolower($terme);
        $select_terme = $bdd->prepare("SELECT title FROM films WHERE title LIKE ?");
        $select_terme->execute(array("%" . $terme . "%"));
    } else {
        $message = "Vous devez entrer votre requete dans la barre de recherche";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Les résultats de recherche</title>
</head>
<!-- J'ai essayé de faire via un tuto, que j'ai adapter à nos infos, la balise php ci-dessous est la version de 
la branche d'adrien d'affichage et la balise encore dessous est celle du tuto. Ca produit une erreur le resultat et j'ai peur que
 ce soit la façon de faire qui bloque, peut etre faut-il utiliser l index.php pour pouvoir effectuer la recherche ? -->
<body>

    <?php
 //On affiche chaque film un par un
 foreach ($terme_trouve as $recipe) {
     if (($recipe["title"] !== "")) {
         echo '<li>
                                    <h2>' . $recipe["title"] . '</h2>
                                    <a href="index.php?action=oeuvre&id=' . $recipe["id"] . '"><img src=' . $recipe["url_img"] . ' class="agrandir_oeuvre"></a>
                                </li>';
     }
 }

 ?>
<!--
<?php /* while($terme_trouve = $select_terme->fetch())
  {
   echo "<div><h2>".$terme_trouve['titre']."</h2><p> ".$terme_trouve['contenu']."</p>";
  }
  $select_terme->closeCursor();
*/
  
   ?> -->
</body>

</html>