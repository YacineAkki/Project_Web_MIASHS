<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
    <title>Body Check</title>
    <link rel="stylesheet" href="style/model.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="scripts/jquery-3.4.1.min.js"></script>
    <script src="scripts/app.js" type="text/javascript"></script>
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
                    <li id="nav-moncompte"><a href="templates/Connexion.php" class="link">Mon Compte <i class="fa fa-user-circle-o" aria-hidden="true"></i></a></li>
                    <li id="lang"><a><i class="fa fa-globe" aria-hidden="true"></i> FR <span id="eur">(EUR)</span></a></li>
                </ul>
            </nav>
            <div class="toggle"><span></span></div>
        </div>
    </header>

    <section>
        <p> Bonjour, notre site a pour but de vous aider à améliorer votre santé. </p> <br>
        <p> En effet, pour y parvenir, vous pouvez calculer votre indice pondéral et nous vous indiquerons si vous devez perdre, gagner ou maintenir votre poids. </p> <br>
        <p> A la suite de cette indication, nous calculerons la quantité de calories nécessaire à votre organisme pour tenir toute une journée. Suite à cela, nous vous proposerons la quantité de calories à consommer chaque jour pour améliorer votre santé. </p> <br>
        <p> Vous pourrez ensuite consulter nos différents plats afin de composer des repas équilibrés adaptés a votre régime. </p>
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
             <li><a href="templates/contact.php" class="liens">Contact</a></li>
        </ul>
        <ul id="listfooterright"> <h3>Développeurs</h3> 
             <li>Monika</li>
             <li>Yacine</li>
             <li>Johanna</li>
             <li>Justin</li>
             <li>Berk</li>
        </ul>
    </footer>
    

</body>
</html>