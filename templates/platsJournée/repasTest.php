<!DOCTYPE html>


<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<head>
		<title>Test</title>
		<meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
		<script type="text/javascript" src="test.js"></script>
		<link rel="stylesheet" href="../style/test.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="..style/model.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="../scripts/jquery-3.4.1.min.js"></script>
        <script src="../scripts/app.js" type="text/javascript"></script>
	</head>
	<body>
		<header>
            <div class="logo-container">
                <a href="../../index.php"><img src="../ressources/logo.png" alt="description" id="logo"></a>
            </div>
                <div class="container-menu-nav">
                    <nav class="top-menu-nav">
                        <ul class="top-menu">
                            <li><a href="../index.php" class="link">Accueil <i class="fa fa-home" aria-hidden="true"></i></a></li>
							<li><a href="platsJournée/etape3.php" class="link">calorie<i class="fa fa-columns" aria-hidden="true"></i></a></li>
                            <li><a href="test.php" class="link">Test <i class="fa fa-list" aria-hidden="true"></i></a></li>
                            <li><a href="apropos.php" class="link">A propos <i class="fa fa-question-circle-o" aria-hidden="true"></i></a></li>
                            <li><a href="contact.php" class="link">Contact <i class="fa fa-address-book-o" aria-hidden="true"></i></a></li>
                            <li id="nav-moncompte"><a href="Connexion.php" class="link">Mon Compte <i class="fa fa-user-circle-o" aria-hidden="true"></i></a></li>
                            <li id="lang"><a><i class="fa fa-globe" aria-hidden="true"></i> FR <span id="eur">(EUR)</span></a></li>
                        </ul>
                    </nav>
                <div class="toggle"><span></span></div>
            </div>
        </header>
    	<section>

        <!-- Johanna, adapte cette partie à la tienne. C'est le questionnaire concernant la partie repas. -->
        <!-- Pense aussi en l'enchaînement avec la partie sur l'hygiène de vie. -->

        <form action="enregistrementTest2.php" method="get" autocomplete="off">
			


            <!-- plat type journalier -->
           <div>
                   <h1> Habitude de vie Alimentaire </h1>
           
                   <p>Maintenant que les présentations sont faites, c'est le moment de voir plus en détails ce que vous consommer par jour.<br/> 
                    
                   Donnez-moi, un exemple de repas (plats, boissons, snacks etc ...) que vous manger aux moments de la journée ci-dessous :</p>
                   <br/> 
                   
               <button onclick = "bouton('div4')" id="but2"> Le matin  </button><br/>	
       
           </div>

           <div class="etape2" id="div4">
           <h3>Que prenez- vous les matins?</h3><br/>	
                 <label> repas :</label>
                <input type="text" name="matin" value= "oeufs dures" required>

           </div>
           
               <button  onclick = "bouton('div5')" id="but2"> À midi  </button><br/>	

           <div class="etape2" id="div5">
           <h3>Que prenez- vous à midi?</h3><br/>	
                 <label> repas :</label>
                <input type="text" name="matin" value= " oeufs dures" required>

           </div>

           <button onclick = "bouton('div6')" id="but3"> Au goûter  </button><br/>	

           <div class="etape2" id="div6">
               Snack time
               <br/>	
                 <label> repas :</label>
                <input type="text" name="matin" value= "oeufs dures" required>
               

           </div>
           
               <button onclick = "bouton('div7')" id="but4"> Le soir  </button><br/>	

           <div class="etape2" id="div7">
           <h3>Que mangez- vous le soir?</h3><br/>	
                 <label> repas :</label>
                <input type="text" name="matin" value= "" required>

           </div>

       
           
           <div class="input" id="submit">
                           <input type="submit" value="Valider">
           </div>
           
       </form>

       <script>
           //  la fonction pour clicker
                   function bouton(div1){
                   //alert(getComputedStyle(div1).display);
                   let d1 = document.getElementById(div1);
                   if(getComputedStyle(d1).display != "none"){
                   
                   d1.style.display = "none";
                   } else {
                   d1.style.display = "block";
                   }
                   }

                   function boutonClass(div1){
                       
                       let d1 = document.getElementsByClassName(div1);
                       
                       if(getComputedStyle(d1).display != "none"){
                       
                           d1.style.display = "none";
                       } else {
                           d1.style.display = "block";
                       }
                   }

       </script> 

        </section>
		<footer>
        <ul id="listfooterleft"> <h3>Université Paul Valéry</h3> 
             <li>Adresse : Route de Mende, 34090 Montpellier</li>
             <li>Téléphone : 04 67 14 20 00</li>
             <li>Type : Université en France</li>
             <li>Président : Patrick Gilli</li>
             <li class="lienfooter"><a href="https://www.univ-montp3.fr/fr/universit%C3%A9" class="liens">A propos</a></li>

        </ul>
        <ul> <h3>Qui sommes nous ?</h3>
             <li>Etudiants en 3ème année de Licence MIASHS</li>
             <li>Domaine Data Science</li>
             <li class="lienfooter"><a href="https://www.univ-montp3.fr/fr/formations/offre-de-formation/licence-lmd-XA/sciences-humaines-et-sociales-SHS/licence-mathematiques-et-informatique-appliquees-aux-sciences-humaines-et-sociales-miashs-program-licence-miashs.html" class="liens">Licence MIASHS (Maths info appliquée aux SHS)</a></li>
             <li><a href="contact.php" class="liens">Contact</a></li>
        </ul>
        <ul id="listfooterright"> <h3>Développeurs</h3> 
             <li>Moulika</li>
             <li>Yacine</li>
             <li>Johanna</li>
             <li>Justin</li>
             <li>Berk</li>
        </ul>
    </footer>

	</body>

</html>
