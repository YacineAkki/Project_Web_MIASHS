<?php
function creationPanier(){
	if(!isset($_SESSION['panier'])){
		
		$_SESSION['panier']=array();
		$_SESSION['panier']['nomPlat']=array();
		$_SESSION['panier']['idP']=array();
		$_SESSION['panier']['calPlat']=array();
		$_SESSION['panier']['quantPlat']=array();
		$_SESSION['panier']['glu']=array();
		$_SESSION['panier']['li']=array();
		$_SESSION['panier']['pro']=array();
		
		
		
		
		
		
	}
	return true;
}





function ajouterPlat($nomPlat,$quantPlat,$calPlat,$glu,$li,$pro,$idP){
	
	if(creationPanier() ){
		
		$position_plat = array_search($nomPlat,$_SESSION['panier']['nomPlat']);
		
		if($position_plat !==false){
			
			$_SESSION['panier']['quantPlat'][$position_plat]+=$quantPlat;
		
		}else{
			
			array_push($_SESSION['panier']['nomPlat'],$nomPlat);
			array_push($_SESSION['panier']['quantPlat'],$quantPlat);
			array_push($_SESSION['panier']['calPlat'],$calPlat);
			array_push($_SESSION['panier']['glu'],$glu);
			array_push($_SESSION['panier']['li'],$li);
			array_push($_SESSION['panier']['pro'],$pro);
			array_push($_SESSION['panier']['idP'],$idP);
		}
		
		
		
	}else{
		echo 'erreur';
	}
	
}





function modifierQuantPlat($nomPlat,$quantPlat){
	
	if(creationPanier()){
		
		if($quantPlat>0){
			
			$position_produit= array_search($nomPlat,$_SESSION['panier']['nomPlat']);
			
			if($position_produit!== false){
				$_SESSION['panier']['quantPlat'][$position_produit]=$quantPlat;
			}
			
		}else{
			
			supprimerPlat($nomPlat);
		}
		
	}else{
		
		echo 'erreur2';
		
	}
	
	
}





function supprimerPlat($nomPlat){
	
	if(creationPanier()){
		
		$tmp= array();
		$tmp['nomPlat'] = array();
		$tmp['quantPlat'] = array();
		$tmp['calPlat'] = array();
		$tmp['glu']=array();
		$tmp['li']=array();
		$tmp['pro']=array();
		$tmp['idP']=array();
		
		for($i=0; $i<count($_SESSION['panier']['nomPlat']);$i++){
			
			if($_SESSION['panier']['nomPlat'][$i]!== $nomPlat){
				
			array_push($tmp['nomPlat'],$_SESSION['panier']['nomPlat'][$i]);
			array_push($tmp['quantPlat'],$_SESSION['panier']['quantPlat'][$i]);
			array_push($tmp['calPlat'],$_SESSION['panier']['calPlat'][$i]);
			array_push($tmp['glu'],$_SESSION['panier']['glu'][$i]);
			array_push($tmp['li'],$_SESSION['panier']['li'][$i]);
			array_push($tmp['pro'],$_SESSION['panier']['pro'][$i]);
			array_push($tmp['idP'],$_SESSION['panier']['idP'][$i]);
				
		}
		}
		
		$_SESSION['panier']=$tmp;
		unset($tmp);
		
	}
else{
		
		echo 'erreur3';
	}
	
	}
	
	
	
	
	
	function compterPlat(){
		
		if(isset($_SESSION['panier'])){
			
			return count($_SESSION['panier']['nomPlat']);
			
		}
	}
	
	
	
	function supprimerPanier(){
		
		
			
			unset($_SESSION['panier']);
		
		
	}
	
	function suprr($nomPlat){
		
		for($i=0; $i<count($_SESSION['panier']['nomPlat']);$i++){
			if($_SESSION['panier']['nomPlat'][$i]==$nomPlat){
				unset($_SESSION['panier'][$i]);
			}
			
		}
	}
	
	
	function calPanier (){
		
		$calPanier=0;
		
		for($i=0; $i<count($_SESSION['panier']['nomPlat']);$i++){
		
		$calPanier += $_SESSION['panier']['quantPlat'][$i]*$_SESSION['panier']['calPlat'][$i];
			
			
		}
		
		return $calPanier;
		
		
		
		
	}
	
	
	
	
	
	function cumulEquilibre(){
		$equi= "pas de plat";
		$somme=0;
		$liResult=0;
		$gluResult=0;
		$proResult=0;
		$a=34;
		$b=41;
		$cc=10;
		$dd=16;
		$e=49;
		$f=57;
		$quantTotal=0;
		
		
		for($i=0; $i<count($_SESSION['panier']['nomPlat']);$i++){
			
			$somme = floatval($_SESSION['panier']['li'][$i])+floatval($_SESSION['panier']['glu'][$i])+floatval($_SESSION['panier']['pro'][$i]);
			$cent=100;
			$liResult+=$_SESSION['panier']['quantPlat'][$i]*(($cent*floatval($_SESSION['panier']['li'][$i]))/$somme);
			$gluResult+=$_SESSION['panier']['quantPlat'][$i]*(($cent*floatval($_SESSION['panier']['glu'][$i]))/$somme);
			$proResult+=$_SESSION['panier']['quantPlat'][$i]*(($cent*floatval($_SESSION['panier']['pro'][$i]))/$somme);
			
	
			$quantTotal +=$_SESSION['panier']['quantPlat'][$i];
			
		}
		
		 
		
		$liResultFinal= $liResult/$quantTotal;
		$gluResultFinal= $gluResult/$quantTotal;
		$proResultFinal= $proResult/$quantTotal;
			
			echo "les proteines sont au pourcentage de :". round($proResultFinal)."% </br>";
			echo "les lipides sont au pourcentage de :". intval($liResultFinal)."% </br>";
			echo "les glucides sont au pourcentage de :". intval($gluResultFinal)."% </br>";
			
			
			if($a<$liResultFinal and $liResultFinal<$b and  $cc<$proResultFinal  and $proResultFinal<$dd and $e<$gluResultFinal and $gluResultFinal <$f){
				
				$equi="Oui , le cumul des plats de votre journée est equilibré.";
				
			 
			}else{
				
				$equi="<p>Non , le cumul des plats de votre journée n'est pas equilibré.</p>";
				
			}
			
			
		return $equi;
		
		
	}
	
	
	

?>