<?php


    require_once('viatges.php');


    class usuaris extends viatges{
        
    //Posant els nostres camps de la taula usuari    
        
        private $nom_usuari;
        private $contrasenya;
        private $email;
        private $admin = 0;
        
      
        
     //COnstructor per a quan es cridi a la funció
        
        function __construct () {
            
            $this->db_name = "a19albjanmed_viatges";
            
        }
        
        
     //pasant el objecte a string per tal de poder ser llegit
        
        function __toString () {
            
            
            
        }
    
        
    //Funció per a registrar usuari
        
        
        
        function insert($nom_usuari,$contrasenya,$email){
            
            $this->query = "INSERT INTO usuari (nom_usuari, contrasenya, email, admin) VALUES ('$nom_usuari','$contrasenya','$email','0')";
            
            $this->executa_query();
            
        }
        
        
        
        
        
        
    }

    ?>
