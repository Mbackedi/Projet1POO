<?php 
      require_once 'Autoloader.php';
      Autoloader::register(); 


    class Non_Boursier extends Etudiant{
        protected $addresse;
        public function __construct($matricule, $Nom, $prenom, $tel, $email, $date_naiss, $addresse){
            //Appel du constructeur de la classe parent
            parent::__construct($matricule,$Nom,$prenom,$tel,$email,$date_naiss);

            $this->addresse=$addresse;

        }
        
        /**
         * Get the value of addresse
         */ 
        public function getAddresse()
        {
                return $this->addresse;
        }

        /**
         * Set the value of addresse
         *
         * @return  self
         */ 
        public function setAddresse($addresse)
        {
                $this->addresse = $addresse;

                return $this;
        }
    }
?>