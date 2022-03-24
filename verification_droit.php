<?php

	session_start();


	if (!isset($_SESSION["utilisateur"])){
		$connexion = false;
	}elseif (isset($_SESSION["utilisateur"])) {
		$connexion = true;
	}

?>