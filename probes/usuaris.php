<?php

	
    require_once('viatges.php');


    class Usuari extends viatges{
        
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
        
       	function __toString() {
		   	echo "entro string <br>";
		   return "(" . $this->nom_usuari . ", " . $this->contrasenya . ", " .  
      	$this->email . ", " . $this->admin . ")";
  }
  	
    
        
    //Funció per a registrar usuari
        
        
        
        public function insert_usuari($usuari = array()){
            
//            $this->query = "INSERT INTO usuari (nom_usuari, contrasenya, email, admin) VALUES ('$nom_usuari','$contrasenya','$email','$admin');";
//            echo "hola";
            
			
			foreach ($usuari as $property => $value)
          	$$property = $value;
			$this->query="INSERT INTO usuari (nom_usuari, contrasenya, email, admin)
                      VALUES ('$nom_usuari', '$contrasenya', '$email', '0');";
        	$this->executa_query($this->query);
			
            
        }
		
	public function select_usuari($usuariNom){
        		
         
      $this->query = "SELECT contrasenya
                    FROM usuari
                    WHERE nom_usuari='$usuariNom'";
      $this->rebre_resultats_query();
    
    // Any register selected
    if (count($this->rows)==1) {
      foreach ($this->rows[0] as $property => $value)
        $this->$property = $value;
      }
        
        
	}
        
    }

    ?>
