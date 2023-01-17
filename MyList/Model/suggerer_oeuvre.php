<?php

// Connexion à la base de donnée
require('config.php');
session_start();


$query = "INSERT INTO films(title, realisateur, acteur_1, acteur_2, acteur_3, date_sortie, duree, genre_1, genre_2, genre_3, url_img, synopsis) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";


$stmt = $conn->prepare($query);
$stmt->execute([$titre, $auteur, $acteur1, $acteur2, $acteur3, $date, $duree, $tag1, $tag2, $tag3, $photo, $description]);

$conn = null;
exit;

?>
