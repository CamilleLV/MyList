<?php /*

$sql = "INSERT INTO films(title, realisateur, acteur_1, acteur_2, acteur_3, date_sortie, duree, genre_1, genre_2, genre_3, url_img, synopsis, note_spectateurs) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssssssi", $title, $realisateur, $acteur_1, $acteur_2, $acteur_3, $date_sortie, $duree, $genre_1, $genre_2, $genre_3, $image, $synopsis, $note_spectateurs);
$stmt->execute();

//Fermeture de la connexion
$conn->close();

?>