<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

    <head>
		<title>Body Check</title>
		<meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
		<script type="text/javascript" src="test.js"></script>
		<link rel="stylesheet" href="../style/test.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="../style/model.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="../scripts/jquery-3.4.1.min.js"></script>
        <script src="../scripts/app.js" type="text/javascript"></script>
	</head>

<body>
    <header>
        <div class="logo-container">
            <a href="index.php"><img src="../ressources/logo.png" alt="description" id="logo"></a>
        </div>
        <div class="container-menu-nav">
            <nav class="top-menu-nav">
                <ul class="top-menu">
                    <li><a href="../index.php" class="link">Accueil <i class="fa fa-home" aria-hidden="true"></i></a></li>
					<li><a href="platsJournée/etape3.php" class="link">calorie<i class="fa fa-columns" aria-hidden="true"></i></a></li>
                    <li><a href="test.php" class="link">Test <i class="fa fa-list" aria-hidden="true"></i></a></li>
                    <li><a href="apropos.php" class="link">A propos <i class="fa fa-question-circle-o" aria-hidden="true"></i></a></li>
                    <li><a href="contact.php" class="link">Contact <i class="fa fa-address-book-o" aria-hidden="true"></i></a></li>
                    <li id="nav-moncompte"><a href="Connexion.php" class="link">Mon Compte <i class="fa fa-user-circle-o" aria-hidden="true"></i></a></li>
                    <li id="lang"><a><i class="fa fa-globe" aria-hidden="true"></i> FR <span id="eur">(EUR)</span></a></li>
                </ul>
            </nav>
            <div class="toggle"><span></span></div>
        </div>
    </header>

    <section>
         

            <div class="salut" id="bonj"> 
                <h1>
                <?php
                echo "Bonjour  ".$_SESSION['user'][2];
                ?>
                </h1>
            </div>
           <div class="tot">
                <div class="compte" id="decon"> 
                    <h3>
                    <?php
                    echo'<a href= "deconnexion.php">Se déconnecter</a> <br/>';
                    ?>
                    </h3>
                </div>

                <div class="compte" id="historiq"> 
                    <h3>
                    <?php
                    echo'<a href= "platsJournée/p.php">voir mon historique</a> <br/>';
                    ?>
                    </h3>
                </div>

            </div>

            <div>
                <?php
                    function CategorieIMC($imc){
                        $idcategorie;
                        if ($imc<16) {
                            $idcategorie = 1;
                        }elseif ( $imc < 18.5 and $imc>16.5) {
                            $idcategorie = 2;
                        }elseif ( $imc < 25 and $imc>18.5) {
                            $idcategorie = 3;
                        }elseif ( $imc < 30 and $imc>25) {
                            $idcategorie = 4;
                        }elseif ( $imc < 35 and $imc>30) {
                            $idcategorie = 5;
                        }elseif ( $imc < 40 and $imc>35) {
                            $idcategorie = 6;
                        }elseif ( $imc>40) {
                            $idcategorie = 7;
                        }else {
                            echo "erreur de calcul IMC. Category NOT FOUND";
                        }
                        
                        return $idcategorie;
                    }

                    function getCatIMC($idcategorie){

                         //connexion a la base de donnees
                         $conn =  new PDO('mysql:host=localhost;dbname=heathyyou;charest=utf8','root','');
                         if ($conn->connect_error){
                             die("Connection failed: " . $conn->connect_error);
                         }
                         else{
                             echo "Connected successfully <br/>";
                         
                         }

                        $sqlCatIMC = "SELECT * FROM CategorieImc WHERE idC=".$idcategorie;
						echo($sqlCatIMC);
                        echo "<br/>";

                        //Prepare our SQL statement,
                        $statementCatIMC = $conn->prepare($sql);	
        
                        //Execute the statement.
                            $statementCatIMC->execute();
            
                            echo "query reussi <br/>";
            
                        //resultat de la requete
                        $resultatCatIMC = $statementCatIMC->fetch();
                        echo "<br/>";

                        $nomCat = array($resultatCatIMC['nomCategorieImc']);
                         return $nomCat;
                    }

                    function getUser($userId){
                        $userId = $_SESSION['user'].[0];

                        //connexion a la base de donnees
                        $conn =  new PDO('mysql:host=localhost;dbname=heathyyou;charest=utf8','root','');
                        if ($conn->connect_error){
                            die("Connection failed: " . $conn->connect_error);
                        }
                        else{
                            echo "Connected successfully <br/>";
                        
                        }

                        $sqlUser = "SELECT * FROM USER WHERE idm=".$userId;
						echo($sqlUser);
                        echo "<br/>";

                    
                        //Prepare our SQL statement,
                        $statement = $conn->prepare($sql);	
        
                        //Execute the statement.
                            $statement->execute();
            
                            echo "query reussi <br/>";
            
                        //resultat de la requete
                        $resultat = $statement->fetch();
                        
                        echo "<br/>";

                        $infosUser = array($resultat['IMC'],$resultat['BMC'],$resultat['QBCOPTIMLE']);

                        return $infosUser;
                    }

                   
                    $info = getUser($_SESSION['user'].[0]);
                    $idcatIMC = CategorieIMC($info[0]);
                    $nomCatIMC= getCatIMC($idcatIMC);

                    ?>

                    <p>
                        <?php
                        
                            echo" Pour fonctionner, votre organisme à besoin de ".$info[1]."de calorie au minimums. Cependant, par rapport à votre mode de vie et à vos mensurations, la quantité de calories quotidienne idéale pour vous est de  ".$info[2]."calories";
                            echo "<br/>";
                            echo "Votre Indice de Masse Corporelle est de ".info[0].". Vous faite donc partie de la catégorie ".$nomCatIMC;
                        ?>
                    </p>

                

            </div>


   </section> 

    <footer>
        <ul id="listfooterleft"> <h3>Université Paul Valéry</h3> 
             <li>Adresse : Route de Mende, 34090 Montpellier</li>
             <li>Téléphone : 04 67 14 20 00</li>
             <li>Type : Université en France</li>
             <li>Président : Patrick Gilli</li>
             <li class="lienfooter"><a href="https://www.univ-montp3.fr/fr/universit%C3%A9" class="liens">A propos</a></li>

        </ul>
        <ul> <h3>Qui sommes nous ?</h3>
             <li>Etudiants en 3ème année de Licence MIASHS</li>
             <li>Domaine Data Science</li>
             <li class="lienfooter"><a href="https://www.univ-montp3.fr/fr/formations/offre-de-formation/licence-lmd-XA/sciences-humaines-et-sociales-SHS/licence-mathematiques-et-informatique-appliquees-aux-sciences-humaines-et-sociales-miashs-program-licence-miashs.html" class="liens">Licence MIASHS (Maths info appliquée aux SHS)</a></li>
             <li><a href="templates/contact.php" class="liens">Contact</a></li>
        </ul>
        <ul id="listfooterright"> <h3>Développeurs</h3> 
             <li>Moulika</li>
             <li>Yacine</li>
             <li>Johanna</li>
             <li>Justin</li>
             <li>Berk</li>
        </ul>
    </footer>

</body>
</html>