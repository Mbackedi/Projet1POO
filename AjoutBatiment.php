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
    <title>AJOUTER ETUDIANT</title>
</head>

<body>

<?php
     require_once 'Autoloader.php';
     Autoloader::register(); 

    ?>

    <script src="change.js"></script>


    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo"> <img src="images/log.gif" alt="" width="50"></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="Ajout_Etu.php">AJOUT ETUDIANT</a></li>
                <li><a href="list_Etu.php">TOUS LES ETUDIANTS</a></li>
                <li><a href="listerNon_Boursier.php">NON BOURSIERS</a></li>
                <li><a href="listerBoursier.php">BOURSIERS</a></li>
                <li><a href="listerloger.php">LOGES</a></li>
            </ul>
        </div>
    </nav>


    <div class="row">

        <div class="col s3"></div>
        <div class="col s6">
            <h1>AJOUTER BATIMENT</h1>
            <div class="row">
                <form method="post" action="#" class="col s12">

                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Nom Batiment" name="batiment" type="text" class="validate">
                            <label for="first_name">Batiment</label>
                        </div>
                        
                    </div>

                    <br> <br>
                    <input class="waves-effect waves-light btn" type="submit" value="ajouter" name="ajouter">
                    <!--  <a class="waves-effect waves-light btn-small" name="ajouter">Ajouter</a> -->
                </form>
            </div>
        </div>



    </div>

    <?php
    $ob = new Etudiant_Service();
   

    if(isset($_POST['ajouter'])){
        $batiment=$_POST['batiment'];
        $b= new batiment($batiment);
        $ob->addbati($b);
      
       }


    echo'<div class="row">
                <div class="col s1"></div>
                <div class=" col s10">';
        echo '
        <table class="highlight">
        <thead>
          <tr>
              <th>Id Batiment</th>
              <th>Nom Batiment</th>
              <th>MODIFIER</th>
                  

          </tr>
        </thead>
        
        ';

        foreach($ob->findAll("batiment") as $liste){
            echo "  <tr>
            <td>$liste->id_bati</td>
            <td>$liste->nom_bati</td>  ";
            echo "<td ><a href='modifbati.php?idbat=$liste->id_bati&nombat=$liste->nom_bati' class='btn btn-primary'>
            <i class='fa fa-fw fa-edit'></i>MODIFIER</a></td>";
                           
           
        }

        echo"
                </tr>
            </table>
        ";
   echo"</div>
        </div>";
     

    ?>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">DARAAJI</h5>
                    <p class="grey-text text-lighten-4">Merci de faire confiance à l'universite des références.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Facultes</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Fac Droits</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Fac Lettre </a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Fac Medecine</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Fac Science</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2019 Copyright DIOP Mbacke@ Tous droits réservés
                <a class="grey-text text-lighten-4 right" href="#!">Plus de liens</a>
            </div>
        </div>
    </footer>


    


</body>

</html>