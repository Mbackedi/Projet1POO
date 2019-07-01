<?php 
require_once'Autoloader.php';
   Autoloader::register(); 

    class Boursier extends Etudiant{
        private $id_pension;
        

        public function __construct($matricule="",$Nom="",$prenom="",$tel="",$email="",$date_naiss="",$id_pension="")

        {
            //Appel du constructeur de la classe parent
            parent::__construct($matricule,$Nom,$prenom,$tel,$email,$date_naiss);

            $this->id_pension=$id_pension;
            

        }

        
        public function getId_pension()
        {
                return $this->id_pension;
        }

       
        public function setId_pension($id_pension)
        {
                $this->id_pension = $id_pension;

                return $this;
        }

        
        public function getId_etudiant()
        {
                return $this->id_etudiant;
        }

      
        public function setId_etudiant($id_etudiant)
        {
                $this->id_etudiant = $id_etudiant;

                return $this;
        }
    }

?>