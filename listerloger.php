<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="jquery-3.4.1.min.js"></script>
    <title> ETUDIANT LOGES</title>
</head>

<body>

    <?php  require_once 'Autoloader.php';
     Autoloader::register();  ?>
    <script src="change.js"></script>

    <nav>
        <div class="nav-wrapper">
        <a href="#" class="brand-logo"> <img src="images/log.gif" alt="" width="50"></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="Ajout_Etu.php">AJOUT ETUDIANT</a></li>
                <li><a href="list_Etu.php">TOUS LES ETUDIANTS</a></li>
                <li><a href="listerNon_Boursier.php">NON BOURSIERS</a></li>
                <li><a href="listerBoursier.php"> BOURSIERS</a></li>
                <li><a href="listerloger.php">LOGES</a></li>
            </ul>
        </div>
    </nav>

    <div class="row">
        
          <div class="col s10">
              
              <h2>ETUDIANTS YI GNO AM NEEK</h2>
              <table class="responsive-table">
                  <thead>
                      <th>IDENTIFIANT</th>
                      <th>MATRICULE</th>
                      <th>NOM</th>
                      <th>PRENOM</th>
                      <th>TELEPHON</th>
                      <th>EMAIL</th>
                      <th>DATE NAISSANCE</th>
                      <th>TYPE BOURSE</th>
                      <th>LIBELLE</th>
                      <th>CHAMBRE</th>
                      <th>BATIMENT</th>


                    
                  </thead>
              <?php 
              require_once 'Etudiant_Service.php'; 
                  $ob = new Etudiant_Service();
                  foreach ($ob->listerLoger() as $type) {
                      echo "<tr>
                            <td>$type->id_etudiant</td> 
                            <td>$type->matricule</td>      
                            <td>$type->nom</td>      
                            <td>$type->prenom</td>      
                            <td>$type->tel</td>      
                            <td>$type->email</td>      
                            <td>$type->date_naiss</td>
                            <td>$type->types</td>     
                            <td>$type->libelle</td>     
                            <td>$type->chambre</td>  
                            <td>$type->batiment</td>";    
                      
                      ?>
                      </tr>
                  <?php }?>

              </table>
           

          </div>

    </div>
   
    </body>
    </html>