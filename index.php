<?php

require_once('./Controller/homepage.php');
require_once('./Controller/oeuvre.php');
require_once('./Controller/librairie.php');
require_once('./Controller/search_form.php');
require_once('./Controller/login.php');
require_once('./Controller/404.php');

if (isset($_GET['action']) && $_GET['action'] !== '') {
	if ($_GET['action'] === 'oeuvre') {
		if (isset($_GET['id']) && $_GET['id'] > 0) {
			$identifier = $_GET['id'];
			oeuvre($identifier);
		} else {
			//erreur : id oeuvre incorecte
			not_found();
		}
	} elseif ($_GET['action'] === 'search') {
		/*$_GET['titre'] = htmlspecialchars($_GET['titre']); //pour sécuriser le formulaire contre les failles html
		$terme = $_GET['titre'];*/
		$terme = htmlspecialchars($_GET['titre']); //pour sécuriser le formulaire contre les failles html
		$terme = trim($terme); //pour supprimer les espaces dans la requête de l'internaute
		$terme = strip_tags($terme); //pour supprimer les balises html dans la requête
		$terme = strtolower($terme);
		rechercher($terme);
		/*if (isset($terme)) {
		$terme = strtolower($terme);
		rechercher($terme);
		/*$select_terme = $bdd->prepare("SELECT title FROM films WHERE title LIKE ?");
		$select_terme->execute(array("%" . $terme . "%"));
		} else{
		echo 'Vous devez entrer votre requete dans la barre de recherche';
		die;
		}*/
	} elseif ($_GET['action'] === 'librairie') {
		library();
	} elseif ($_GET['action'] === 'login') {
		login();
	} else {
		//echo "Erreur 404 : la page que vous recherchez n'existe pas.";
		not_found();
	}
} else {
	homepage();
}