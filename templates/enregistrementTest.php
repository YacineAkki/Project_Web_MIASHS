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
         
	<?php
			
			function getCatIMC($idcategorie){

				//connexion a la base de donnees
				$conn =   new PDO('mysql:host=localhost:8889;dbname=heathyYou;','root', 'root');
				if ($conn->connect_error){
					die("Connection failed: " . $conn->connect_error);
				}
				else{
					// echo "Connected successfully <br/>";
				
				}

			   $sqlCatIMC = "SELECT * FROM CategorieImc WHERE idC=".$idcategorie;
			//    echo($sqlCatIMC);
			//    echo "<br/>";

			   //Prepare our SQL statement,
			   $statementCatIMC = $conn->prepare($sql);	

			   //Execute the statement.
				   $statementCatIMC->execute();
   
				//    echo "query reussi <br/>";
   
			   //resultat de la requete
			   $resultatCatIMC = $statementCatIMC->fetch();
			//    echo "<br/>";

			   $nomCat = array($resultatCatIMC['nomCategorieImc']);
				return $nomCat;
		   }

			function FacteurCal($intensite){
				$idcategorie;
				if ($intensite==1) {
					$facteurCal = 1.2;
				}elseif ( $intensite==2) {
					$facteurCal = 1.375;
				}elseif ( $intensite==3) {
					$facteurCal = 1.55;
				}elseif ( $intensite==4) {
					$facteurCal = 1.75;
				}elseif ( $intensite==5) {
					$facteurCal = 1.9;
				
				}else {
					echo "erreur de calcul Facteur Calorie. Facteur calorie NOT FOUND";
				}
				
				return $facteurCal;
			}

			

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

				function age($bithdayDate) {

					$date1 =date_create($bithdayDate);
					// echo $date1->format("Y ");
					$date2= new DateTime;
					// echo $date2->format(" Y");

					$diff=date_diff($date1,$date2);

					return $diff->format("%Y");
				}
			
				function enregistrerUser($dateNais, $taille, $poids, $nomSport){
					
					

						$sexe= $_GET['Sexe'];
						// echo "Sexe = ".$sexe. "<br/>";

						

				        $dateNais=  $_GET['datenais'];
						// echo "Date de Naissance ".$dateNais. "<br/>";

	 	 		        $taille =  $_GET['taille'];
	 	 		        // echo "Taille = ".$taille. "<br/>";
	 	 		
	  			        $poids =  $_GET['poids'];
                        // echo "Poids = ".$poids. "<br/>";
                          
						$imc =  $poids/(($taille/100)*($taille/100));

						
						// echo "IMC = ".$imc." <br/>";

						$age = age("$dateNais");
						// echo "vous avez: ". $age. "ans <br/>";

						
						$nomSport= $_GET['nomsport'];
						// echo "Nom sport = ".$nomSport. "<br/>";
	
						if($_GET['Activitésphysiques ']=="Non"){
							$intensite= 1;
						}else {
							$intensite=  $_GET['nbsport'];
						}

						// echo "Intensité = ".$intensite. "<br/>";
			
						$facteurCal = FacteurCal($intensite);
						// echo "Facteur Calorie = ".$facteurCal. "<br/>";


						//  calcul du metabolise de base
						// c'est le nombre de calories par jour pour maintenir ses besoins métaboliques fondamentaux (Ce sont des kcal.)
						$bmc ;
                        if ($sexe == "Femme") {
							// echo("im here <br/>");
                            $bmc= 665+(9.6 * $poids) + (1.8 * $taille) - (4.7 * $age);
                        } else if ($sexe == "Homme"){
							// echo("somewhere <br/>");
							$bmc= 66+(13.7 * $poids) + (5 * $taille) - (6.8 * $age) ;
							// echo "im out <br/>";
                        } else {
							echo("erreur bmc <br/>");
						}

						// echo "im out <br/>";
						echo" Pour fonctionner, votre organisme à besoin de ".$bmc." de calories au minimum. <br/>"; 
						echo"<br/>";
                    
						  // categorie d'imc
						  $idc = CategorieIMC($imc);
						//   echo "Catego IMC = ".$idc."<br/>";

						  $nomCat = getCatIMC($idc);
						  echo "Votre Indice de Masse Corporelle est de ".$imc.".<br/>";
						  echo"<br/>";


						if(isset($_SESSION['user'])){
							$idNC = $_SESSION['user'][1];
							// print_r($idNC);
					
						}else {
							$idNC = 'NULL';
						}
					
	  			
						
					// calcul du Qoptimale, Quantité optimale de calories quotidienne pour le User

						$QBC = $bmc * $facteurCal;
						$_SESSION['user']['besoinCal']=array();
				$_SESSION['user']['besoinCal']=$QBC;
						echo ' Cependant, par rapport à votre mode de vie et à vos mensurations, la quantité de calories quotidienne idéale pour vous est de  '.$QBC.' calories. <br/>';
						echo"<br/>";
		            //connexion a la base de donnees
	                $conn = new PDO('mysql:host=localhost;dbname=heathyyou;charest=utf8','root','');
	                if ($conn->connect_error){
	                    die("Connection failed: " . $conn->connect_error);
	                }
	                else{
	                    // echo "Connected successfully <br/>";
	                 
	                }


			        //Our SQL statement, which will select a list of tables from the current MySQL database.
			            $sql = "INSERT INTO User (BMC, dateNais, poids,  taille, IMC, idC, QBCOPTIMLE, idNC) VALUES('$bmc', '$dateNais','$poids','$taille','$imc','$idc','$QBC','$idNC')";
                        // echo($sql);
						// echo "<br/>";

			        //Prepare our SQL statement,
			            $statement = $conn->prepare($sql);

	                //execute the statement
						$statement->execute();

						// echo'success ! <br/>';
						
						$sqlSport = "INSERT INTO Sport (niveauIntensite, nomSport) VALUES('$intensite', '$nomSport')";
						// echo($sqlSport);
						// echo "<br/>";

					//Prepare our SQL statement,
						$statementSport = $conn->prepare($sqlSport);

					//execute the statement
						$statementSport->execute();

						// echo'success Sport ! <br/>';


					echo "Vous pouvez maintenant aller dans la rubrique  Calorie, pour analyser votre alimentation !   Hop là! C'est juste un tout petit peu plus haut! ";
				
				}

				@enregistrerUser($_GET['dateNais'],$_GET['taille'],$_GET['poids'], $_GET['nomsport'] );
				
			?>
           
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