<!DOCTYPE html>
<html>

	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	    <link rel="stylesheet" href="../style/connexionRelated.css" type="text/css" media="screen"/>  
		<title>enregistrement</title>
		<?php		
			
			if(empty($_POST['nom']) or empty($_POST['prenom'])  or empty($_POST['mail']) or $_POST['motdepasse']!= $_POST['motdepasse2']  ) {

	            echo'<META http-equiv="refresh" content="2; URL=Inscription.php?var1='.$_POST['nom'].'&var2='.$_POST['prenom'].'&var3='.$_POST['mail'].'">';
			
			} else{
			
				function enregistrer($nom, $prenom, $email,  $mdp ){
				
			        //en registrement des donnes
				
				        $nom =  $_POST['nom'];
				        echo "Nom= ".$nom. "<br/>";
				
	 	 		        $prenom =  $_POST['prenom'];
	 	 		        echo "Prenom= ".$prenom. "<br/>";
	 	 		
	  			        $email =  $_POST['mail'];
	  			        echo "Mail= ".$email. "<br/>";
	  			
	  			        $mdp =  $_POST['motdepasse'];
	                      echo "saisie de mot de passe";
	            
	  		
		            //connexion a la base de donnees
	                $conn =  new PDO('mysql:host=localhost:8889;dbname=heathyYou;','root', 'root');
	                if ($conn->connect_error){
	                    die("Connection failed: " . $conn->connect_error);
	                }
	                else{
	                    echo "Connected successfully <br/>";
	                 
	                }


			        //Our SQL statement, which will select a list of tables from the current MySQL database.
			            $sql = "INSERT INTO newClient (nom, prenom, mail,  motdepasse) VALUES('$nom', '$prenom','$email','$mdp')";

	 

			        //Prepare our SQL statement,
			            $statement = $conn->prepare($sql);

	                //execute the statement
			            $statement->execute();
			
	            }
				
		        enregistrer($_POST['var1'],  $_POST['var2'],$_POST['var3'],$_POST['motdepasse'] );
				
		
		        echo'<META http-equiv="refresh" content="0; URL=../index.php">';
			}    
		
			?>
		
	
		
	</head>

</html>

