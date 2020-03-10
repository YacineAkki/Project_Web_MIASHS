<!DOCTYPE html>
<html>

  <head>
      
      <meta charset="utf-8">

      <title>FitnessNews.com</title>

      <link rel="stylesheet" type="text/css" href="styles/Footer.css">
      <link rel="stylesheet" type="text/css" href="styles/Header.css">
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

                  <a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Accueil</a>
                  <a href="templates/nouveau.php"><i class="fa fa-clipboard" aria-hidden="true"></i>S'inscrire</a> 
                  <a href="templates/Connexion.html"><i class="fa fa-sign-in" aria-hidden="true"></i> Connexion</a>
                  <a href="templates/Statistiques.html"><i class="fa fa-calculator" aria-hidden="true"></i> Statistiques</a>
                  <a href="templates/Contact.html"><i class="fa fa-envelope" aria-hidden="true"></i> Contact</a>
                  <a href="templates/A propos.html"><i class="fa fa-question-circle" aria-hidden="true"></i> A propos</a>

                </div>

                <div class="toggle">
                
                  <span class="toggleicons"></span>

                </div>

              </div>


           </nav>

        </header>


      <script src="scripts/app.js" type="text/javascript"></script>

      <section class="container-pers">
        <!-- Formulaire de connexion -->
        <form method="POST" action="../src/Login.php">

          <label>Identifiant</label>
        <input type="text" name="Idconn" title="Identifiant" autocomplete="">

          <label>Mot de Passe</label>
        <input type="passeword" name="Mdp">

          <input type="submit" name="connexion" value="Se connecter">

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