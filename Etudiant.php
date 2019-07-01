<?php 
 require_once 'Autoloader.php';
 Autoloader::register(); 
   class Etudiant{ 
    private $matricule;
    private $Nom;
    private $prenom;
    private $tel;
    private $email;
    private $date_naiss;
    private $etudiants;
 public function __construct($matricule="", $Nom="", $prenom="", $tel="", $email="", $date_naiss="")
 {
   $this->matricule=$matricule;
   $this->Nom=$Nom;
   $this->prenom=$prenom;
   $this->tel=$tel;
   $this->email=$email;
   $this->date_naiss=$date_naiss;
   $this->etudiants=[];
  
 }
 

    public function getMatricule()
    {
        return $this->matricule;
    }

    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getNom()
    {
        return $this->Nom;
    }

    public function setNom($Nom)
    {
        $this->Nom = $Nom;

        return $this;
    }

  
    public function getPrenom()
    {
        return $this->prenom;
    }

     
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getTel()
    {
        return $this->tel;
    }

  
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

   
    public function getEmail()
    {
        return $this->email;
    }

 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

  
    public function getDate_naiss()
    {
        return $this->date_naiss;
    }

   
    public function setDate_naiss($date_naiss)
    {
        $this->date_naiss = $date_naiss;

        return $this;
    }
   }
?>