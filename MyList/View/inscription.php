<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Assets/CSS/inscription.css">
    <link rel="stylesheet" type="text/css" href="Assets/CSS/toutespages.css">
    <title>Formulaire d'inscription</title>
</head>

<body>

    <header>
        <nav>
            <a href="index.html"><img id="logoMyList" src="../Assets/Images/Logo_MyList.png" alt="Logo MyList"width="100   " height="100"></a>
            <img id="personnage" src="../Assets/Images/Personnage.png" alt="Logo personnage"width="100" height="100">

            <ul style="padding:0;">
                <li><h1><a href="librairie.html">Librairie</a></h1></li>
                <li><h1><a href="suggerer_oeuvre.html">Suggérer une oeuvre</a></h1></li>
            </ul>
        </nav>
    </header>

    <h2> Formulaire d'inscription </h2>
    
    <from name="form" action="Formulaire.html" method="post">

        <fieldset div id="fieldset">
            <legend>Informations personnelles</legend>
        <br>
        <label for="prenom">Prénom : </label>
        <input id="prenom" name="prenom" type="text" required> 
        <label for="nom">Nom : </label>
        <input id="nom" name="nom" type="text" required>
        <br><br>
        <label for="email">Adresse mail : </label>
        <input id="email" name="email" type="email" placeholder="exemple@gmail.com" required>
        <br><br>
        <label for="dateNaissance">Date de naissance : </label>
        <input id="dateNaissance" name="dateNaissance" type="date" required>
        </fieldset>

        <br>

        <fieldset div id="fieldset">
            <legend>Informations du compte</legend>
        <br>
        <label for="pseudo">Pseudo : </label>
        <input id="pseudo" name="pseudo" type="text" required>
        <br><br>
        <label for="mdp">Mot de passe : </label>
        <input id="mdp" name="mdp" type="password" required>
        <br><br>
        <label for="confMdp">Confirmer mot de passe : </label>
        <input id="confMdp" name="confMdp" type="password" required>
        </fieldset>

        <br>

        <fieldset div id="fieldsetOpt">
            <legend>Optionnel</legend>
        <br>
        <label for="tel">Téléphone (optionnel) : </label>
        <input id="tel" name="tel" type="tel">
        <br><br>
        </fieldset>

        <br>

        <!-- 
        <label for="langue">Langue : </label>
        <select name="langue">
            <option>Français</option>
            <option>Anglais</option>
        </select>
        <br><br>
        -->
        <input type="submit" name="Submit" value="Envoyer">

        <br>
        
    </from>

    <footer>
        <h3>Nous contacter: </h3>
    </footer>

</body>
</html> 