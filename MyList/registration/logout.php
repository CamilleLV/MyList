<?php
session_start();
	/* Détruire la session.
	if(session_destroy()){
		// Redirection vers la page d'accueil
		
	}*/

	session_destroy();

	header("Location: ../index.php");
exit();

?>