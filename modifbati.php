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
    <title>AJOUTER PENSION</title>
</head>

<body>

<?php
       require_once 'Autoloader.php';
       Autoloader::register(); 
    ?>
<h1 align="center">MODIFIER BATIMENT</h1>
  

    <div class="row">
        <form method="post" action="#" class="col s12">

            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Nom Batiment" name="batiment" type="text" class="validate"
                    value="<?php  if(isset($_GET['nombat'])) {echo $_GET['nombat']; }?>">
                    <label for="first_name">Batiment</label>
                </div>
                
            </div>

            <br> <br>
            <input class="waves-effect waves-light btn" type="submit" value="ajouter" name="ajouter">
            <!--  <a class="waves-effect waves-light btn-small" name="ajouter">Ajouter</a> -->
        </form>
    </div>
            
    <?php 
            $id=$_GET['idbat'];
            $nom=$_GET['nombat'];

             $objet = new Etudiant_Service();

            //  $req=$this->bd->prepare("SELECT nombat from batiment
            // WHERE idbat='$id' ");
            //   $req->execute();
             

            if(isset($_POST['ajouter'])){
                
                    $batiment = $_POST['batiment'];
                 
                    $ob = new  batiment( $batiment);

                    $objet->modifbatiment($ob,$id);

                    header ("location:AjoutBatiment.php");
                    
                }

               
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