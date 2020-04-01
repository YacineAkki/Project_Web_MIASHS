<!DOCTYPE html>


    <html>
        
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />   
	        <title>Inscription</title>
	        <link rel="stylesheet" href="../style/connexionRelated.css" type="text/css" media="screen"/>
            <link rel="stylesheet" href="../style/model.css">
            <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="../scripts/jquery-3.4.1.min.js"></script>
            <script src="../scripts/app.js" type="text/javascript"></script>
        </head>

        <body>

            <header>
                    <div class="logo-container">
                        <a href="index.php"><img src="ressources/logo.png" alt="description" id="logo"></a>
                    </div>
                    <div class="container-menu-nav">
                        <nav class="top-menu-nav">
                            <ul class="top-menu">
                                <li><a href="index.php" class="link">Accueil <i class="fa fa-home" aria-hidden="true"></i></a></li>
                                <li><a href="templates/test.php" class="link">Test <i class="fa fa-list" aria-hidden="true"></i></a></li>
                                <li><a href="templates/apropos.php" class="link">A propos <i class="fa fa-question-circle-o" aria-hidden="true"></i></a></li>
                                <li><a href="templates/contact.php" class="link">Contact <i class="fa fa-address-book-o" aria-hidden="true"></i></a></li>
                                <li id="nav-moncompte"><a href="templates/moncompte.php" class="link">Mon Compte <i class="fa fa-user-circle-o" aria-hidden="true"></i></a></li>
                                <li id="lang"><a><i class="fa fa-globe" aria-hidden="true"></i> FR <span id="eur">(EUR)</span></a></li>
                            </ul>
                        </nav>
                        <div class="toggle"><span></span></div>
                    </div>
            </header>

            <div id="container">

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
            <footer>
                <ul><h3>Université Paul Valéry</h3>
                    
                </ul>
                <ul><h3>Qui sommes nous ?</h3>
                    
                </ul>
                <ul><h3>A Propos</h3>
                    
                </ul>
            </footer>
        </body>
</html>
