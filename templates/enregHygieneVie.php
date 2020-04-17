<!DOCTYPE html>
<html>

	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	    <!-- <link rel="stylesheet" href="../style/connexionRelated.css" type="text/css" media="screen"/>   -->
        <title>enregistrement de l'hygiéne de Vie</title>
        
        <?php
			

			

			

				
			
				function enregistrerSport($nomSport, $intensite){
				
                    
                    
				
						$nomSport= $_GET['nomsport'];
						echo "Nom sport = ".$nomSport. "<br/>";

						

				        $intensite=  $_GET['nbsport'];
						echo "Intensité = ".$intensite. "<br/>";

						
	  		
		            //connexion a la base de donnees
	                $conn =  new PDO('mysql:host=localhost:8889;dbname=heathyYou;','root', 'root');
	                if ($conn->connect_error){
	                    die("Connection failed: " . $conn->connect_error);
	                }
	                else{
	                    echo "Connected successfully <br/>";
	                 
	                }


			        //Our SQL statement, which will select a list of tables from the current MySQL database.
			            $sql = "INSERT INTO Sport (niveauIntensite, nomSport) VALUES('$intensite', '$nomSport')";
                        echo($sql);
	 

			        //Prepare our SQL statement,
			            $statement = $conn->prepare($sql);

	                //execute the statement
                        $statement->execute();
                    
                       
			
	            }
				
		        enregistrerSport($_GET['nbsport'],  $_GET['nomsport']);
				
		
		        echo'<META http-equiv="refresh" content="5; URL=resultat.php">';
			 
		
			?>
		
	
		
	</head>

</html>
