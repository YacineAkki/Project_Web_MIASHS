<!DOCTYPE html>


    <html>
        
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />   
	        <title>Inscription</title>
	        <link rel="stylesheet" href="../style/connexionRelated.css" type="text/css" media="screen"/>
        </head>

        <body>

            <div >
                    

                    <!-- saisi des inputs --> 
                    <form action="enregistrement.php" method="post" autocomplete="off">

                        <h1> Inscription </h1>
                        
                        <div class="input">
                            <label>Nom :</label>
                            <?php

                                echo '<input type="text" name="nom" value ='. $_POST['var1']. '/>';

                            ?>
                        </div>

                        <div class="input">
                            <label>Prénom :</label>
                            <?php

                                echo '<input type="text" name="prenom" value ='. $_POST['var2']. '/>';

                            ?>
                        </div>

                        <div class="input">
                            <label>Adresse e-mail :</label>
                            <?php

                                echo '<input type="text" name="mail" value ='. $_POST['var3']. '/>';

                            ?>
                        </div>


                        <div class="input">

                            <label>Mot de passe :</label>
                            <input type="password" name="motdepasse" value= "">

                        </div>

                        <div class="input">

                            <label>Conrfirmez votre mot de passe :</label>
                            <input type="password" name="motdepasse2" value= "">

                        </div>


                        <div class="input" id="submit">
                            <input type="submit" value="S'inscrire">
                        </div>

                        

                    </form>

                    
                        
                   

             </div>  

        </body>
</html>
