<!DOCTYPE html>
<html>

	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	    <!-- <link rel="stylesheet" href="../style/connexionRelated.css" type="text/css" media="screen"/>   -->
		<title>enregistrement test</title>
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

				function age($bithdayDate) {

					$date1 =date_create($bithdayDate);
					// echo $date1->format("Y ");
					$date2= new DateTime;
					// echo $date2->format(" Y");

					$diff=date_diff($date1,$date2);

					return $diff->format("%Y");
				}
			
				function enregistrerUser($dateNais, $taille, $poids){
				
                    //en registrement des donnes. cette fonction ne permets pas de remplir 
                    // qbcoptimale et reelle. pour cela il faut deja regler le sport
                    
				
						$Femme= $_GET['Femme'];
						echo "Femme = ".$Femme. "<br/>";

						$Homme= $_GET['Homme'];
						echo "Homme = ".$Homme. "<br/>";

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

						
			
					
						//  calcul du metabolise de base
						// c'est le nombre de calories par jour pour maintenir ses besoins métaboliques fondamentaux (Ce sont des kcal.)
						$bmc ;
                        if ($Femme == 1) {
							echo("im here <br/>");
                            $bmc= 665+(9.6 * $poids) + (1.8 * $taille) - (4.7 * $age);
                        } else if ($Homme == 1){
							echo("somewhere <br/>");
							$bmc= 66+(13.7 * $poids) + (5 * $taille) - (6.8 * $age) ;
							echo "im out <br/>";
                        } else {
							echo("erreur bmc <br/>");
						}

						// echo "im out <br/>";
						echo "bmc = ".$bmc."<br/>";

                    
						  // categorie d'imc
						  $idc = CategorieIMC('$imc');
						  echo "Catego IMC = ".$idc."<br/>";
	  			
	            
	  		
		            //connexion a la base de donnees
	                $conn =  new PDO('mysql:host=localhost:8889;dbname=heathyYou;','root', 'root');
	                if ($conn->connect_error){
	                    die("Connection failed: " . $conn->connect_error);
	                }
	                else{
	                    echo "Connected successfully <br/>";
	                 
	                }


			        //Our SQL statement, which will select a list of tables from the current MySQL database.
			            $sql = "INSERT INTO User (BMC, dateNais, poids,  taille, IMC, idC) VALUES('$bmc', '$dateNais','$poids','$taille','$imc','$idc')";
                        echo($sql);
	 

			        //Prepare our SQL statement,
			            $statement = $conn->prepare($sql);

	                //execute the statement
			            $statement->execute();
			
	            }
				
		        enregistrerUser($_GET['dateNais'],  $_GET['taille'],$_GET['poids']);
				
		
		        echo'<META http-equiv="refresh" content="5; URL=platsJournée/repasTest.php">';
			 
		
			?>
		
	
		
	</head>

</html>


		
	
		
	</head>

</html>

