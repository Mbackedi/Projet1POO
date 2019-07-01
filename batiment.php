<?php 
 require_once 'Autoloader.php';
 Autoloader::register(); 
 
 class batiment{
        protected $nombati;
        public function __construct($nombati)
        {
           $this->nombati=$nombati; 
        }


        /**
         * Get the value of nombati
         */ 
        public function getNombati()
        {
                return $this->nombati;
        }

        /**
         * Set the value of nombati
         *
         * @return  self
         */ 
        public function setNombati($nombati)
        {
                $this->nombati = $nombati;

                return $this;
        }
    }
?>