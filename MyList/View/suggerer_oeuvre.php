<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../Assets/CSS/suggerer_oeuvre.css">
  <link rel="stylesheet" type="text/css" href="../Assets/CSS/commun.css">
  <title>Suggérer une oeuvre</title>
</head>

<body>
  <header>
    <nav>
        <a href="index.html"><img id="logoMyList" src="../Assets/Images/Logo_MyList.png" alt="Logo MyList"width="100   " height="100"></a>
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

    <form name="form" id="form" action="../registration/suggerer_oeuvre.php" method="get">


<!-- 
      <label for="type">Type de l'oeuvre: </label>

      <input type="radio" name="film" value="Film" id="film" onchange="affiche_selon_choix('Film')"/>
      <label for="film">Film</label>

      <input type="radio" name="serie" value="Série" id="serie" onchange="affiche_selon_choix('Série')"/>
      <label for="serie">Série</label>

      <input type="radio" name="livre" value="Livre" id="livre" onchange="affiche_selon_choix('Livre')"/>
      <label for="livre">Livre</label>
-->
      <br>

      <label for="titre">Titre de l'oeuvre : </label>
      <input type="text" id="titre" name="titre" size="50" placeholder="Ecrire ici" required>
      <br>
      
      <label for="auteur">Nom de l'auteur : </label>
      <input type="text" id="auteur" name="auteur" size="50" placeholder="Ecrire ici" required>
      <br>

      <label for="acteur1">Acteur 1 : </label>
      <input type="text" id="acteur1" name="acteur1" size="20" placeholder="Acteur principale" required>
      <label for="acteur2">Acteur 2 : </label>
      <input type="text" id="acteur2" name="acteur2" size="20" placeholder="Acteur secondaire">
      <label for="acteur3">Acteur 3 : </label>
      <input type="text" id="acteur3" name="acteur3" size="20" placeholder="Acteur secondaire">
      <br>

      <label for="date">Date de sortie : </label>
      <input type="date" id="date" name="date" required>
      <br>

      <label for="duree" id="duree_label">Durée : </label>
      <input type="time" id="duree" name="duree" required>
      <br>

  <!-- 
      <label for="date" id="nb_ep_label">Nombre d'épisodes: </label>
      <input type="number" id="nb_ep" name="nb_ep" size="50">
      <br>

      <label for="date" id="duree_ep_label">Durée par épisodes: </label>
      <input type="time" id="duree_ep" name="duree_ep" size="50">
      <br>

      <label for="date" id="nb_tome_label">Nombre de tomes:  </label>
      <input type="number" id="nb_tome" name="nb_tome" size="50">
      <br>
  -->

      <label for="tag1">Tags 1 : </label>
      <input type="text" id="tag1" name="tag1" size="20" placeholder=" Ecrire ici" required>
      <label for="tag2">Tags 2 : </label>
      <input type="text" id="tag2" name="tag2" size="20" placeholder=" Ecrire ici">
      <label for="tag3">Tags 3 : </label>
      <input type="text" id="tag3" name="tag3" size="20" placeholder=" Ecrire ici">
      <br>

      <label for="image">Image de l'oeuvre : </label>
      <input type="file" id="photo" name="photo" accept="image/png, image/jpeg" required>
      <br>

      <label for="description">Description de l'oeuvre : </label><br><br>
      <textarea id="description" name="description" rows="5" cols="70"placeholder="Ecrire ici" required></textarea>
      <br><br>
      <input type="submit" name="Submit" value="Envoyer">
    </form>

    <footer>
        <h3>Nous contacter : </h3>
    </footer>

    <!-- <script src="../Assets/JS/script_suggerer_oeuvre.js"></script> -->
</body>
</html> 