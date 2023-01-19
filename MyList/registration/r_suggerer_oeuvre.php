<?php 
/*
require("config.php");

if(isset($_POST['submit'])){

    $RegexNomPersonne = "/^[\w\s-]{1,50}$/";
    // Uniquement caractères majuscule ou minuscule
    $RegexGenre = "/^[A-Za-z\s-]+$/";

    if(isset($_POST['title'])) {
        $title = $_POST['title'];
        $title = trim(stripslashes($title));
        $title = mysqli_real_escape_string($conn, $title);

        $titleImage = str_replace(' ', '_', $title);
        // echo $title." | ";
        $tailleTitle = strlen($title);
        for($i=0; $i<$tailleTitle; $i++){
            if (preg_match('/^[A-Za-z0-9\-_. ]/', $title[$i]) !== 1) {
                exit;
            }
            else {
                $tailleTitle--;
            }
        }
        if($tailleTitle === 0) {
        }
    }

    
    if(isset($_POST['realisateur'])) {
        $realisateur = $_POST['realisateur'];
        $realisateur = trim(stripslashes($realisateur));
        $realisateur = strtolower(mysqli_real_escape_string($conn, $realisateur));

        if (preg_match($RegexNomPersonne, $realisateur)) {
        }
        else {
            exit;
        }
    }


    if(isset($_POST['acteur_1'])) {
        $acteur_1 = $_POST['acteur_1'];
        $acteur_1 = trim(stripslashes($acteur_1));
        $acteur_1 = strtolower(mysqli_real_escape_string($conn, $acteur_1));

        if (preg_match($RegexNomPersonne, $acteur_1)) {
        }
        else {
            exit;
        }
    }

    // Regarde d'abord si "acteur_2" n'est pas vide, si vide alors on affecte la valeur vide '' sinon on affecte la valeur présent
    $acteur_2 = !empty($_POST['acteur_2']) ? $_POST['acteur_2'] : '';
    if(!empty($acteur_2)) {
        $acteur_2 = $_POST['acteur_2'];
        $acteur_2 = trim(stripslashes($acteur_2));
        $acteur_2 = strtolower(mysqli_real_escape_string($conn, $acteur_2));

        if (preg_match($RegexNomPersonne, $acteur_2)) {
        }
        else {
            exit;
        }
    }
    
    $acteur_3 = !empty($_POST['acteur_3']) ? $_POST['acteur_3'] : '';
    if(!empty($acteur_3)) {
        $acteur_3 = $_POST['acteur_3'];
        $acteur_3 = trim(stripslashes($acteur_3));
        $acteur_3 = strtolower(mysqli_real_escape_string($conn, $acteur_3));

        if (preg_match($RegexNomPersonne, $acteur_3)) {
        }
        else {
            exit;
        }
    }


    $date_sortie = $_POST['date_sortie'];
    $originalDate = $date_sortie;
    // On veux utiliser la localisation française pour le temps
    setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
    // Convertit "2023-01-19" en "19 janvier 2023"
    $date_sortie = strftime("%d %B %Y", strtotime($originalDate));


    if(isset($_POST['duree'])) {
        $duree_avant = $_POST['duree'];
        // Convertit durée "01:51" en "1h 51min"
        $duree = date("G", strtotime($duree_avant)) . "h " . date("i", strtotime($duree_avant)) . "min";
    }

    
    if(isset($_POST['genre_1'])) {
        $genre_1 = $_POST['genre_1'];
        $genre_1 = trim(stripslashes($genre_1));
        $genre_1 = strtolower(mysqli_real_escape_string($conn, $genre_1));

        if (preg_match($RegexGenre, $genre_1)) {
        }
        else {
            exit;
        }
    }

    $genre_2 = !empty($_POST['genre_2']) ? $_POST['genre_2'] : '';
    if(!empty($genre_2)) {
        $genre_2 = $_POST['genre_2'];
        $genre_2 = trim(stripslashes($genre_2));
        $genre_2 = strtolower(mysqli_real_escape_string($conn, $genre_2));

        if (preg_match($RegexGenre, $genre_1)) {
        }
        else {
            exit;
        }
    }

    $genre_3 = !empty($_POST['genre_3']) ? $_POST['genre_3'] : '';
    if(!empty($genre_3)) {
        $genre_3 = $_POST['genre_3'];
        $genre_3 = trim(stripslashes($genre_3));
        $genre_3 = strtolower(mysqli_real_escape_string($conn, $genre_3));

        if (preg_match($RegexGenre, $genre_1)) {
        }
        else {
            exit;
        }
    }


    if(isset($_FILES['image'])) {
        $errors= array();
        // Contient le nom original du fichier image, la taille (en octets), le nom temporaire et le type (ex : jpeg)
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_error = $_FILES['image']['error'];
        // Contient l'extension de l'image
        $file_ext = explode('.',$_FILES['image']['name']);
        $file_ext = end($file_ext);
        $file_ext = strtolower($file_ext);

        $extention = array("jpeg","jpg","png");
        if(in_array($file_ext,$extention) === false){
            $errors[]="Extension non autorisée, veuillez choisir un fichier JPEG, JPG ou PNG.";
            exit;
        }

        if(empty($errors) == true) {
            // Vérifie si le titre de film existe déjà dans la base de données
            $sql = "SELECT title FROM films WHERE title = '$title'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                exit;
            }

            // Sous forme de [Titre du film].[extention]
            $file_name = $titleImage . "." . $file_ext;
            move_uploaded_file($file_tmp,"../Assets/Image_film/".$file_name);
            // Chemin de l'image (dans Image_film)
            $image = "../Assets/Image_film/".$file_name;
            $image = trim(stripslashes($image));
            $image = mysqli_real_escape_string($conn, $image);
        }
        else {
            print_r($errors);
            exit;
        }
    }
    else {
        exit;
    }

    
    if(isset($_POST["synopsis"])) {
        $synopsis = $_POST["synopsis"];
        $synopsis = trim(stripslashes($synopsis));
        $synopsis = mysqli_real_escape_string($conn, $synopsis);

        // Contient que des lettres, chiffres, espaces, et ponctuation. Doit être compris entre 10 et 5000 caractères
        if (preg_match("/^[\p{L}\p{N}\s\p{P}]{10,5000}$/u", $synopsis)) {
        }
        else {
            exit;
        }
    }

    $note_spectateurs = 0;

    require("../Model/suggerer_oeuvre.php");

}
else {
    exit;
}

?>