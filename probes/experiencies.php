

<?php


	require_once("viatges.php");

		//Crear la classe experiencia
		class experiencia extends viatges{
			
			//afegir tots els camps de la taula
			private $titol;
			private $descripcio;
			private $img;
			private $vots_positius;
			private $vots_negatius;
			private $id_usuari;
			private $id_categoria;
			private $id;
			
			 //COnstructor per a quan es cridi a la funció
			
				function __construct(){
					
					$this->db_name = "a19albjanmed_viatges";
				}
			
			
			 //pasant el objecte a string per tal de poder ser llegit
			
				function __toString(){
					
					echo "entro string <br>";
					return "(" . $this ->id . "," . $this -> titol . "," . $this -> descripcio . "," . $this -> img . "," . $this -> vots_positius . "," . $this -> vots_negatius . "," . $this -> id_usuari
					. "," . $this -> id_categoria . ")";
					
				}
			
			//funcio per a filtrar experiencia per categoria
			
			public function select_experiencia_categoria($categoria){
				
				$this -> query = "SELECT * FROM experiencia WHERE id_categoria='$categoria'";
				$this -> rebre_resultats_query();
				return $this -> rows;
				
            foreach ($this->rows[0] as $property => $value)
            $this->$property = $value;
			
			}
			//funcio per a seleccionar les experiències inicials avans del registre de l'usuari
			
			public function select($username,$password){}
			
			//funció per a crear una experiència nova
			
			public function insert($colums = array()){
				
				foreach ($colums as $property => $value)
					$$property = $value;
				
				$this->query = "INSERT INTO experiencia (titol,descripcio,img,id_usuari,id_categoria) VALUES ('$titol','$descripcio','$img','$id_usuari','$id_categoria');";
				$this-> executa_query();
			}
			
			
			
		}








?>