<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Formulaire.css">
    <title>Formulaire d'inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <form method="post" action="recupForm.php" name="form">
        <label for="prenom">Prénom :</label><br>
        <input type="text" id="prenom" name="prenom" ><br>
        <p class="aide invisible" id="aidePrenom"></p>
        <label for="nom">Nom :</label><br>
        <input type="text" id="nom" name="nom" required><br>
        <p class="aide invisible" id="aideNom"></p>
        <label for="pseudo">Pseudo : (doit être compris entre 4 et 15 caractères)</label><br>
        <input type="text" id="pseudo" name="pseudo" required><br>
        <p class="aide invisible" id="aidePseudo"></p>
        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" required><br>
        <p class="aide invisible" id="aideEmail"></p>
        <label for="mdp">Mot de passe :</label><br>
        <input type="password" id="mdp" name="mdp" required><br>
        <p class="aide invisible" id="aideMdp"></p>
        <label for="confMdp">Confirmer le mot de passe :</label><br>
        <input type="password" id="confMdp" name="confMdp" required><br>
        <p class="aide invisible" id="aideConfMdp"></p>
        <label for="dateNaissance">Date de naissance :</label><br>
        <input type="date" id="dateNaissance" name="dateNaissance" required><br><br>
        <button type="submit">Envoyer</button>
    </form> 
</body>
</html>
