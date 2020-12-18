<?php

	session_start();
	error_reporting(-1);

		ini_set('display_errors','On');

		
        require_once('usuaris.php');
		$id = $_SESSION['userLogged'];
		$usuari = new Usuari();

		$usuari -> delete($id);
		
		
?>