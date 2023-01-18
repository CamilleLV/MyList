<?php 

// Récupère en enlevant tout les espaces en début et fin de chaîne ainsi que les antislashs
$titre = trim(stripslashes($_POST['titre']));
$titre = mysqli_real_escape_string($conn, $titre);

$auteur = trim(stripslashes($_POST['auteur']));
$auteur = mysqli_real_escape_string($conn, $auteur);

$acteur1 = trim(stripslashes($_POST['acteur1']));
$acteur1 = mysqli_real_escape_string($conn, $acteur1);

$acteur2 = trim(stripslashes($_POST['acteur2']));
$acteur2 = mysqli_real_escape_string($conn, $acteur2);

$acteur3 = trim(stripslashes($_POST['acteur3']));
$acteur3 = mysqli_real_escape_string($conn, $acteur3);

$date = trim(stripslashes($_POST['date']));
$date = mysqli_real_escape_string($conn, $date);

$duree = trim(stripslashes($_POST['duree']));
$duree = mysqli_real_escape_string($conn, $duree);

$tag1 = trim(stripslashes($_POST['tag1']));
$tag1 = mysqli_real_escape_string($conn, $tag1);

$tag2 = trim(stripslashes($_POST['tag2']));
$tag2 = mysqli_real_escape_string($conn, $tag2);

$tag3 = trim(stripslashes($_POST['tag3']));
$tag3 = mysqli_real_escape_string($conn, $tag3);


if(isset($_FILES['image'])){
    // Tableau qui contiendra les messages d'erreurs s'il y en a
    $errors= array();
    // Contient le nom original du fichier image, la taille (en octets), le nom temporaire et le type (ex : jpeg)
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    // Contient l'extension de l'image
    $file_ext = strtolower(end(explode('.',$_FILES['image']['name'])));
    $expensions = array("jpeg","jpg","png");
    
    if(in_array($file_ext,$expensions) === false){
       $errors[]="Extension non autorisée, veuillez choisir un fichier JPEG ou PNG.";
    }
    
    if($file_size > 2097152) {
       $errors[]="La taille du fichier ne doit pas dépasser 2 Mo.";
    }
    
    if(empty($errors) == true) {
       move_uploaded_file($file_tmp,"../Assets/Image_film/".$file_name);

       $photo = "Assets/Image_film/".$file_name;
       $photo = trim(stripslashes($photo));
       $photo = mysqli_real_escape_string($conn, $photo);
       //echo "Ajouté avec succès";
    }else{
       print_r($errors);
    }
 }

$description = trim(stripslashes($_POST['description']));
$description = mysqli_real_escape_string($conn, $description);

require('../Model/suggerer_oeuvre.php');

?>

