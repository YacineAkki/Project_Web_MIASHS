<html>

  <head>
    
    <meta charset="utf-8">

    <title>FitnessNews.com</title>

    <link rel="stylesheet" type="text/css" href="../styles/Footer.css">
    <link rel="stylesheet" type="text/css" href="../styles/Header.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" type=""></script>

  </head>

  <body>
    
    <header>

          <nav class="menu">

              <div class="inner">

                <div class="titrebox">

                  <h1 class="titre">Fitness News</h1>

                </div>

                <div class="navbox">

                  <a href="../index.php"><i class="fa fa-home" aria-hidden="true"></i> Accueil</a>
                  <a href="nouveau.php"><i class="fa fa-clipboard" aria-hidden="true"></i> S'inscrire</a> 
                  <a href="Connexion.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Connexion</a>
                  <a href="Statistiques.php"><i class="fa fa-calculator" aria-hidden="true"></i> Statistiques</a>
                  <a href="Contact.php"><i class="fa fa-envelope" aria-hidden="true"></i> Contact</a>
                  <a href="A propos.php"><i class="fa fa-question-circle" aria-hidden="true"></i> A propos</a>

                </div>

                <div class="toggle">
                
                  <span class="toggleicons"></span>

                </div>

              </div>


          </nav>

    </header>

    <script src="scripts/app.js" type="text/javascript"></script>

    <section class="container-pers">

      <form action="../src/enregistrement.php" method="get" autocomplete="off">

          <p>
          Nom :
          <input type="text" name="n" value=""/>
          </p>
          <p>
          Prénom :
          <input type="text" name="p" value=""/>
          </p>

          <p>
          Adresse email :
          <input type="mail" name="maill" value=""/>
          </p>

          <p>
          numéro de telephone  :
          <input type="int" name="num" value=""/>
          </p>

          <p>
          Mot de passe :
          <input type="password" name="mdp1" value=""/>
          </p>

          <p>
          Confirmez le mot de passe :
          <input type="password" name="mdp2" value=""/>
          </p>
          <p>
          <input type="submit" value="Envoyer">
          </p>

      </form>

    </section>



    


    <footer class="bas-page">

      <div class="inner">
        <div class="section">
          
        </div>
        <div class="section">
          
        </div>
        <div class="section">
          
        </div>
      </div>

    </footer> 
    

	

	 </body>
</html>