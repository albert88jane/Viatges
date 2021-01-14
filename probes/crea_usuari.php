<?php




		error_reporting(-1);

		ini_set('display_errors','On');

		
        require_once('usuaris.php');
		

        	$nom_usuari = $_GET['nom_usuari'];
            
			$contrasenya = md5($_GET['contrasenya']);
            
			$email = $_GET['mail'];
        
		

			$usuari1 = array ("nom_usuari" => $nom_usuari, "contrasenya" => $contrasenya ,"email" => $email,
                 "admin" => "0" );



        	$usuari2 = new Usuari();
						
		
		
			
        	$usuari2 -> insert($usuari1);
        
        	

?>
