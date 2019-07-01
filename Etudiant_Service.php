 <?php 
 require_once 'Autoloader.php';
 Autoloader::register(); 

     class Etudiant_Service{
         public $isconn;
         protected $db;
        public function __construct($login="root", $password="passer@1", $serveur="localhost", $dbname="Projet2"){
            $this->isconn=true;
            try{
                $this->db=new PDO("mysql:host={$serveur};dbname={$dbname}", $login,$password);
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
           catch(PDOException $e){
               throw new Exception($e->getMessage());
           }
        }
        
        public function Disconnect(){
            $this->db=NULL;
            $this->isconn=FALSE;
        }
        
       // methode add1
     /*    public function add($matricule, $Nom, $prenom, $tel, $email, $date_naiss){
            try{ 
                $requete=$this->db->prepare ("insert into etudiants (matricule,Nom,prenom,tel, email, date_naiss )
                VALUES (:matricule, :Nom, :prenom, :tel, :email, :date_naiss)
                ");
                $requete->bindParam(':matricule',$matricule);
                $requete->bindParam(':Nom',$Nom);
                $requete->bindParam(':prenom',$prenom);
                $requete->bindParam(':tel',$tel);
                $requete->bindParam(':email',$email);
                $requete->bindParam(':date_naiss',$date_naiss);
                $requete->execute();
                return true;


                }catch(PDOException $e){
                    throw new Exception($e->getMessage());
    
                }
        } */

        // methode 1
       /* public function find($query,$params=[]){
            try{ 
            $stmt=$this->db->prepare($query);
            $stmt->execute($params);
            return $stmt->fetch(PDO::FETCH_OBJ);
            }catch(PDOException $e){
                               throw new Exception($e->getMessage());

            }
        }*/
          
        //methode 2
       /* public function find($id){
            try{ 
            $stmt=$this->db->prepare("select * from etudiants where id_etudiant=$id");
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
            }catch(PDOException $e){
                               throw new Exception($e->getMessage());

            }
        }*/
        
          //methode 3
          public function find($table, $colonne, $valeur){
            try{ 
            $stmt=$this->db->prepare("select * from $table where $colonne='$valeur'");
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
            }catch(PDOException $e){
                throw new Exception($e->getMessage());

            }
        }
        public function findAll($table){
            try{ 
                $stmt=$this->db->prepare("select * from $table");
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_OBJ);
                }catch(PDOException $e){
                    throw new Exception($e->getMessage());
    
                }

        }

        // FONCTION MODIFIER ETUDIANT
        public function findup($id_etudiant){
            try{
                $id_etudiant=(int)$id_etudiant;
                $req=$this->db->prepare("SELECT * FROM etudiant WHERE id_etudiant='.$id_etudiant.'");
                $req->execute(array($id_etudiant));
            }catch(Exception $e){
                 throw new Exception($e->getMessage()); 
            }
            return $req->fetchAll(PDO::FETCH_ASSOC);
        }

        //FONCTION ADD BATIMENT
        public function addbati(batiment $batimentClass ){
          try{
            $bati=$batimentClass->getNombati();

            $prepare=$this->db->prepare("insert into batiment (nom_bati)
            VALUES (:nom_bati)");
            $prepare->bindParam(':nom_bati',$bati);
            $prepare->execute();

          }catch(Exception $e){
            throw new Exception($e->getMessage()); 
            

     
        }
    }

    //FONCTION ADD CHAMBRE
    public function addchambr(chambre $chambreClass){
        try{
          $chambre=$chambreClass->getNomchambre();
          $bati=$chambreClass->getIdbat();

          $prepare=$this->db->prepare("insert into chambre (nom_chambre, id_bati)
          VALUES (:nom_chambre, :id_bati)");
          $prepare->bindParam(':nom_chambre',$chambre);
          $prepare->bindParam(':id_bati',$bati);
          $prepare->execute();

        }catch(Exception $e){
          throw new Exception($e->getMessage()); 
          

   
      }
  }

  //FONCTION ADD PENSION
  public function addpens(pension $pensionClass){
    try{
      $type=$pensionClass->getType();
      $libelle=$pensionClass->getLibelle();

      $prepare=$this->db->prepare("insert into Pension (type, libelle)
      VALUES (:type, :libelle)");
      $prepare->bindParam(':type',$type);
      $prepare->bindParam(':libelle',$libelle);
      $prepare->execute();

    }catch(Exception $e){
      throw new Exception($e->getMessage()); 
  
  }
}

//FONCTION MODIFIER BATIMENT
public function modifbatiment(batiment $batiment,$id){
      $nom=$batiment->getNombati();

      $prepare=$this->db->prepare("UPDATE batiment SET  nom_bati='$nom' WHERE id_bati='$id'");
      $prepare->execute();
}


        public function add(Etudiant $etudiant){

            try{ 
            $matricule=$etudiant->getMatricule();
            $Nom=$etudiant->getNom();
            $prenom=$etudiant->getPrenom();
            $tel=$etudiant->getTel();
            $email=$etudiant->getEmail();
            $date_naiss=$etudiant->getDate_naiss();
            $prepare=$this->db->prepare("insert into etudiants (matricule, Nom, prenom,tel,email,date_naiss)
            VALUES(:matricule, :Nom, :prenom, :tel, :email, :date_naiss)");
            $prepare->bindParam(':matricule', $matricule);
            $prepare->bindParam(':Nom',$Nom);
            $prepare->bindParam(':prenom',$prenom);
            $prepare->bindParam(':tel',$tel);
            $prepare->bindParam(':email',$email);
            $prepare->bindParam(':date_naiss',$date_naiss);
            $prepare->execute();

            /* return true; */

        }catch(PDOException $e){
            throw new Exception($e->getMessage());

        }

      $req=$this->db->query("SELECT MAX(id_etudiant) as id FROM etudiants");

      while($der=$req->fetch()){
          $id=$der["id"];
      }
        
      
    if(get_class($etudiant)=='Non_Boursier'){
        $addresse=$etudiant->getAddresse();
        $prepare=$this->db->prepare("insert into Non_loge(id_etudiant, addresse)
        VALUES (:id_etudiant, :addresse)");
        $prepare->bindParam(':id_etudiant', $id);
        $prepare->bindParam(':addresse', $addresse);
        $prepare->execute();
       // $tab=$prepare->fetch(PDO::FETCH_OBJ);
       

    }

    else if (get_class($etudiant)=='Boursier'  || get_class($etudiant)=='Etloge') {

        $id_pension=$etudiant->getId_pension();
        $prepare=$this->db->prepare("insert Et_boursier(id_etudiant, id_pension)
        VALUES (:id_etudiant, :id_pension)");
        $prepare->bindParam('id_etudiant', $id);
        $prepare->bindParam(':id_pension',$id_pension);
        $prepare->execute(); 

        if(get_class($etudiant)=="Etloge"){

        $id_chambre=$etudiant->getId_chambre();
        $prepare=$this->db->prepare("insert Et_loge(id_etudiant, id_chambre)
        VALUES (:id_etudiant, :id_chambre)");
        $prepare->bindParam('id_etudiant', $id);
        $prepare->bindParam(':id_chambre',$id_chambre);
        $prepare->execute(); 
        }
    }
    
    

        }


        //SUPPRIMER ETUDIANT

        public function delete($id_etudiant){
            $req=$this->db->prepare('DELETE FROM etudiants WHERE id_etudiant=?');
            $req->execute(array($id_etudiant));
            return;

        }

        //MODIFIER ETUDIANT
        public function update($matricule,$Nom,$prenom,$tel,$email,$date_naiss){
            $req=$this->db->prepare('UPDATE etudiants SET  matricule=?  Nom=? prenom=? tel=? email=? date_naiss=? ');
            $req->execute(array($matricule,$Nom,$prenom,$tel,$email,$date_naiss));
            return;

        }

        
        //AJOUTER UNE  CHAMBRE
           public function addchambre(chambre $chambre){

            try{
                $nom_chambre=$chambre->getNom();
                $prepare=$this->db->prepare("insert into etudiants (non_chambre)
            VALUES(:non_chambre)");
            $prepare->bindParam(':non_chambre',$nom_chambre);
            $prepare->execute();

            }catch(PDOException $e){
            throw new Exception($e->getMessage());
           }
           
           if(get_class($chambre)=='chambre'){
            $nom_chambre=$chambre->getAddresse();
            $prepare=$this->db->prepare("insert into chambre(chambre, nom_chambre)
            VALUES (:id_chambre, :chambre)");
            $prepare->bindParam(':nom_chambre', $nom_chambre);
            $prepare->execute();
           // $tab=$prepare->fetch(PDO::FETCH_OBJ);
           
    
        }
           
    }

          //LISTE DES ETUDIANTS NON BOURSIERS
        public function listernonboursier(){
            try{
              //  $batiment=$batimentClass->getNombat();
                
                $prepare=$this->db->prepare("SELECT etudiants.id_etudiant as id_etudiant, 
                etudiants.matricule as matricule, etudiants.Nom as nom,
                 etudiants.prenom as prenom ,etudiants.tel as tel , etudiants.email as email,
                 etudiants.date_naiss as date_naiss, Non_loge.addresse as addresse
                FROM etudiants ,Non_loge
               WHERE etudiants.id_etudiant = Non_loge.id_etudiant");
                
               $prepare->execute();
                return $prepare->fetchAll(PDO::FETCH_OBJ);
    
    
               return $prepare;
    
                    }
                    catch(PDOException $e){
                        throw new Exception ($e->getMessage());
                    }
        }
              //LISTE DES ETUDIANTS BOURSIERS
              public function listerBoursier(){
                try{
                  //  $batiment=$batimentClass->getNombat();
                    
         $prepare=$this->db->prepare(" SELECT etudiants.id_etudiant as id_etudiant, etudiants.matricule as matricule, etudiants.Nom as nom ,
              etudiants.prenom as prenom ,etudiants.tel as tel , etudiants.email as email,
              etudiants.date_naiss as date_naiss, Pension.type as type,
            Pension.libelle as libelle
             FROM etudiants,Pension,Et_boursier
             WHERE etudiants.id_etudiant = Et_boursier.id_etudiant
            AND Pension.id_pension=Et_boursier.id_pension");
                    
                   $prepare->execute();
                    return $prepare->fetchAll(PDO::FETCH_OBJ);
        
        
                   return $prepare;
        
                        }
                        catch(PDOException $e){
                            throw new Exception ($e->getMessage());
                        }
            }

            //LISTE DES ETUDIANTS LOGES

            public function listerLoger(){
                try{
                  //  $batiment=$batimentClass->getNombat();
                    
         $prepare=$this->db->prepare("  SELECT  DISTINCT   etudiants.id_etudiant as id_etudiant,
         etudiants.matricule as matricule,
          etudiants.Nom as nom, etudiants.prenom as prenom,
        etudiants.tel as tel , etudiants.email as email,
         etudiants.date_naiss as date_naiss, 
        Pension.type  as types,
       Pension.libelle as libelle, chambre.nom_chambre as chambre, batiment.nom_bati as batiment
         FROM etudiants, Pension, Et_loge, chambre, batiment, Et_boursier
         WHERE etudiants.id_etudiant = Et_boursier.id_etudiant
         AND Et_loge.id_etudiant=Et_boursier.id_etudiant
        AND Pension.id_pension=Et_boursier.id_pension
        AND Et_loge.id_chambre=chambre.id_chambre
        AND chambre.id_bati=batiment.id_bati");
                    
                   $prepare->execute();
                    return $prepare->fetchAll(PDO::FETCH_OBJ);
        
        
                   return $prepare;
        
                        }
                        catch(PDOException $e){
                            throw new Exception ($e->getMessage());
                        }
            }

        }
    

    
 ?>