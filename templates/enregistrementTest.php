≈
<?php
session_start();
?><!DOCTYPE html>

<!DOCTYPE html>
<html>

	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	    <!-- <link rel="stylesheet" href="../style/connexionRelated.css" type="text/css" media="screen"/>   -->
		<title>enregistrement test</title>
		<?php
			

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
				$idcategorie;				if ($imc<16) {
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
						echo "Sexe = ".$sexe. "<br/>";

						

				        $dateNais=  $_GET['datenais'];
						echo "Date de Naissance ".$dateNais. "<br/>";

	 	 		        $taille =  $_GET['taille'];
	 	 		        echo "Taille = ".$taille. "<br/>";
	 	 		
	  			        $poids =  $_GET['poids'];
                        echo "Poids = ".$poids. "<br/>";
                          
						$imc =  $poids/(($taille/100)*($taille/100));
						echo "IMC = ".$imc." <br/>";

						$age = age("$dateNais");
						echo "vous avez: ". $age. "ans <br/>";

						
						$nomSport= $_GET['nomsport'];
						echo "Nom sport = ".$nomSport. "<br/>";
	
						if($_GET['Activitésphysiques ']=="Non"){
							$intensite= 1;
						}else {
							$intensite=  $_GET['nbsport'];
						}

						echo "Intensité = ".$intensite. "<br/>";
			
						$facteurCal = FacteurCal($intensite);
						echo "Facteur Calorie = ".$facteurCal. "<br/>";


						//  calcul du metabolise de base
						// c'est le nombre de calories par jour pour maintenir ses besoins métaboliques fondamentaux (Ce sont des kcal.)
						$bmc ;
                        if ($sexe == "Femme") {
							echo("im here <br/>");
                            $bmc= 665+(9.6 * $poids) + (1.8 * $taille) - (4.7 * $age);
                        } else if ($sexe == "Homme"){
							echo("somewhere <br/>");
							$bmc= 66+(13.7 * $poids) + (5 * $taille) - (6.8 * $age) ;
							echo "im out <br/>";
                        } else {
							echo("erreur bmc <br/>");
						}

						// echo "im out <br/>";
						echo "bmc = ".$bmc."<br/>";

                    
						  // categorie d'imc
						  $idc = CategorieIMC($imc);
						  echo "Catego IMC = ".$idc."<br/>";


						if(isset($_SESSION['user'])){
							$idNC = $_SESSION['user'][1];
							print_r($idNC);
					
						}else {
							$idNC = 'NULL';
						}
					
	  			
						
					// calcul du Qoptimale, Quantité optimale de calories quotidienne pour le User

						$QBC = $bmc * $facteurCal;
						echo "QBC optimale = ".$QBC."<br/>";
	  		
		            //connexion a la base de donnees
	                $conn =  new PDO('mysql:host=localhost:8889;dbname=heathyYou;','root', 'root');
	                if ($conn->connect_error){
	                    die("Connection failed: " . $conn->connect_error);
	                }
	                else{
	                    echo "Connected successfully <br/>";
	                 
	                }


			        //Our SQL statement, which will select a list of tables from the current MySQL database.
			            $sql = "INSERT INTO User (BMC, dateNais, poids,  taille, IMC, idC, QBCOPTIMLE, idNC) VALUES('$bmc', '$dateNais','$poids','$taille','$imc','$idc','$QBC','$idNC')";
                        echo($sql);
						echo "<br/>";

			        //Prepare our SQL statement,
			            $statement = $conn->prepare($sql);

	                //execute the statement
						$statement->execute();

						echo'success ! <br/>';
						
						$sqlSport = "INSERT INTO Sport (niveauIntensite, nomSport) VALUES('$intensite', '$nomSport')";
						echo($sqlSport);
						echo "<br/>";

					//Prepare our SQL statement,
						$statementSport = $conn->prepare($sqlSport);

					//execute the statement
						$statementSport->execute();

						echo'success Sport ! <br/>';
				
					}

				
				
		        enregistrerUser($_GET['dateNais'],  $_GET['taille'],$_GET['poids'], $_GET['nomsport'] );
				
		
		        echo'<META http-equiv="refresh" content="5; URL=platsJournée/repasTest.php">';
			 
		
			?>
		
	
		
	


		
	
		
	</head>

</html>

