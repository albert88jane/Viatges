<?php


	session_start();
	error_reporting(-1);
	ini_set('display_errors','On');

	require_once('experiencies.php');
	
	$cat = $_POST['categoria'];


	$exp = new experiencia();

	$resultat = $exp -> select_experiencia_categoria($cat);

	echo json_encode($resultat);	
?>