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
    <link rel="stylesheet" href="boot/css/bootstrap.css">
    <link rel="stylesheet" href="boot/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap4.min.css">
    <script src="Jquery.min.js"></script>
    <script src="boots/js/.bootstrap4.min.js"> </script>
    <title>LISTER ETUDIANT</title>
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
              
              <h2>MBOLEM NDOGA YEPP</h2>
              <table  id="example" class="table table-striped table-bordered" style="width:100%">

                  <thead>
                      <th>MATRICULE</th>
                      <th>NOM</th>
                      <th>PRENOM</th>
                      <th>TELEPHONE</th>
                      <th>EMAIL</th>
                      <th>DATE NAISSANCE</th>
                      <th>SUPPRIMER</th>
                      

                  </thead>
              <?php 
              require_once 'Etudiant_Service.php'; 
                  $ob = new Etudiant_Service();
                  foreach ($ob->findAll("etudiants") as $type) {
                      echo '<tr>
                            <td>'.$type->matricule.'</td>      
                            <td>'.$type->Nom.'</td>      
                            <td>'.$type->prenom.'</td>      
                            <td>'.$type->tel.'</td>      
                            <td>'.$type->email.'</td>      
                            <td>'.$type->date_naiss.'</td>
                            <td>  <a class="waves-effect waves-light btn" href="supprimer.php?id_etudiant='.$type->id_etudiant.'">SUPPRIMER</a>    
                               
                            </tr>';
                        }
                      ?>
                
              </table>
        
          </div>

        
<script>   
 $(function() {
     
 
$(document).ready(function() {
    $('#example').DataTable();
} );
$('#example').DataTable({
    language: {
        processing: "Traitement en cours...",
        search: "Rechercher&nbsp;:",
        lengthMenu: "Afficher _MENU_ &eacute;l&eacute;ments",
        info: "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
        infoEmpty: "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        infoFiltered: "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        infoPostFix: "",
        loadingRecords: "Chargement en cours...",
        zeroRecords: "Aucun &eacute;l&eacute;ment &agrave; afficher",
        emptyTable: "Aucune donnée disponible dans le tableau",
        paginate: { first: "Premier", previous: "Pr&eacute;c&eacute;dent", next: "Suivant", last: "Dernier" },
        aria: { sortAscending: ": activer pour trier la colonne par ordre croissant", sortDescending: ": activer pour trier la colonne par ordre décroissant" }
    }
});
 });
</script>
    </div>
   
    </body>
    </html>