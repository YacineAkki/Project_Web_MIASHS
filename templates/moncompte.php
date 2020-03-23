<!DOCTYPE html>


        <html>
           

            <head>
                <meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
	            <title>Connexion</title>
	            <link rel="stylesheet" href="../style/connexionRelated.css" type="text/css" media="screen"/>
            </head>
            <body>

                <div id="container">
                    

                    <!-- saisi des inputs --> 
                    <form action="se_connecter.php" method="post" autocomplete="off">
                        <h1> Connexion </h1>
                        <div class="input">
                            <label>Adresse e-mail :</label>
                            <?php

                                echo '<input type="text" name="mail" value ='. $_POST['mail']. '/>';

                            ?>
                     </div>


                        <div class="input">

                            <label>Mot de passe :</label>
                            <input type="password" name="motdepasse" value= "">

                        </div>


                        <div class="input" id="submit">
                            <input type="submit" value="Envoyer">
                        </div>

                        <h4>Si vous n'avez pas de compte, veuillez en créer un :</h4> 
                        <br/> 
                        <h2 id="inscri"><a href="inscription.php">Inscription</a></h2>

                    </form>

                    
                        
                   

                </div>  

            </body>
        </html>

