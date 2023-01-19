<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../Assets/CSS/suggerer_oeuvre.css">
  <link rel="stylesheet" type="text/css" href="../Assets/CSS/commun.css">
  <title>Suggérer une oeuvre</title>
</head>

<body>

<?php

// Initialiser la session
session_start();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if (!isset($_SESSION["username"])) {
    header("Location: ./registration/login.php");
    exit();
}
?>

<header>
    <nav>
        <a href="index.html"><img id="logoMyList" src="../Assets/Images/Logo_MyList.png" alt="Logo MyList"width="100" height="100"></a>
        <div id="liste"> 
          <li><h1><a href="librairie.html">Librairie</a></h1></li>
            <li><h1><a href="suggerer_oeuvre.html">Suggérer une oeuvre</a></h1></li>
            <ul id="listeDeroulant">
              <a href="#" class="list-opener"><img id="personnage" src="../Assets/Images/Personnage.png" alt="Logo personnage"width="100" height="100"></a>
                <ul class="sousMenu">
                  <li><a href="connexion.html" id="connexion">Connexion</a></li>
                  <li><a href="inscription.html" id="inscription">Inscription</a></li>
                  <li><a href="#" id="ma_liste">Ma Liste</a></li>
                  <li><a href="profil_utilisateur" id="profil">Profil</a></li>
                  <li><a href="#" id="deconnexion">Deconnexion</a></li>
                </ul>
            </ul>
          </div>
    </nav>
</header>
<h2>Suggérer une oeuvre</h2>

    <form name="form" id="form" action="../registration/r_suggerer_oeuvre.php" enctype="multipart/form-data" method="post">

        <label for="title">Titre de l'oeuvre : </label>
        <input type="text" id="titre" name="title" size="50" placeholder="Ecrire ici" required>
        <br>

        <label for="realisateur">Nom de l'auteur : </label>
        <input type="text" id="auteur" name="realisateur" size="50" placeholder="Ecrire ici" required>
        <br>

        <label for="acteur_1">Acteur 1 : </label>
        <input type="text" id="acteur1" name="acteur_1" size="20" placeholder="Acteur principale" required>
        <label for="acteur_2">Acteur 2 : </label>
        <input type="text" id="acteur2" name="acteur_2" size="20" placeholder="Acteur secondaire" >
        <label for="acteur_3">Acteur 3 : </label>
        <input type="text" id="acteur3" name="acteur_3" size="20" placeholder="Acteur secondaire" >
        <br>


        <label for="date_sortie">Date de sortie : </label>
        <input type="date" id="date" name="date_sortie" required>
        <br>

        <label for="duree">Durée : </label>
        <input type="time" id="duree" name="duree" required>
        <br>

        <label for="genre_1">Genre 1 : </label>
        <input type="text" id="tag1" name="genre_1" size="20" placeholder=" Exemple : Aventure" required>
        <label for="genre_2">Genre 2 : </label>
        <input type="text" id="tag2" name="genre_2" size="20" placeholder=" Ecrire ici">
        <label for="genre_3">Genre 3 : </label>
        <input type="text" id="tag3" name="genre_3" size="20" placeholder=" Ecrire ici">
        <br>

        <label for="image">Image de l'oeuvre : </label>
        <input type="file" id="photo" name="image" > 
        <br><br>

        <label for="synopsis">Description de l'oeuvre : </label><br><br>
        <textarea id="description" name="synopsis" rows="5" cols="70"placeholder="Ecrire ici" required></textarea>
        <br><br>

        <input type="submit" name="submit" value="Envoyer">
    </form>
</body>
</html>
