<?php 

// Connexion à la base de donnée
require('config.php');
session_start();

// Récupère en enlevant tout les espaces en début et fin de chaîne ainsi que les antislashs
$titre = trim(stripslashes($_GET['titre']));
$titre = mysqli_real_escape_string($conn, $titre);

$auteur = trim(stripslashes($_GET['auteur']));
$auteur = mysqli_real_escape_string($conn, $auteur);

$acteur1 = trim(stripslashes($_GET['acteur1']));
$acteur1 = mysqli_real_escape_string($conn, $acteur1);

$acteur2 = trim(stripslashes($_GET['acteur2']));
$acteur2 = mysqli_real_escape_string($conn, $acteur2);

$acteur3 = trim(stripslashes($_GET['acteur3']));
$acteur3 = mysqli_real_escape_string($conn, $acteur3);

$date = trim(stripslashes($_GET['date']));
$date = mysqli_real_escape_string($conn, $date);

$duree = trim(stripslashes($_GET['duree']));
$duree = mysqli_real_escape_string($conn, $duree);

$tag1 = trim(stripslashes($_GET['tag1']));
$tag1 = mysqli_real_escape_string($conn, $tag1);

$tag2 = trim(stripslashes($_GET['tag2']));
$tag2 = mysqli_real_escape_string($conn, $tag2);

$tag3 = trim(stripslashes($_GET['tag3']));
$tag3 = mysqli_real_escape_string($conn, $tag3);

$photo = trim(stripslashes($_GET['photo']));
$photo = mysqli_real_escape_string($conn, $photo);

$description = trim(stripslashes($_GET['description']));
$description = mysqli_real_escape_string($conn, $description);

$query = "INSERT INTO films(title, realisateur, acteur_1, acteur_2, acteur_3, date_sortie, duree, genre_1, genre_2, genre_3, url_img, synopsis) VALUES(:titre, :auteur, :acteur1, :acteur2, :acteur3, :date, :duree, :tag1, :tag2, :tag3, :photo, :description)";

$stmt = $conn->prepare($query);
$stmt->bindParam(':titre', $titre);
$stmt->bindParam(':auteur', $auteur);
$stmt->bindParam(':acteur1', $acteur1);
$stmt->bindParam(':acteur2', $acteur2);
$stmt->bindParam(':acteur3', $acteur3);
$stmt->bindParam(':date', $date);
$stmt->bindParam(':duree', $duree);
$stmt->bindParam(':tag1', $tag1);
$stmt->bindParam(':tag2', $tag2);
$stmt->bindParam(':tag3', $tag3);
$stmt->bindParam(':photo', $photo);
$stmt->bindParam(':description', $description);

$stmt->execute();

$conn = null;
exit;

?>

