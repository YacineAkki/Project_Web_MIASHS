<?php
session_start();
?>

<!DOCTYPE html>


<html>
   

    <head>
        <meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
        <title>Se connecter</title>
        <link rel="stylesheet" href="../style/connexionRelated.css" type="text/css" media="screen"/>
    </head>

    <body>
         <?php


                $conn =  new PDO('mysql:host=localhost:8889;dbname=heathyYou;','root', 'root');
                if ($conn->connect_error){
                    die("Connection failed: " . $conn->connect_error);
                }
                else{
                    echo "Connected successfully <br/>";

                }

                //Our SQL statement, which will select the client from the current MySQL database.
                    $sql= "SELECT * FROM newClient WHERE mail='" . $_POST['mail']."' and motdepasse='" . $_POST['motdepasse']."'";
                    echo($sql);
                    echo "<br/>";

                //Prepare our SQL statement,
                    $statement = $conn->prepare($sql);	
    
                //Execute the statement.
                    $statement->execute();
    
                    echo "query reussi <br/>";
    
                //resultat de la requete
                $resultat = $statement->fetch();
                // print_r($resultat);
                echo "<br/>";
                if ($resultat['idNc'] != "") {
                    //correction idnc
                    $_SESSION['user']=array($resultat['nom'],$resultat['idNc'],$resultat['prenom'],$resultat['mail'],$resultat['motdepasse']);
                    print_r($_SESSION['user']);
                    echo "<br/>";
                    echo "im here";
                    echo'<META http-equiv="refresh" content="2; URL=../index.php">';
                } else{
                    
                    echo'<META http-equiv="refresh" content="2; URL=connexion.php">';
                    
                }
    
                $resultat->closeCursor();   
               


            ?>

    </body>
    
</html>
