<?php
if(!isset($_SESSION)){
	session_start();
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
    <title>Body Check</title>
    <link rel="stylesheet" href="../style/model.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../scripts/jquery-3.4.1.min.js"></script>
    <script src="../scripts/app.js" type="text/javascript"></script>
</head>

<body>

           <header>
            <div class="logo-container">
                <a href="../index.php"><img src="../ressources/logo.png" alt="description" id="logo"></a>
            </div>
                <div class="container-menu-nav">
                    <nav class="top-menu-nav">
                        <ul class="top-menu">
                            <li><a href="../index.php" class="link">Accueil <i class="fa fa-home" aria-hidden="true"></i></a></li>
							<li><a href="platsJournée/etape3.php" class="link">calorie<i class="fa fa-columns" aria-hidden="true"></i></a></li>
                            <li><a href="test.php" class="link">Test <i class="fa fa-list" aria-hidden="true"></i></a></li>
                            <li><a href="apropos.php" class="link">A propos <i class="fa fa-question-circle-o" aria-hidden="true"></i></a></li>
                            <li><a href="contact.php" class="link">Contact <i class="fa fa-address-book-o" aria-hidden="true"></i></a></li>
							
							<?php
							if(isset($_SESSION['user'])){

                
								?> <li id="nav-moncompte"><a href= "Connexion.php" class="link"> <?php echo $_SESSION['user'][2];?><i class="fa fa-user-circle-o" aria-hidden="true"></i></a></li> 
                
								<?php 
								}else{?>
			
									<li id="nav-moncompte"><a href="Connexion.php" class="link">Mon Compte <i class="fa fa-user-circle-o" aria-hidden="true"></i></a></li>
									<?php 
								} 
							?>
							<li id="lang"><a><i class="fa fa-globe" aria-hidden="true"></i> FR <span id="eur">(EUR)</span></a></li>
							</ul>
							</nav>
				<div class="toggle"><span></span></div>
			</div>
        </header>


    <section>
        <p>Ici nous allons voir comment être en bonne santé. <br>
        Dans un premier temps, il est important de définir votre IMC : « indice pondéral calculé en divisant votre poids  par le carré de votre taille ».<br>
        Cet indice permet d’évaluer si vous êtes en souspoids ou en surpoids. L’IMC se divise en 7 catégories : <br> </p>
        <table>
            <tr>
                <th> Catégorie </th>
                <th> IMC </th>
            </tr>
            <tr>
                <th> Anorexie ou dénutrition </th>
                <th> -16,5 </th>
            </tr>
            <tr>
                <th> Maigreur </th>
                <th> [16,5 – 18,5[ </th>
            </tr>
            <tr>
                <th> Corpulence normale </th>
                <th> [18,5-25[ </th>
            </tr>
            <tr>
                <th> Surpoids </th>
                <th> [25-30[ </th>
            </tr>
            <tr>
                <th> Obésité modérée </th>
                <th> [30-35[ </th>
            </tr>
            <tr>
                <th> Obésité élevée </th>
                <th> [35-40[ </th>
            </tr>
            <tr>
                <th> Obésité morbide ou massive </th>
                <th> 40+ </th>
            </tr>
        </table>
        <p>A partir de ces données il est possible de calculer le poids nécessaire à perdre ou gagner pour atteindre un IMC correspondant à une corpulence normale.<br>
        Pour cela, il suffit de multiplier un IMC de la catégorie normale par sa taille au carré.<br>

        Maintenant que nous connaissons le poids à gagner ou perdre, cherchons à savoir quelle quantité de calories il va vous falloir gagner ou perdre correspondant au poids que vous voulez gagner ou perdre.<br> <br>



        Tout d’abord qu’est ce qu’une calorie ? <br><br>

        Une calorie est une mesure de l’énergie. Comme vous vous en doutez, notre corps a besoin d’énergie pour fonctionner convenablement ; ainsi il va utiliser les calories à disposition pour s’alimenter.

        L’énergie est essentiellement produite à partir des sucres dans le corps provenant de l’alimentation.<br>
        Une fois le plein de sucre réalisé, votre corps va pouvoir l’utiliser pour produire de l’énergie. SUPER ! Mais que se passe-t-il si le corps utilise moins de sucre qu’il en a à disposition ?<br>
        Eh bien, le corps va le stocker sous forme de graisse.<br>
        Autre cas, le corps utilise plus d’énergie qu’il dispose de sucre. Il va alors transformer la graisse corporelle en sucre pour s’alimenter.<br><br>

        Comment convertir les calories en poids ?<br><br>

        Il vous faut savoir qu’un kilo de graisse corporelle correspond à 7 700 kcal en moyenne. <br>


        Prenons par exemple M. Smith, un homme de 45 ans mesurant 1m60 pour 100kg. Il aime passer ses journées devant la télé à regarder l’inspecteur derrick.<br>
        Hier après midi, notre cher M. Smith est allé voir le médecin car il avait du mal à respirer. <br>
        Le médecin alarmé de la condition physique de son patient lui préconise d’urgence de perdre du poids.<br>
        Rentré à la maison M. Smith se renseigne sur les risques de surpoids. Il calcule son IMC pour savoir dans quelle catégorie il se situe. Mesurant 1m60 pour 100 kg, il fait le calcul suivant : 100/1,60² = 39,06 IMC. Ce qui correspond à la catégorie « Obésité élevée ». « Ça craint pense-t-il, il va falloir que je me mette sérieusement au régime!»<br><br>

        Il calcule le poids qu’il va devoir perdre, soit : 100 – (25*1,6²) = 36kg.<br>

        Il lui faut donc perdre 36kg, correspondant à 277 200 kcal. En moyenne, pour un homme de cet âge ayant une activité sportive inexistante le corps consomme 2500 kcal par jour. <br>
        M. Smith veut perdre ses 36 kg en un mois soit le calcul suivant :  277 200/30 = 9240 kcal par jour.
        Perdre 9240 kcal par jour est impossible. 
        Il décide alors de prendre son temps. Il part sur un régime d’un an.<br>
        Il lui faut donc faire le calcul suivant : 2500 - 277200/(12*30) = 1730 kcal par jour afin d’atteindre un IMC de 25 au bout d’un an.<br><br>

        Nous vous encourageons à suivre l’exemple de M. Smith si vous avez des problèmes de surpoids.</p>
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