<!DOCTYPE html>
<html>

	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	    <!-- <link rel="stylesheet" href="../style/connexionRelated.css" type="text/css" media="screen"/>   -->
        <title>enregistrement de l'hygiéne de Vie</title>
        

            <?php

                function enregistrer ($nomsport,$nbsport){
                            $bdd=getBD();
                            $req = "INSERT INTO sport(nomSport,DuréeSport) VALUES ('$nomsport','$nbsport')";
                            $reponse=$bdd->query($req);	


                        }


                        if($_GET['nomsport']!="" and $_GET['nbsport']!="" ) {
                            
                            
                            enregistrer($_GET['nomsport'],$_GET['nbsport']);
                            
                            echo "<meta http-equiv='refresh' content='2; URL =resultat.php'>";

                        }

                        else {
                        echo "<meta http-equiv='refresh' content='2; URL =hygieneVie.php'>";
                        }

		    
		       
			 
		
			?>
		
	
		
	</head>

</html>
