<?php



	require_once('usuaris.php');


	$nom_usuari = $_POST['nom_usuari'];

	$contrasenya = $_POST['contrasenya']:

	$usuari = new Usuari();

	$usuari -> select_usuari($nom_usuari);

	echo "hola";
	echo $usuari;
		
		
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