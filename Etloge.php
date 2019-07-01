<?php 

require_once 'Autoloader.php';
 Autoloader::register(); 
  class Etloge extends Boursier{
    private $id_chambre;


    public function __construct($matricule="",$Nom="",$prenom="",$tel="",$email="",$date_naiss="", $id_pension="", $id_chambre="")

    {
        //Appel du constructeur de la classe parent
        parent::__construct($matricule,$Nom,$prenom,$tel,$email,$date_naiss,$id_pension);

        $this->id_chambre=$id_chambre;
        

    }

    /**
     * Get the value of id_chambre
     */ 
    public function getId_chambre()
    {
        return $this->id_chambre;
    }

    /**
     * Set the value of id_chambre
     *
     * @return  self
     */ 
    public function setId_chambre($id_chambre)
    {
        $this->id_chambre = $id_chambre;

        return $this;
    }
  }
?>