

<?php
session_start();
?><!DOCTYPE html>


<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<head>
		<title>Test</title>
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
                <a href="../index.php"><img src="../ressources/logo.png" alt="description" id="logo"></a>
            </div>
                <div class="container-menu-nav">
                    <nav class="top-menu-nav">
                        <ul class="top-menu">
                            <li><a href="../index.php" class="link">Accueil <i class="fa fa-home" aria-hidden="true"></i></a></li>
							<li><a href="platsJournée/etape3.php" class="link">calorie<i class="fa fa-columns" aria-hidden="true"></i></a></li>
                            <li><a href="test.php" class="link">Test <i class="fa fa-list" aria-hidden="true"></i></a></li>
                            <li><a href="apropos.php" class="link">A propos <i class="fa fa-question-circle-o" aria-hidden="true"></i></a></li>
                            <li><a href="contact.php" class="link">Contact <i class="fa fa-address-book-o" aria-hidden="true"></i></a></li>
							
							<?php
							if(isset($_SESSION['user'])){

                
								?> <li id="nav-moncompte"><a href= "Connexion.php" class="link"> <?php echo $_SESSION['user'][2];?><i class="fa fa-user-circle-o" aria-hidden="true"></i></a></li> 
                
								<?php 
								}else{?>
			
									<li id="nav-moncompte"><a href="Connexion.php" class="link">Mon Compte <i class="fa fa-user-circle-o" aria-hidden="true"></i></a></li>
									<?php 
								} 
							?>
							<li id="lang"><a><i class="fa fa-globe" aria-hidden="true"></i> FR <span id="eur">(EUR)</span></a></li>
							</ul>
							</nav>
				<div class="toggle"><span></span></div>
			</div>
        </header>
    	<section>

                <h1> Votre résultat</h1>

                <div>
                <?php
                    echo"hey Ya! <br/>";
                    if(isset($_SESSION['user'])){

                        echo'Vous êtes connecter'; 
                        print_r( $_SESSION['user']);
                
                
                    }else {
                     echo'veuillez-vous connecter'.'<br/>'; 
                    }

                    // function getUser($userId){
                        $userId = $_SESSION['user'][1];
                       echo($userId);

                        //connexion a la base de donnees
                        $conn =  new PDO('mysql:host=localhost;dbname=heathyyou;charest=utf8','root','');
                        if ($conn->connect_error){
                            die("Connection failed: " . $conn->connect_error);
                        }
                        else{
                            echo "Connected successfully <br/>";
                        
                        }

                        $sqlUser = "SELECT * FROM USER WHERE idNC=".$userId;
						echo($sqlUser);
                        echo "<br/>";

                    
                        //Prepare our SQL statement,
                        $statement = $conn->prepare($sql);	
        
                        //Execute the statement.
                            $statement->execute();
            
                            echo "query reussi <br/>";
            
                        //resultat de la requete
                        
                        $resultat = $statement->fetch();
                      
                        echo $resultat['IMC'];
                        
                        
                        
                        
                        echo "<br/>";
                        
                        $infosUser = array($resultat['IMC'],$resultat['BMC'],$resultat['QBCOPTIMLE']);
                        // print_r($infosUser);

                        return $infosUser;
                    // }

                    // $info = getUser($_SESSION['user']);
                    // print_r($info);

                    
                   
                    
                ?>

                

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
             <li><a href="contact.php" class="liens">Contact</a></li>
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
