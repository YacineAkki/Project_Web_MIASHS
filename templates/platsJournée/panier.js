function enreg (){

function enregistrer ($d,$calT,$idJ){
	$bdd=getBD();
	$req = "INSERT INTO journéeuser(idJ,CalTotal,date,) VALUES ('$idJ','$calT','$d')";
	$reponse=$bdd->query($req);	


}

$calT=calPanier();
if($_POST['d']!="" and $calT!=""  ) {
	
	
	enregistrer($_POST['d'],$calT,rand());
	
	echo "info inseré ";

}

}