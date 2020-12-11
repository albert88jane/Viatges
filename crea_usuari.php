<?php

        require_once('usuaris.php');
        $nom_usuari = $_POST['nom'];
            
        $contrasenya = $_POST['contrasenya'];
            
        $email = $_POST['email'];
            
        $usuari = new usuaris()

        insert($nom_usuari,$contrasenya,$email);
        
        
?>
