<?php

require_once('./Controller/homepage.php');
require_once('./Controller/oeuvre.php');
require_once('./Controller/404.php');

if (isset($_GET['action']) && $_GET['action'] !== '') {
	if ($_GET['action'] === 'oeuvre') {
    	if (isset($_GET['id']) && $_GET['id'] > 0) {
        	$identifier = $_GET['id'];

        	oeuvre($identifier);
    	} else {
        	echo 'Erreur : aucun identifiant';

        	die;
    	}
	} else {
    	//echo "Erreur 404 : la page que vous recherchez n'existe pas.";
        not_found();
	}
} else {
	homepage();
}