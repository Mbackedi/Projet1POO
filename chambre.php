<?php 
     require_once 'Autoloader.php';
     Autoloader::register(); 
     class chambre{
         protected $nomchambre;
         protected $idbat;
         public function __construct($nomchambre, $idbat)
         {
             $this->nomchambre=$nomchambre;
             $this->idbat=$idbat;
         }


         /**
          * Get the value of nomchambre
          */ 
         public function getNomchambre()
         {
                  return $this->nomchambre;
         }

         /**
          * Set the value of nomchambre
          *
          * @return  self
          */ 
         public function setNomchambre($nomchambre)
         {
                  $this->nomchambre = $nomchambre;

                  return $this;
         }

         /**
          * Get the value of idbat
          */ 
         public function getIdbat()
         {
                  return $this->idbat;
         }

         /**
          * Set the value of idbat
          *
          * @return  self
          */ 
         public function setIdbat($idbat)
         {
                  $this->idbat = $idbat;

                  return $this;
         }
     }
?>