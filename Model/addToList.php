<?php

chdir("../");
    require('./registration/config.php');
    session_start();

    if (isset($_SESSION['id_user'])) {
    $id_user = $_SESSION['id_user'];
        $host = 'mysql:host=localhost;dbname=sae;charset=utf8';
        $user = 'root';
        $passworld = '';
        $mysqlClient = new PDO($host, $user, $passworld);
        $id_film = $_POST['id_film'];
        $query = "INSERT INTO `film_liker` (id_user, id) VALUES (:id_user,:id_film)";
        $stmt = $mysqlClient->prepare($query);
        $stmt->bindParam(":id_user", $id_user);
        $stmt->bindParam(":id_film", $id_film);
        $stmt->execute();
        echo "true";
    }else{
        echo "false";
    }
    
?>