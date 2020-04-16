<!DOCTYPE html>
<html>

	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	    <!-- <link rel="stylesheet" href="../style/connexionRelated.css" type="text/css" media="screen"/>   -->
		<title>enregistrement test</title>
		<?php		
			
		include("platsJournée/bdConnect.php");	
			
				function enregistrerUser($dateNais, $taille, $poids){
				
                    //en registrement des donnes. cette fonction ne permets pas de remplir 
                    // qbcoptimale et reelle. pour cela il faut deja regler le sport
                    // sans idm non plus
				
				        $dateNais=  $_GET['datenais'];
				        echo "Date de Naissance ".$dateNais. "<br/>";
				
	 	 		        $taille =  $_GET['taille'];
	 	 		        echo "Taille ".$taille. "<br/>";
	 	 		
	  			        $poids =  $_GET['poids'];
                        echo "Poids= ".$poids. "<br/>";
                          
                        $imc =  $poids/($taille*$taille);

                        if ($_GET['femme']==True) {
                            $bmc= 665+(9.6 * $poids) + (1.8 * $taille) - (4.7 * $dateNais);
                        } else if ($_GET['homme'] ==True){
                            $bmc= 665+(9.6 * $poids) + (1.8 * $taille) - (4.7 * $dateNais) ;
                        } 

                    
	  			          
	  			
	            
	  		
		            //connexion a la base de donnees
	                $conn =  new PDO('mysql:host=localhost:8889;dbname=heathyYou;','root', 'root');
	                if ($conn->connect_error){
	                    die("Connection failed: " . $conn->connect_error);
	                }
	                else{
	                    echo "Connected successfully <br/>";
	                 
	                }


			        //Our SQL statement, which will select a list of tables from the current MySQL database.
			            $sql = "INSERT INTO User (BMC, dateNais, poids,  taille) VALUES('$bmc', '$dateNais','$poids','$taille')";

	 

			        //Prepare our SQL statement,
			            $statement = $conn->prepare($sql);

	                //execute the statement
			            $statement->execute();
			
	            }
				
		        enregistrerUser($_GET['dateNais'],  $_GET['taille'],$_GET['poids']);
				
		
		        echo'<META http-equiv="refresh" content="0; URL=p2.php">';
				
				
				
				
				
				function enregistrer ($nomsport,$nbsport){
	$bdd=getBD();
	$req = "INSERT INTO sport(nomSport,DuréeSport) VALUES ('$nomsport','$nbsport')";
	$reponse=$bdd->query($req);	


}


if($_GET['nomsport']!="" and $_GET['nbsport']!="" ) {
	
	
	enregistrer($_GET['nomsport'],$_GET['nbsport']);
	
	echo "<meta http-equiv='refresh' content='2; URL =test.php'>";

}

else {
echo "<meta http-equiv='refresh' content='2; URL =test.php'>";
}

			 
		
			?>
		
	
		
	</head>

</html>

