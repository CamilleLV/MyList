<?php

// récupération des données du formulaire
$prenom = trim($_POST['prenom']);
$nom = trim($_POST['nom']);
$pseudo = trim($_POST['pseudo']);
$email = trim($_POST['email']);
$mdp = trim($_POST['mdp']);
$confMdp = trim($_POST['confMdp']);
$dateNaissance = $_POST['dateNaissance'];


function isValidPrenom($prenom) {
    $prenomRegex = '/^\p{L}+$/';
    return preg_match($prenomRegex, $prenom) === 1;
}

function isValidNom($nom) {
    $nomRegex = '/^\p{L}+$/';
    return preg_match($nomRegex, $nom) === 1;
}

function isValidPseudo($pseudo) {
    $longueurPseudo = strlen($pseudo);
    if($longueurPseudo >= 4 && $longueurPseudo <= 15 && ctype_alnum($pseudo)){
        return true;
    }
    return false;
}

function isValidEmail($email) {
    // [\w.-]+ est égale à n'importe quel caractère, point ou tiret qui peut se répéter plusieurs fois
    // suivi d'un @ puis de n'importe quel autre caractères, point ou tiret qui peut se répéter plusieurs fois
    // suivi d'un point puis d'une extention de 2 à 6 lettre entre a à z et A à Z
    $emailRegex = '/^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$/';
    return preg_match($emailRegex, $email) === 1;
}

function isValidMdp($mdp) {
    // Au moins 8 caractères
    // Au moins une lettre majuscule
    // Au moins une lettre minuscule
    // Au moins un chiffre
    $passwordRegex = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{8,}$/';
    if (preg_match($passwordRegex, $mdp) === 1) {
        return true;
    }
    else {
        return false;
    }
}

// connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "utilisateur";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erreur : " . $e->getMessage());
}

// ------------------------------------------------ Prénom -------------------------------------------------------------

if(!empty($_POST['prenom']) ){
    // trim enleve les espaces au début et à la fin si il y en a
    $prenom = trim($_POST['prenom']);
    if(isValidPrenom($prenom)){
        $prenom = trim($_POST['prenom']);
    }
    else{
        ?><script>
        const aidePrenom = document.getElementById('aidePrenom');
        aidePrenom.innerHTML = "Saisissez un prénom valide";
        document.getElementById("aidePrenom").classList.remove("invisible")
        </script><?php
    }
}
else {
    ?><script>
    const aidePrenom = document.getElementById('aidePrenom');
    aidePrenom.innerHTML = "Veuillez saisir votre prénom";
    document.getElementById("aidePrenom").classList.remove("invisible")
    </script><?php
}

// ------------------------------------------------- Nom ---------------------------------------------------------------

if(!empty($_POST['nom'])){
    $nom = trim($_POST['nom']);
    if(isValidNom($nom)){
        $nom = trim($_POST['nom']);
    }
    else{
        ?><script>
        const aideNom = document.getElementById('aideNom');
        aideNom.innerHTML = "Saisissez un nom valide";
        document.getElementById("aideNom").classList.remove("invisible")
        </script><?php
    }
}
else {
    ?><script>
    const aideNom = document.getElementById('aideNom');
    aideNom.innerHTML = "Veuillez saisir votre nom";
    document.getElementById("aideNom").classList.remove("invisible")
    </script><?php
}

// ------------------------------------------------ Pseudo -------------------------------------------------------------

if(!empty($_POST['pseudo'])){
    $pseudo = trim($_POST['pseudo']);
    if(isValidPseudo($pseudo)){
        $pseudo = trim($_POST['pseudo']);
    }
    else{
        ?><script>
        const aidePseudo = document.getElementById('aidePseudo');
        aidePseudo.innerHTML = "Saisissez un pseudo compris entre 4 et 15 caractères";
        document.getElementById("aidePseudo").classList.remove("invisible")
        </script><?php
    }
}
else {
    ?><script>
    const aidePseudo = document.getElementById('aidePseudo');
    aidePseudo.innerHTML = "Veuillez saisir un pseudo";
    document.getElementById("aidePseudo").classList.remove("invisible")
    </script><?php
}

// ------------------------------------------------ Email --------------------------------------------------------------

if(!empty($_POST['email'])){
    $email = trim($_POST['email']);
    if(isValidEmail($email)){
        $email = trim($_POST['email']);
    }
    else{
        ?><script>
        const aideEmail = document.getElementById('aideEmail');
        aideEmail.innerHTML = "Saisissez un mail valide";
        document.getElementById("aideEmail").classList.remove("invisible")
        </script><?php
    }
}
else {
    ?><script>
    const aideEmail = document.getElementById('aideEmail');
    aideEmail.innerHTML = "Veuillez saisir votre mail";
    document.getElementById("aideEmail").classList.remove("invisible")
    </script><?php
}

// ------------------------------------------------- Mdp ---------------------------------------------------------------

$mdp = trim($_POST['mdp']);
if(empty($mdp)){
    ?><script>
    const aideMdp = document.getElementById('aideMdp');
    aideMdp.innerHTML = "Veuillez saisir un mot de passe";
    document.getElementById("aideMdp").classList.remove("invisible")
    </script><?php
    }
else {
    $mdp = trim($_POST['mdp']);
    if(isValidMdp($mdp)){
        $mdp = trim($_POST['mdp']);
    }
    else{
        ?><script>
        const aideMdp = document.getElementById('aideMdp');
        const text = document.createTextNode("Votre mot de passe doit contenir : ");
        aideMdp.appendChild(text)

        // Créer une liste
        const list = document.createElement('ul');

        // Créer les éléments de la liste
        const element1 = document.createElement('li');
        element1.textContent = 'Au moins 8 caractères';
        const element2 = document.createElement('li');
        element2.textContent = 'Au moins une lettre majuscule';
        const element3 = document.createElement('li');
        element3.textContent = 'Au moins une lettre minuscule';
        const element4 = document.createElement('li');
        element4.textContent = 'Au moins un chiffre';

        list.appendChild(element1);
        list.appendChild(element2);
        list.appendChild(element3);
        list.appendChild(element4);
        aideMdp.appendChild(list);

        document.getElementById("aideMdp").classList.remove("invisible")
        </script><?php
    }
}

$confMdp = trim($_POST['confMdp']);
if($mdp == $confMdp){
    // On hache le mot de passe
    $hash_mdp = password_hash($mdp, PASSWORD_DEFAULT);
}
else{
    ?><script>
    const aideConfMdp = document.getElementById('aideConfMdp');
    aideConfMdp.innerHTML = "Les mots de passe ne correspondent pas, veuillez recommencer";
    document.getElementById("aideConfMdp").classList.remove("invisible")
    </script><?php
}

// --------------------------------------------------------------------------------------------------------------------


// préparation et exécution de la requête d'insertion
$sql = "INSERT INTO utilisateur (prenom, nom, pseudo, email, mdp, confMdp, dateNaissance)
VALUES (:prenom, :nom, :pseudo, :email, :mdp, :confMdp, :dateNaissance)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':prenom', $prenom);
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':pseudo', $pseudo);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':mdp', $mdp);
$stmt->bindParam(':confMdp', $confMdp);
$stmt->bindParam(':dateNaissance', $dateNaissance);

$stmt->execute();

echo "Un nouveau utilisateur à été ajouté avec succès";

$conn = null;

header('Location: Remerciment.php');
exit;

?>
