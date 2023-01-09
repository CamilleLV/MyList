<?php
// Initialiser la session
//session_start();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if (!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="icon" href="./Assets/Images/Logo_MyList.png" />
    <link rel="stylesheet" type="text/css" href="./Assets/CSS/index.css">
    <link rel="stylesheet" type="text/css" href="./Assets/CSS/commun.css">
    <title>Ma Liste | MyList</title>
</head>

<body>
	<div class="sucess">
		<h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
		<p>C'est votre espace utilisateur.</p>
		<a href="../index.php">Accueil</a>
		<a href="logout.php">Déconnexion</a>
	</div>

	<section>
		<ul class="carousel">
			<?php
			//On affiche chaque film un par un
			foreach ($values as $recipe) {
				echo '<li>
						<div class="films_titres_et_oeuvres" style=" width: 175px; height: 260px; border: 1px solid black; background-color: #ffff">
							<a href="index.php?action=oeuvre&id=' . $recipe["id"] . '">
								<div class="films_oeuvres"style="height: 80%;
								width: 100%;background-image: url(' . $recipe["url_img"] . '); background-position: center; background-size: 175px 200px;">
								</div>
								<h5 class="films_titres"style=" font-size: 10px">' . $recipe["title"] . '</h5>
							</a>
						</div>
						</li>';
			}
			?>
		</ul>
	</section>
</body>

</html>