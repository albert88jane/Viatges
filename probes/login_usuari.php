<?php


	error_reporting(-1);
	ini_set('display_errors','On');

	require_once('usuaris.php');


	$nom = $_POST['nom_usuari'];

	$password = md5($_POST['contrasenya']);
	
	$usuarios = new Usuari();

	$usuarios -> select($nom, $password);

	
	echo $usuarios;
	
		
		
//		session_start();
//		
//		$_SESSION['logedIn'];
//		header("Location: index.php");
//		
//	}else{
//		
//		header("Location: index.php");
//	
//	}


?>