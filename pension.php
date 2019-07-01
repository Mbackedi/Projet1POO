<?php 
    require_once 'Autoloader.php';
    Autoloader::register(); 
    class pension{
        protected $type;
        protected $libelle;

        public function __construct($type,$libelle)
        {
            $this->type=$type;
            $this->libelle=$libelle;
            
        }

        /**
         * Get the value of type
         */ 
        public function getType()
        {
                return $this->type;
        }

        /**
         * Set the value of type
         *
         * @return  self
         */ 
        public function setType($type)
        {
                $this->type = $type;

                return $this;
        }

        /**
         * Get the value of libelle
         */ 
        public function getLibelle()
        {
                return $this->libelle;
        }

        /**
         * Set the value of libelle
         *
         * @return  self
         */ 
        public function setLibelle($libelle)
        {
                $this->libelle = $libelle;

                return $this;
        }
    }
?>