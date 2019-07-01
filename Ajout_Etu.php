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

    <?php require_once 'Autoloader.php';
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
            <h1>YOKU AP NDOGA</h1>
            <div class="row">
                <form method="post" action="#" class="col s12">

                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Nom" name="nom" type="text" class="validate">
                            <label for="first_name"></label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="prenom" type="text" name="prenom" class="validate">
                            <label for="last_name"></label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Tel" name="tel" type="number" class="validate">
                            <label for="first_name"></label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="Email" name="email" type="email" class="validate">
                            <label for="last_name"></label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Matricule" name="matricule" type="text" class="validate">
                            <label for="first_name"></label>
                        </div>
                        <div class="input-field col s6">
                            <input name="dat" type="date" class="validate">
                            <label for="last_name"></label>
                        </div>
                    </div>
                    <p id="non">
                        <label>
                            <input class="with-gap" name="group1" type="radio" />
                            <span>Non Boursier</span>
                        </label>
                    </p>
                    <p id="bourse">
                        <label>
                            <input class="with-gap" name="group1" type="radio" />
                            <span>Boursier</span>
                        </label>
                    </p>
                    <p id="loge">
                        <label>
                            <input class="with-gap" name="group1" type="radio" />
                            <span>Loge</span>
                        </label>
                    </p>


                    <div class="row">
                        <div id="addre" hidden>
                            <div class="input-field col s6">
                                <input placeholder="Addresse" name="addresse" type="text" class="validate">
                                <label class="active" for="first_name2">
                                    <Address></Address>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="type1" hidden>
                        <label>Type de Bourse</label>
                        <select class="browser-default" name="type">
                            <?php
                            $ob = new Etudiant_Service();
                            foreach ($ob->findAll("Pension") as $type) {
                                echo "  <option value=$type->id_pension> $type->libelle</option>";
                            }
                            ?>

                        </select>
                    </div>

                    <div id="type2" hidden>
                        <label>Chambre</label>
                        <select class="browser-default" name="chambre">
                            <?php
                            $ob = new Etudiant_Service();
                            foreach ($ob->findAll("chambre") as $type) {
                                echo "<option value=$type->id_chambre> $type->nom_chambre</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <br> <br>
                    <input class="waves-effect waves-light btn" type="submit" value="ajouter" name="ajouter">
                    <!--  <a class="waves-effect waves-light btn-small" name="ajouter">Ajouter</a> -->
                </form>
            </div>
        </div>



    </div>



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


    <?php
    if (isset($_POST['ajouter'])) {
        $Nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $matricule = $_POST['matricule'];
        $date_naiss = $_POST['dat'];
        $addresse = $_POST['addresse'];
        $id_pension = $_POST['type'];
        $id_chambre = $_POST['chambre'];

        $conn = new Etudiant_Service();

        if (!empty($addresse)) {
            $etudiant = new Non_Boursier($matricule, $Nom, $prenom, $tel, $email, $date_naiss, $addresse);
            $conn->add($etudiant);
        } elseif (!empty($id_pension) && empty($id_chambre)) {
            $etudiant = new Boursier($matricule, $Nom, $prenom, $tel, $email, $date_naiss, $id_pension);
            $conn->add($etudiant);
        } else $etudiant = new Etloge($matricule, $Nom, $prenom, $tel, $email, $date_naiss, $id_pension, $id_chambre);

        $conn->add($etudiant);
    }

    ?>


</body>

</html>