
<?php
	
	session_start();
	error_reporting(-1);
	ini_set('display_errors','On');

	require_once('experiencies.php');

		$tit = $_POST['titol'];
		$desc = $_POST['descripcio'];
		$img = $_POST['imatge'];
		$id_us = $_SESSION['userLogged'];
		$categ = $_POST['categoria'];
		
		$columns = array("titol" => $tit, "descripcio" => $desc, "img" => $img, "id_usuari" => $id_us, "id_categoria" => $categ);

		$exper = new experiencia();
		$exper -> insert($columns);
		echo $exper;

?>