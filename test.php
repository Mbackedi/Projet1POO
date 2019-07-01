  <?php 
 require_once 'Autoloader.php';
 Autoloader::register(); 

  //methode 1
    /*require_once'EtudiantService.php';
    $ob =new Etudiant_Service();
    $find =$ob->find("SELECT * FROM etudiants WHERE id_etudiant=?", ["1"]);
    var_dump($find);*/



  //methode 2
  /* require_once'EtudiantService.php';
    $ob =new Etudiant_Service();
    $find =$ob->find(2);
    var_dump($find);*/

    //methode 3


    /*
    INSERTION DANS LA TABLE NON_BOURSIER
    require_once 'EtudiantService.php';
    $ob =new Etudiant_Service();
    $objet= new Non_Boursier("B557", "GAYE", "DMG", "789643798", "dmg8@gmail.com", "1997-10-23", "toubatoul");
    $ob ->add($objet);
    var_dump($objet);
  */

    /* //INSERTION DANS LA TABLE BOURSIER
    require_once 'EtudiantService.php';
    require_once 'Boursier.php';

    $ob =new Etudiant_Service();
    $objet= new Boursier("BEF44", "SALL", "MAMA", "776581301", "mamasall@gmail.com", "1993-09-29", "2");
    $ob ->add($objet);
    var_dump($objet);
 */

    //INSERTION DANS LA TABLE LOGE
   /*  require_once 'EtudiantService.php';
  require_once 'Etloge.php';
    require_once 'batiment.php'; */



    $ob =new Etudiant_Service();
   /*  $objet= new Etloge("AZ741", "NDIAYE", "SEYNABOU", "776335254", "nabousye@gmail.com", "1992-07-17", "1","2");
    $ob ->add($objet);
    var_dump($objet); */


 /*    $find =$ob->findAll("etudiants");
    var_dump($find); 
 */

    //INSERTION
  /*   require_once'EtudiantService.php';
    $ob =new Etudiant_Service();
    $add =$ob->add("AM89P","NDIAYE","AWA","773458827","ndiayeawa@gmail.com","1995-12-21");
    var_dump($add);*/

  //Insertion par une seule fonction

  $c= new pension(40000, "ENTIERE");
  $test=$ob->addpens($c);
  var_dump($test);


    ?> 