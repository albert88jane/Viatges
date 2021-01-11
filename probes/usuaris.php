<?php

	
    require_once('viatges.php');


    class Usuari extends viatges{
        
    //Posant els nostres camps de la taula usuari    
        private $id;
        private $nom_usuari;
        private $contrasenya;
        private $email;
        private $admin;
		
        
      
        
     //COnstructor per a quan es cridi a la funció
        
        function __construct () {
            
            $this->db_name = "a19albjanmed_viatges";
            
        }
        
        
     //pasant el objecte a string per tal de poder ser llegit
        
       	function __toString() {
		   	
		   return "(" . $this->id . ", " . $this->nom_usuari . ", " .  
      	$this->contrasenya . ", " . $this->email . "," . $this->admin . ")";
  }
  	
    
        
    //Funció per a registrar usuari
        
        
			
        public function insert($usuari = array()){
            

			
			foreach ($usuari as $property => $value)
          	$$property = $value;
			$this->query="INSERT INTO usuari (nom_usuari, contrasenya, email, admin)
                      VALUES ('$nom_usuari', '$contrasenya', '$email', '0');";
        	$this->executa_query();
            
        }
		
		
		//funcio per a fer login

      
     public function select($username, $password) {
        $this->query = "SELECT * FROM usuari WHERE nom_usuari='$username' AND contrasenya='$password'";
        $this->rebre_resultats_query();
        if (count($this->rows)==1) {
            foreach ($this->rows[0] as $property => $value)
            $this->$property = $value;
            session_start();
            $_SESSION['userLogged']= $this->rows[0]['id'];
			
            return $this->rows;
        }
        else{
            return false;
        }
    }
		//funcio per a borrar un usuari
		
		public function delete($id_user){
			  
			$this -> query = "DELETE FROM usuari WHERE id='$id_user'";
			$this -> executa_query();
		}
		public function select_experiencia_categoria($categoria){}

	}

    ?>
